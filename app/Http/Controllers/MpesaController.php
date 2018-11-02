<?php
/**
 * Created by IntelliJ IDEA.
 * User: admin
 * Date: 7/5/18
 * Time: 12:38 AM
 */
/**
 * Fredrick Oluoch
 * http://www.blaqueyard.com
 * 0720106420 | 0722508906
 * email: menty44@gmail.com
 */


namespace App\Http\Controllers;


class MpesaController{

    //
    //protected $respose;


//    public function __construct(Response $response){
//        $this->response = $response;
//    }


    public function welcome(){
        //Get all task
        $accounts = "hello world";
        // Return a collection of $task with pagination
        //return $this->response->$accounts;

        echo $accounts;
    }


        public function mpesanew(){

        $BusinessShortCode = "174379";
        $LipaNaMpesaPasskey = "bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";
        $TransactionType = "CustomerPayBillOnline";
        $Amount = "20";
        $PartyA = "254720106420";
        $PartyB = "174379";
        $PhoneNumber = "254720106420";
        $CallBackURL = "https://callback.blaqueyard.com/mpesa/call.php";
        $AccountReference = "Ruaka";
        $TransactionDesc = "RuakaLTD";
        $Remarks = "Ruaka";

//        $mpesa = new \Safaricom\Mpesa\Mpesa();
//
//        $stkPushSimulation=$mpesa->STKPushSimulation($BusinessShortCode, $LipaNaMpesaPasskey, $TransactionType, $Amount, $PartyA, $PartyB, $PhoneNumber, $CallBackURL, $AccountReference, $TransactionDesc, $Remarks);
//
//        return $stkPushSimulation;

        $mpesa= new \Safaricom\Mpesa\Mpesa();

        $stkPushSimulation=$mpesa->STKPushSimulation($BusinessShortCode, $LipaNaMpesaPasskey, $TransactionType, $Amount, $PartyA, $PartyB, $PhoneNumber, $CallBackURL, $AccountReference, $TransactionDesc, $Remarks);

        return $stkPushSimulation;

    }
}