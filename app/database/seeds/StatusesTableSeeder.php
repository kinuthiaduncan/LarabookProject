<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Larabook\Users\User;
use Larabook\Statuses\Status;

class StatusesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$userIds = User::lists('id'); // array that contains IDs from users table

		foreach(range(1, 1000) as $index)
		{
			Status::create([
				'user_id' => $faker->randomElement($userIds),
				'body' => $faker->sentence(),
                'created_at'=> $faker->dateTime()
			]);
		}
	}

}