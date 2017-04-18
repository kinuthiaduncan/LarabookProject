<?php
/**
 * Created by PhpStorm.
 * User: dkinuthia
 * Date: 4/18/17
 * Time: 12:39 PM
 */

namespace Larabook\Users;


trait FollowableTrait
{
    public function followedUsers()
    {
        return $this->belongsToMany(static::class,'follows','follower_id','followed_id')
            ->withTimestamps();
    }

    public function followers()
    {
        return $this->belongsToMany(static::class,'follows','followed_id','follower_id')
            ->withTimestamps();
    }

    /**
     * Determine if a user follows other user.
     * @param User $otherUser
     * @return bool
     */
    public function isFollowedBy (User $otherUser)
    {
        $idsWhoOtherUserFollows = $otherUser->followedUsers()->lists('followed_id');
        return in_array($this->id, $idsWhoOtherUserFollows);
    }

}