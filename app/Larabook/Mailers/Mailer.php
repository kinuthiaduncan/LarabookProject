<?php
namespace Larabook\Mailers;

use Illuminate\Mail\Mailer as Mail;

/**
 * Created by PhpStorm.
 * User: dkinuthia
 * Date: 4/18/17
 * Time: 3:12 PM
 */
abstract class Mailer
{
    private $mail;

    function __construct(Mail $mail)
    {
        $this->mail = $mail;
    }

    public function sendTo($user, $subject, $view, $data=[])
    {
        $this->mail->queue($view, $data, function($message) use ($user, $subject)
        {
            $message->to($user->email)->subject($subject);
        });
    }
}