<?php
/**
 * Created by PhpStorm.
 * User: dkinuthia
 * Date: 4/18/17
 * Time: 3:19 PM
 */

namespace Larabook\Mailers;

use Larabook\Users\User;

class UserMailer extends Mailer
{
    public  function sendWelcomeMessageTo(User $user)
    {
        $subject = 'Welcome to Larabook!';
        $view = 'emails.registration.confirm';
        $data = [];

        return $this->sendTo($user, $subject, $view);
    }
}