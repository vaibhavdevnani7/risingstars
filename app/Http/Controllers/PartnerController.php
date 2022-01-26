<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mail\partnerMail;
use Illuminate\Support\Facades\Mail;

class PartnerController extends Controller
{
    public function __construct()
    {
        $this->partner_email_event = true;
    }
    function store(){
        
        $data = [
            'data'=>json_encode(request('partner')),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
            'ip_address'=>$_SERVER['REMOTE_ADDR']
        ];
        $response = DB::table('partners')->insert($data);

        if($response){

            if($this->partner_email_event && env('IS_SEND_EMAIL')==true)
            {
                $partner = request('partner');
                $mail_data = array();
                $mail_data['email'] = $partner['email'];
                $mail_data['name'] = $partner['first_name'];
                $mailResponse = Mail::to($mail_data['email'])->send(new partnerMail($mail_data));

                // //Send email to admin

                // $partner = request('partner');
                // $mail_data = array();
                // $mail_data['email'] = $partner['email'];
                // $mail_data['name'] = $partner['first_name'];
                // $mailResponse = Mail::to(['$mail_data['email']'])->send(new partnerMail($mail_data));

            }
            
        }
        return redirect()->back()->with("status",true);
    }
    
    
}
