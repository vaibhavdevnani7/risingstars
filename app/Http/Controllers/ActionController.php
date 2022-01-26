<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mail\partnerMail;
use Illuminate\Support\Facades\Mail;

class ActionController extends Controller
{
    public function __construct()
    {
        $this->partner_email_event = true;
    }
    function subscribeUs(){
        
        if(!request('email')){
            return json_encode(['status'=>false,'message'=>'Invalid request']);
        }
        $result = DB::table('newsletter_subscriptions')->where(['email'=>request('email')])->exists();

        if($result==true)
        {
            return json_encode(['status'=>false,'message'=>'You have already subscribed with us.']);
        }

        $data = [
            'name'=>request('name')??null,
            'email'=>request('email'),
            'ip'=>$_SERVER['REMOTE_ADDR'],
            'created_at'=>date('Y-m-d H:i:s'),
        ];
        $result = DB::table('newsletter_subscriptions')->insert($data);
        if($result){
            $mailData = ["name"=>request('name'), "email"=>request('email')];
            
            
            //subscribe to mailchimp 
            $contact = json_encode(['email_address'=>request('email'),'status'=>'subscribed']);
            $curl = curl_init();
            curl_setopt_array($curl, array(
              CURLOPT_URL => "https://us20.api.mailchimp.com/3.0/lists/a503972af5/members",
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 30,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "POST",
              CURLOPT_POSTFIELDS => $contact,
              CURLOPT_HTTPHEADER => array(
                "authorization: apikey a64c0aac37485d9ee6f18ae4e4cd67e5-us20",
                "cache-control: no-cache",
                "content-type: application/json"
              ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);

            DB::table('newsletter_subscriptions')->where(['email'=>request('email')])->update(['mailchimp_response'=>json_encode(['response'=>$response,'err'=>$err])]);

            return json_encode(['status'=>true,'message'=>'Thank you! You have successfully subscribed. Check our latest newsletter in our <a style="color:blue;" href="'.url('newsletters').'">blog</a>.']);
        }
        else{
           return json_encode(['status'=>false,'message'=>'Sorry! there is a technical issue. Please contact to our support team.']);
        }
        
    }
    function contactUs(){

        $data = [
            'name'=>request('name')??null,
            'email'=>request('email'),
            'message'=>request('message'),
            'ip_address'=>$_SERVER['REMOTE_ADDR'],
            'created_at'=>date('Y-m-d H:i:s'),
        ];
        $result = DB::table('contact_us')->insert($data);
        
        if($result){
            
            $mailData = ["name"=>request('name'), "email"=>request('email')];
            
            if(env('IS_SEND_EMAIL')) { 

                $emails = [request('email')]; 
                Mail::send('emails.contact_us', $mailData, function($message) use ($mailData, $emails) {
                    $message->to($emails);
                    $message->subject('Thank you for reaching out to us - Rising Stars Accelerator');
                });
                        
            }
            return redirect()->back()->with("contact_us_status",true);
            //return json_encode(['status'=>true,'message'=>'Thanks for reaching out. We’ll get back to you in the next 24 hours.']);
        }
        else{

           return redirect()->back()->with("contact_us_status_error",true);
        }
    }

    
    
    
}
