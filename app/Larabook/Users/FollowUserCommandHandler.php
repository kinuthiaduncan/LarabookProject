<?php
/**
 * Created by PhpStorm.
 * User: dkinuthia
 * Date: 4/18/17
 * Time: 10:25 AM
 */

namespace Larabook\Users;


use Laracasts\Commander\CommandHandler;

class FollowUserCommandHandler implements CommandHandler
{
    protected $userRepo;

    function __construct(UserRepository $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function handle($command)
    {
        $user = $this->userRepo->findById($command->userId);

        $this->userRepo->follow($command->userIdToFollow,$user);

        return $user;
    }

}