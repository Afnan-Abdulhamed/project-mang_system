<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('projects')->delete();
        
        \DB::table('projects')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'iNext - Responsive Template',
                'start_date' => '2019-08-01 01:00:00',
                'end_date' => '2019-09-19 14:00:00',
                'confirmed' => 1,
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'feature_image' => 'public/projects-images/QMwFm2srwD5TvnM80lvCSWDAEDY4Ve8clC7eekSa.png',
                'type' => 'Desktop App',
                'theme' => 'D',
                'user_id' => 2,
                'created_at' => '2019-08-31 09:59:34',
                'updated_at' => '2019-08-31 09:59:34',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Wordpress - Theme Design',
                'start_date' => '2019-08-09 01:00:00',
                'end_date' => '2019-08-30 01:00:00',
                'confirmed' => 0,
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'feature_image' => 'public/projects-images/m5Im9VHfKWN9U4IjxwRPT5HZ0UzAa5Bn7Pun7hoU.png',
                'type' => 'Mobile App',
                'theme' => 'D',
                'user_id' => 2,
                'created_at' => '2019-08-31 10:00:45',
                'updated_at' => '2019-08-31 10:00:45',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Logo Design',
                'start_date' => '2019-08-06 01:00:00',
                'end_date' => '2019-10-17 02:00:00',
                'confirmed' => 1,
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'feature_image' => 'public/projects-images/bq4VKtAjUiXL7EX4yHQBZER6cXJGdquQBxYcuTfa.png',
                'type' => 'Mobile App',
                'theme' => 'D',
                'user_id' => 2,
                'created_at' => '2019-08-31 10:01:37',
                'updated_at' => '2019-08-31 10:01:37',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Lorem ipsum',
                'start_date' => '2019-08-30 01:00:00',
                'end_date' => '2019-09-20 01:00:00',
                'confirmed' => 0,
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'feature_image' => 'public/projects-images/Kz8JPk0kEEIgGWgiVuIpu0SM596bZUvCTTMlvQYp.png',
                'type' => 'Website',
                'theme' => 'D',
                'user_id' => 2,
                'created_at' => '2019-08-31 10:04:35',
                'updated_at' => '2019-08-31 10:04:35',
            ),
        ));
        
        
    }
}