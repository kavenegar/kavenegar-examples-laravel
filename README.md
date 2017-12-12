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
<hr> 

<div dir='rtl'>
	
## راهنما

### معرفی سرویس کاوه نگار

کاوه نگار یک وب سرویس ارسال و دریافت پیامک و تماس صوتی است که به راحتی میتوانید از آن استفاده نمایید.

### ساخت حساب کاربری

اگر در وب سرویس کاوه نگار عضو نیستید میتوانید از [لینک عضویت](http://panel.kavenegar.com/client/membership/register) ثبت نام  و اکانت آزمایشی برای تست API دریافت نمایید.

### مستندات

برای مشاهده اطلاعات کامل مستندات [وب سرویس پیامک](http://kavenegar.com/وب-سرویس-پیامک.html)  به صفحه [مستندات وب سرویس](http://kavenegar.com/rest.html) مراجعه نمایید.

### راهنمای فارسی

در صورتی که مایل هستید راهنمای فارسی کیت توسعه کاوه نگار را مطالعه کنید به صفحه [کد ارسال پیامک](http://kavenegar.com/sdk.html) مراجعه نمایید.

### اطالاعات بیشتر
برای مطالعه بیشتر به صفحه معرفی
[وب سرویس اس ام اس ](http://kavenegar.com)
کاوه نگار
مراجعه نمایید .

 اگر در استفاده از کیت های سرویس کاوه نگار مشکلی یا پیشنهادی  داشتید ما را با یک Pull Request  یا  ارسال ایمیل به support@kavenegar.com  خوشحال کنید.
 
##
![http://kavenegar.com](http://kavenegar.com/public/images/logo.png)		

[http://kavenegar.com](http://kavenegar.com)	

</div>


