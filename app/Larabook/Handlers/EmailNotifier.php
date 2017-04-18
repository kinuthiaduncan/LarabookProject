<?php

namespace Larabook\Handlers;

use Larabook\Mailers\UserMailer;
use Larabook\Registration\Events\UserRegistered;
use Laracasts\Commander\Events\EventListener;

/**
 * Created by PhpStorm.
 * User: dkinuthia
 * Date: 4/18/17
 * Time: 3:08 PM
 */
class EmailNotifier extends EventListener
{

    private $mailer;

    function __construct(UserMailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function whenUserHasRegistered(UserRegistered $event)
    {
        $this->mailer->sendWelcomeMessageTo($event->user);
    }
}