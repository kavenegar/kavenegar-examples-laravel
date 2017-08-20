<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Kavenegar;
use Kavenegar\Exceptions\ApiException;
use Kavenegar\Exceptions\HttpException;

class SmsController extends Controller
{
    
    const FORMAT = "%s = %s <br/>";

    public function index()
    { 
        return $this->send();
    }


    //https://github.com/KaveNegar/kavenegar-examples-php/blob/master/src/Send.php
    public function send()
    {  
        try{
            $sender = "";
            $message = "send from laravel";
            $receptor = array("","");
            $result = Kavenegar::Send($sender,$receptor,$message);
            $this->format($result);
        }
        catch(ApiException $e){
            echo $e->errorMessage();
        }
        catch(HttpException $e){
            echo $e->errorMessage();
        }
    }
    //https://github.com/KaveNegar/kavenegar-examples-php/blob/master/src/SendArray.php
    public function sendarray()
    {  
        try{
            $sender =  array("");
            $message =  array("");
            $receptor = array("");
            $result = Kavenegar::SendArray($sender,$receptor,$message);
            $this->format($result);
        }
        catch(ApiException $e){
            echo $e->errorMessage();
        }
        catch(HttpException $e){
            echo $e->errorMessage();
        }
    }

    //https://github.com/KaveNegar/kavenegar-examples-php/blob/master/src/VerifyLookup.php
    public function verification()
    {  
        try{
            $receptor =  "";
            $template =  "";
            $type =  "sms";
            $token =  "";
            $token2 =  "";
            $token3 =  "";
            $result = Kavenegar::VerifyLookup($receptor,$token,$token2,$token3,$template,$type);
            $this->format($result);
        }
        catch(ApiException $e){
            echo $e->errorMessage();
        }
        catch(HttpException $e){
            echo $e->errorMessage();
        }
    }

    private function format($result)
    {  
        if($result){
            echo "<pre>";
             foreach($result as $r){
                 echo sprintf(self::FORMAT, "messageid", $r->messageid);
                 echo sprintf(self::FORMAT, "message", $r->message);
                 echo sprintf(self::FORMAT, "status", $r->status);
                 echo sprintf(self::FORMAT, "statustext", $r->statustext);
                 echo sprintf(self::FORMAT, "sender", $r->sender);
                 echo sprintf(self::FORMAT, "receptor", $r->receptor);
                 echo sprintf(self::FORMAT, "date", $r->date);
                 echo sprintf(self::FORMAT, "cost", $r->cost);
                 echo "<hr/>";  
             }  
            echo "</pre>";     
        }
    }

}