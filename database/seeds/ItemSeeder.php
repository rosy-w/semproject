<?php

use Illuminate\Database\Seeder;

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
                'description'=>'Pasta in delicious fresh-made tomato sauce.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse convallis sollicitudin augue, et ultrices risus maximus a. Duis turpis elit, suscipit vel elit ultrices, luctus varius elit. Praesent luctus metus sed sem posuere, in viverra diam scelerisque',
                'name'=>'Tomato Pasta ',
                'price'=>'200',
                'image_url'=>'tomatopasta.png',
            ],
            [
                'category_id'=>'3',
                'description'=>'Rosemary Spritzer lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse convallis sollicitudin augue, et ultrices risus maximus a. Duis turpis elit, suscipit vel elit ultrices, luctus varius elit. Praesent luctus metus sed sem posuere, in viverra diam scelerisque',
                'name'=>'Rosmary Spritzer',
                'price'=>'100',
                'image_url'=>'rosemaryspritzer.png',
            ],
            [
                'category_id'=>'2',
                'description'=>'Barbeque Chicken Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse convallis sollicitudin augue, et ultrices risus maximus a. Duis turpis elit, suscipit vel elit ultrices, luctus varius elit. Praesent luctus metus sed sem posuere, in viverra diam scelerisque',
                'name'=>'Barbeque Chicken',
                'price'=>'300',
                'image_url'=>'barbequechicken.png',
            ],
            [
                'category_id'=>'3',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse convallis sollicitudin augue, et ultrices risus maximus a. Duis turpis elit, suscipit vel elit ultrices, luctus varius elit. Praesent luctus metus sed sem posuere, in viverra diam scelerisque',
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
    }
}
