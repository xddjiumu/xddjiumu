<?php

namespace App\Observers;

use App\Models\Contact;
use Appotifications\ContactReplied;
use Mail;

class ContactObserver
{
    public function saving(Contact $contact)
    {
        Mail::raw('用户名称：'.$contact->name.'<<<用户电话:'.$contact->mobile.'<<<用户邮箱:'.$contact->email.'<<<用户留言需求:'.$contact->message, function($message){
            $to = env('MAIL_Notifications', 'MAIL_USERNAME');
            $message->to($to)->subject('有客户提交了在线留言,客记需求请及时处理');
        });
        var_dump(Mail::failures());  // 打印失败信息，进行判断处理
    }
}
