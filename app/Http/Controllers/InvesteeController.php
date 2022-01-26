<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mail\investeeMail;
use Illuminate\Support\Facades\Mail;

class InvesteeController extends Controller
{
    public function __construct()
    {
        $this->envestee_email_event = true; 
    }
    function store(){
        
        $data = [
            'data'=>json_encode(request('investee')),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
            'ip_address'=>$_SERVER['REMOTE_ADDR']
        ];
        $response = DB::table('investees')->insert($data);

        if($response){

            if($this->envestee_email_event && env('IS_SEND_EMAIL')==true)
            {
                $investee = request('investee');
                $mail_data = array();
                $mail_data['email'] = $investee['email'];
                $mail_data['name'] = $investee['first_name'];
                $mailResponse = Mail::to($mail_data['email'])->send(new investeeMail($mail_data));
            }
            
        }
        return redirect()->back()->with("status",true);
    }
    
    
}
