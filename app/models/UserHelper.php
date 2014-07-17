<?php

class UserHelper
{

	public function get_users ($no_of_users)
	{
		# results for array
		$results = Array();
		$max_users = intval($no_of_users);

		$faker = Faker\Factory::create();

		for ($i =0; $i < $max_users; $i++)
		{
			$results[$faker->name] = $faker->address;;
		}
		return $results;
	}	
}