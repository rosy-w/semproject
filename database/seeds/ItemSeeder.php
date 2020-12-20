<?php

use Illuminate\Database\Seeder;
use App\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items=[
            [
                'category_id'=>'1',
                'description'=>'Pasta in delicious fresh-made tomato sauce.',
                'name'=>'Tomato Pasta ',
                'price'=>'200',
                'image_url'=>'tomatopasta.png',
            ],
            [
                'category_id'=>'3',
                'description'=>'Rosemary Spritzer lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'name'=>'Rosemary Spritzer',
                'price'=>'100',
                'image_url'=>'rosemaryspritzer.png',
            ],
            [
                'category_id'=>'2',
                'description'=>'Barbeque Chicken Lorem ipsum dolor sit amet. ',
                'name'=>'Barbeque Chicken',
                'price'=>'300',
                'image_url'=>'barbequechicken.png',
            ],
            [
                'category_id'=>'3',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ',
                'name'=>'Black Coffee',
                'price'=>'100',
                'image_url'=>'blackcoffee.png',
            ],
            [
                'category_id'=>'2',
                'description'=>'Barbeque Ribs with our secret sauce',
                'name'=>'Barbeque Ribs ',
                'price'=>'300',
                'image_url'=>'bbqribs.png',
            ],
            [
                'category_id'=>'1',
                'description'=>'Spaghetti sauteed in garlic with olive oil ',
                'name'=>'Aglio e Olio',
                'price'=>'200',
                'image_url'=>'aglioeolio.png',
            ],
            
        ];
        foreach($items as $item)
          {
              Item::create([
               'category_id' => $item['category_id'],
               'description'=> $item['description'],
               'name'=>$item['name'],
               'price'=>$item['price'],
               'image_url'=>$item['image_url'],
             ]);
           }
    }
}
