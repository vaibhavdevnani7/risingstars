<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
#use Illuminate\Support\Facades\Mail;
use GuzzleHttp\Client;

class StoreController extends Controller
{
    public function __construct()
    {
        
    }
    function preRegister(){

        if(request('submit-form') && request('email')){
            
            $email = request('email');
            $result = DB::table('subscribes_us')->where(['email'=>$email])->first();

            if(!is_null($result)) {
              $response = json_encode(['status'=>'error','message'=>'Your email has already been recorded for notification.']);
            } else {

                $data =[
                    'ip_address'=> $_SERVER['REMOTE_ADDR'],
                    'email'=>$email,
                    'ether_address'=> request('ether_address'),
                    'name'=> request('name'),
                    'created_at'=> date('Y-m-d H:i:s'),
                    'referred'=> request('referred'),
                    'communication_method'=> request('communication_method')
                ];
                $result = DB::table('subscribes_us')->insert($data);
                $response = json_encode(['status'=>'success','message'=>'We have recorded your email. We will notify you once we are live.']);
            }
            return $response;
        }
    }

    function notifyTransaction(){
        
        if(request('txn') && request('amount') && request('legends') && request('ether_address')){
            $data = [
                'txn' =>  request('txn'),
                'eth_value' =>  request('amount'),
                'ether_address' =>  request('ether_address'),
                'legends' =>  request('legends'),
                'created_at' =>  date('Y-m-d H:i:s'),
                'ip_address'=>$_SERVER['REMOTE_ADDR'],
                'updated_at' =>  date('Y-m-d H:i:s'),
            ];
            $result = DB::table('minting_txns')->insert($data);
            $response = json_encode(['status'=>'success','message'=>'We have recorded your txn. We will notify you once we mint.']);
            
            $row_id = DB::getPdo()->lastInsertId();
            
            $resp = $this->notifyCore(request('txn'), request('amount'), request('legends'), $row_id);

            return $response;
        }
    }

    function notifyCore($txn, $eth_value, $legends, $row_id){

        $client = new Client();
        $res = $client->request('POST', env('CORE_ENDPOINT'), [
            'form_params' => [
                'transactionHash' => $txn,
                'amount' => $eth_value,
                'count'=>$legends
            ]
        ]);
        
        $response = [
            'response_code'=>$res->getStatusCode(),
            'response_body'=>json_decode((string)$res->getBody(), true),
            'content-type'=>$res->getHeader('content-type')
        ];

        return DB::table('minting_txns')->where(['id'=>$row_id])->update(['post_api_response'=>json_encode($response)]);

    }

    function test()
    {
        $txn = '0x347c7a4032390caabd4071840c59aa831d5684337695970139979dd74dbf73a4';
        $eth_value='1000000000000000000';
        $legends=1;
        $resp = $this->notifyCore($txn, $eth_value, $legends, 1);
        dd($resp);
    }

    function checkPreRegisterEther(){
        $ether = request('address');

        $checkExist = DB::table('subscribes_us')->where(['ether_address'=>$ether])->count();
        if($checkExist > 0){
            return ['status'=>'success','message'=>'Address exist'];
        }
        else
            return ['status'=>'error','message'=>'Not exist'];
    }

    function postNewsletter(){

        if(request('email')){
            
            $email = request('email');
            $result = DB::table('newsletters')->where(['email'=>$email])->first();

            if(!is_null($result)) {
              $response = json_encode(['status'=>'error','message'=>'Your email has already been recorded for notification.']);
            } else {

                $data =[
                    'ip_address'=> $_SERVER['REMOTE_ADDR'],
                    'email'=>$email,
                    'created_at'=> date('Y-m-d H:i:s'),
                ];
                $result = DB::table('newsletters')->insert($data);
                $response = json_encode(['status'=>'success','message'=>'Thank you! We have recorded your email. ']);
            }
            return $response;
        }
    }

}
