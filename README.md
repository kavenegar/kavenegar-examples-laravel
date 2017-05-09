# kavenegar-examples-laravel
## Installation

```php
$ git clone https://github.com/KaveNegar/kavenegar-examples-laravel
```
or download [**https://github.com/KaveNegar/kavenegar-examples-php/archive/master.zip**](https://github.com/KaveNegar/kavenegar-examples-php/archive/master.zip)

## Configuration

You'll find the config file at config/kavenegar.php then put your API KEY
```php
return [
    'apikey' => '',
];
```


## Usage

```php
use Kavenegar;
use Kavenegar\Exceptions\ApiException;
use Kavenegar\Exceptions\HttpException;

class SmsController extends Controller
{
    public function send()
    {  
        try{
            $sender = "";
            $message = "send from laravel";
            $receptor = array("","");
            $result = Kavenegar::Send($sender,$receptor,$message);
        }
        catch(ApiException $e){
            echo $e->errorMessage();
        }
        catch(HttpException $e){
            echo $e->errorMessage();
        }
    }
    public function sendarray()
    {  
        try{
            $sender =  array("");
            $message =  array("");
            $receptor = array("");
            $result = Kavenegar::SendArray($sender,$receptor,$message);
        }
        catch(ApiException $e){
            echo $e->errorMessage();
        }
        catch(HttpException $e){
            echo $e->errorMessage();
        }
    }
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
        }
        catch(ApiException $e){
            echo $e->errorMessage();
        }
        catch(HttpException $e){
            echo $e->errorMessage();
        }
    }
```
