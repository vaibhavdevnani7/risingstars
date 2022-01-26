<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function __construct()
    {
        
    }
    function addProduct(){
        $tags= DB::table('tags')->where(['status'=>1])->get();
        return view('product.form',compact('tags'));
        //return view('product.add',compact('tags'));
    }
    function generateSlag( $prefix = 'P'){

        $chars = "AB1234567890CDEFGHIJKLMNOPQRSTUVWXYZ";
        $refferal_code = "";
        for ($i = 0; $i < 8; $i++) {
            $refferal_code .= $chars[mt_rand(0, strlen($chars) - 1)];
        }
        return $refferal_code;
    }
    function store(){
        
        $data = request()->except(['_token','gallery']);
        $data['link'] = request('link')?json_encode($data['link']):null;


        
        
        $temp = []; 
        if(!empty($data['partner'])){
            foreach($data['partner'] as $key=>$parter)
            {
                if($key==0)
                    continue;
                $temp[] = $parter;
            }
        }
        else
            $data['partner'] = null;
        $data['partner'] = json_encode($temp);
        $data['discoverer'] = json_encode($data['discoverer']);
        
        
        $data['tags'] = json_encode($data['tags']);
        $data['user_id'] = auth()->user()->id;
        $data['created_at'] = $data['updated_at'] = date('Y-m-d H:i:s');
        $data['ip_address']=$_SERVER['REMOTE_ADDR'];
        $data['slag'] = $this->generateSlag();

        if(request('gallery'))
        {   
            $galary = [];

            foreach(request('gallery') as $key=>$doc){
                

                //     //dd($doc->extension());
                //     $doc->store('product', 'public');
                //     $image = $doc;
                //     $imageName = 'product_'.sha1(time()).'.'.$doc->extension();
                //     \Storage::disk('s3')->put($imageName, file_get_contents($doc), 'public');
                //     $galary[] = \Storage::disk('s3')->url($imageName);
                // }
                // $data['galary'] = json_encode($galary);


                $filenameWithExt = $doc->getClientOriginalName();
                // Get Filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // // Get just Extension
                $extension = $doc->getClientOriginalExtension();
                // // Filename To store
                $fileNameToStore = $filename. '_'. time().'.'.$extension;
                // Upload Image
                $doc->storeAs('public/product', $fileNameToStore);
                $galary[] = 'product/'.$fileNameToStore;

            }
            $data['galary'] = json_encode($galary);
        }
        unset($data['gallery']);
        if(request('logo'))
        {   
            $galary = [];
            $doc = request('logo');
            $filenameWithExt = $doc->getClientOriginalName();
            // Get Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // // Get just Extension
            $extension = $doc->getClientOriginalExtension();
            // // Filename To store
            $fileNameToStore = $filename. '_'. time().'.'.$extension;
            // Upload Image
            $doc->storeAs('public/product/logo', $fileNameToStore);
            $data['logo'] = 'product/logo/'.$fileNameToStore;
        }

        //dd($data);
        DB::table('products')->insert($data);
        return redirect('/my-products')->with("status",true);
    }

    function detail($slag){
        //add count in view
        DB::table('products')->where(['slag'=>$slag])->increment('total_views', 1);
        
        $product = DB::table('products')->where(['products.slag'=>$slag])->first();
        return view('product.popup-detail',compact('product'));
    }


    function myProducts(){
        $products = DB::table('products')->select('products.*','u.name')->join('users as u','u.id','products.user_id')->where(['user_id'=>auth()->user()->id, 'is_deleted'=>0])->orderBy('products.created_at','desc')->get();
        return view('product.my-products',compact('products'));
    }

    function upvote(){

        $isExist = DB::table('upvotes')->where(['user_id'=>auth()->user()->id,'product_id'=>request('product_id')])->count();

        if($isExist > 0){
            DB::table('products')->where(['id'=>request('product_id')])->decrement('upvote',1);
            DB::table('upvotes')->where(['user_id'=>auth()->user()->id, 'product_id'=>request('product_id')])->delete();
            return json_encode(['status'=>'success','message'=>'upvote updated successfully','action'=>'minus']);
        }
        else{

            DB::table('products')->where(['id'=>request('product_id')])->increment('upvote',1);
            
            DB::table('upvotes')->insert([
                'user_id'=>auth()->user()->id,
                'product_id'=>request('product_id'),
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'ip_address'=>$_SERVER['REMOTE_ADDR'],
            ]);
            return json_encode(['status'=>'success','message'=>'upvote updated successfully','action'=>'add']);
        }
    }

    function comment(){
        
        $product_id = DB::table('products')->where(['slag'=>request('slag')])->first()->id;
        
        DB::table('discussions')->insert([
            'user_id'=>auth()->user()->id,
            'product_id'=>$product_id,
            'comment'=>request('comment')??null,
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
            'ip_address'=>$_SERVER['REMOTE_ADDR'],
        ]);
        return json_encode(['status'=>'success','message'=>'comment added successfully']);
    }

    function discussions(){
        $product_id = DB::table('products')->where(['slag'=>request('slag')])->first()->id;
        
        $discussions = DB::table('discussions')->join('users','users.id','discussions.user_id')->select('discussions.*','users.name','users.profile_photo_path')->where(['product_id'=>$product_id])->orderBy('created_at','desc')->get();

        return view('product.discussions',compact('discussions'));
    }
    function discussionLike(){
        $isExist = DB::table('discussion_likes')->where(['user_id'=>auth()->user()->id,'discussion_id'=>request('discussion_id')])->count();

        if($isExist > 0){

            DB::table('discussions')->where(['id'=>request('discussion_id')])->decrement('like',1);
            DB::table('discussion_likes')->where(['user_id'=>auth()->user()->id, 'discussion_id'=>request('discussion_id')])->delete();
            return json_encode(['status'=>'success','message'=>'like updated successfully','action'=>'minus']);
        }
        else{

            DB::table('discussions')->where(['id'=>request('discussion_id')])->increment('like',1);
            
            DB::table('discussion_likes')->insert([
                'user_id'=>auth()->user()->id,
                'discussion_id'=>request('discussion_id'),
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'ip_address'=>$_SERVER['REMOTE_ADDR'],
            ]);
            return json_encode(['status'=>'success','message'=>'like updated successfully','action'=>'add']);
        }
    }

    function discussionReply(){
        
        DB::table('discussion_replies')->insert([
            'user_id'=>auth()->user()->id,
            'discussion_id'=>request('discussion_id'),
            'comment'=>request('comment')??null,
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
            'ip_address'=>$_SERVER['REMOTE_ADDR'],
        ]);
        return json_encode(['status'=>'success','message'=>'comment added successfully']);
    }

}
