<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories=[
            [
                'name' => 'Pasta',
            ],
            [
                'name' => 'BBQ',
            ],
            [
                'name' => 'Drinks',
            ],
        ];
        foreach($categories as $category)
          {
              Category::create([
               'name' => $category['name'],
             ]);
           }
    
    }
}
