<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class PaymentsController extends Controller
{
    //


    public function showPaymentPage(){

        $payment_info = Session::get('payment_info');



        $cart = Session::get('cart');

        if($payment_info['status_id'] == 1){

            return view('payment.paymentpage', ['payment_info' => $payment_info])->with('cartItems', $cart);

        }else{
            return redirect()->route('/')->with('cartItems', $cart);
        }


    }


    public function showPaymentreceived($paypalPaymentID, $paypalPayerID ){

        if (!empty($paypalPaymentID) && !empty($paypalPayerID)){

            $this->validate_payment($paypalPaymentID, $paypalPayerID);
            $this->storePaymentInfo($paypalPaymentID, $paypalPayerID);

            $payment_received = Session::get('payment_info');

            $payment_received['paypal_payment_id'] = $paypalPaymentID;
            $payment_received['paypal_payer_id'] = $paypalPayerID;


            Session::forget('payment_info');

            return View('payment.paymentreceived', ['payment_received'=> $payment_received]);



        }else{

            return redirect()->route('menu');

        }


    }


    private function validate_payment($paypalPaymentID, $paypalPayerID ){

        $paypalEnv = 'sandbox';
        $paypalURL = 'https://api.sandbox.paypal.com/v1/';
        $paypalClientID = 'AWzxZt70OcDru9KtuGC2Th7yZasyDPlIjw69-kWex94SnOD99KkjuMbXF105v1WUcvPM_6gbUTJAJzvt';
        $paypalSecret = 'EDXEJ85XL8-gyKlrmdpLXJ91DxsOYVw--vCiQdkMTE7jDQ_aNksWlY3uX_-jeh0M2PX_Dmtd6SUPNwzJ';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $paypalURL.'oauth2/token');
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_PORT, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERPWD, $paypalClientID.":".$paypalSecret);
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'grant_type=client_credentials');
        $response = curl_exec($ch);
        curl_close($ch);

        if(empty($response)){
            return false;
        }else{

            $jsonData = json_decode($response);
            $curl = curl_init($paypalURL.'payments/payment'.$paypalPaymentID);
            curl_setopt($curl, CURLOPT_POST, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_HEADER, false);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HTTPHEADER, array(

                'Authorization: Bearer ' . $jsonData->access_token,
                'Accept: applicationt/json',
                'Content-Type: application/xml'
            ));
            $response = curl_exec($curl);
            curl_close($curl);


            $result = json_decode($response);

            return $result;


        }


    }


    private function storePaymentInfo($paypalPaymentID, $paypalPayerID){

        $payment_info = Session::get('payment_info');
        $order_id = $payment_info['order_id'];
        $status = $payment_info['status'];

        if ($status == 1){

            $date = date('Y-m-d H:i:s');
            $newPaymentArray = array('order_id'=>$order_id, 'date'=>$date, 'amount'=>$payment_info['price'],
                                    'paypal_payment_id' => $paypalPaymentID, 'paypal_payer_id'=> $paypalPayerID);
            $create_order = DB::table('payments')->insert($newPaymentArray);

            DB::table('orders')->where('order_id', $order_id)->update('status_id',2);




        }



    }



}
