<?php namespace Larabook\Users;

class UserRepository
{
	public function save(User $user)
	{
		return $user->save();
	}

	public function getPaginated($howMany = 25)
	{
		return User::orderBy('username', 'asc')->paginate($howMany);
	}

	public function findByUsername($username)
	{
		return User::with('statuses')->whereUsername($username)->first();
	}

    /**
     * Find user by their id
     * @param $id
     * @return mixed
     */
    public function findById($id)
    {
        return User::findOrFail($id);
    }

    public function follow($userIdToFollow, User $user)
    {
       return $user->followedUsers()->attach($userIdToFollow);
    }

    /**
     * Unfollow user
     * @param $userIdToUnfollow
     * @param User $user
     * @return mixed
     */
    public function unfollow($userIdToUnfollow, User $user)
    {
        return $user->followedUsers()->detach($userIdToUnfollow);
    }
}