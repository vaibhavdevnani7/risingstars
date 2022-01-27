<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
    public function __construct()
    {
        
    }
    function posts(){
        $tagflux = 'hello';
        if(request('tags')){
            $tagflux = 'tags';
            $tag_id = DB::table('tags')->select('id')->where(['slag'=>request('tags')])->first()->id;
            $query = "SELECT * FROM products  WHERE products.is_deleted=0 AND products.status = 1 and JSON_SEARCH(tags, 'one', $tag_id) is not null order by products.created_at desc";
            $products = DB::select($query);
            $tagflux = request('tags');
        }
        elseif(request('search')){

            $tag = "SELECT * FROM tags where tag_name like '%".request('search')."%' OR slag like '%".request('search')."%'";
            
            $tags = DB::select($tag);
            
            if(!empty($tags))
            {
                $tag_id = $tags[0]->id;
                $query = "SELECT * FROM products WHERE products.is_deleted=0 AND products.status = 1 and (products.product_title like '%".request('search')."%' OR JSON_SEARCH(tags, 'one', $tag_id) is not null) order by products.created_at desc";
            }
            else{
                $query = "SELECT * FROM products  WHERE products.is_deleted=0 AND products.status = 1 and products.product_title like '%".request('search')."%' order by products.created_at desc";
            }

            $products = DB::select($query);
            $tagflux = request('search');
        }
        else{
            $products = DB::table('products')->where(['products.status'=>1, 'is_deleted'=>0])->orderBy('products.created_at','desc')->get();
        }
        
        //return view('web.posts',compact('products'));  // Version 1 
        return view('web.posts-v2',compact('products', 'tagflux'));
        
    }
     function home(){
        return view('web.home');  // Version 1 
        
    }
    function preRegister(){
        return view('web.pre-register');
    }
    function aboutUs(){
        return view('web.about-us');
    }
    function raiseFund(){
        return view('web.form.raise-fund');
    }
    function bePartner(){
        return view('web.form.partner');
    }
    
    function faq(){
        return view('web.faq');
    }
    function career(){
        return view('web.career');
    }
    function careerDetails(){
        if(request('post')=='full-stack')
            return view('web.career.full-stack');
        if(request('post')=='project-manager')
            return view('web.career.project-manager');
        if(request('post')=='react-developer')
            return view('web.career.react-developer');
    }
    function bollywoodNfts(){
        return view('web.knowledge.bollywood-nft');
    }
    function nftArts(){
        return view('web.knowledge.nft-arts');
    }
    function nftMarketplace(){
        return view('web.knowledge.nft-marketplace');
    }
    function nftPlatform(){
        return view('web.knowledge.nft-plateform');
    }
    function terms(){
        return view('web.terms-condition');
    }
    function privacyPolicy(){
        return view('web.privacy-policy');
    }
    function newsRooms(){
        return view('web.news-room');
    }
    

    
    
    
    
}
