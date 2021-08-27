<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $data = [
            1 => [
                'title' => 'Scam Burger',
                'description' => 'Curabitur semper auctor libero eget tempor. Vivamus quis rutrum felis. Morbi ultricies lacinia nunc eu maximus. Mauris imperdiet, risus quis ullamcorper faucibus, elit massa imperdiet eros, ut consectetur lacus tellus quis sem.',
                'price' => 6.69,
                'category_id' => 1,
                'vegan' => 1,
                'gluten' => 0,
                'spice' => 1,
                'images' => [
                    '/storage/images/sQi8M3jDhNwDeFm.jpg'
                ]
            ],
            2 => [
                'title' => 'Cheese Burger',
                'description' => 'Curabitur semper auctor libero eget tempor. Vivamus quis rutrum felis. Morbi ultricies lacinia nunc eu maximus. Mauris imperdiet, risus quis ullamcorper faucibus, elit massa imperdiet eros, ut consectetur lacus tellus quis sem.',
                'price' => 4.99,
                'category_id' => 1,
                'vegan' => 0,
                'gluten' => 1,
                'spice' => 1,
                'images' => [
                    '/storage/images/3u8q42oVb86CeJl.jpg'
                ]
            ],
            3 => [
                'title' => 'Classic Chicken',
                'description' => 'Curabitur semper auctor libero eget tempor. Vivamus quis rutrum felis. Morbi ultricies lacinia nunc eu maximus. Mauris imperdiet, risus quis ullamcorper faucibus, elit massa imperdiet eros, ut consectetur lacus tellus quis sem.',
                'price' => 3.50,
                'category_id' => 1,
                'vegan' => 0,
                'gluten' => 1,
                'spice' => 2,
                'images' => [
                    '/storage/images/psLHQpgCV7mZ7WT.jpg'
                ]
            ],
            4 => [
                'title' => 'Spicy Bacon',
                'description' => 'Curabitur semper auctor libero eget tempor. Vivamus quis rutrum felis. Morbi ultricies lacinia nunc eu maximus. Mauris imperdiet, risus quis ullamcorper faucibus, elit massa imperdiet eros, ut consectetur lacus tellus quis sem.',
                'price' => 4.45,
                'category_id' => 1,
                'vegan' => 0,
                'gluten' => 0,
                'spice' => 5,
                'images' => [
                    '/storage/images/fyK2osgPj3v6msr.jpg'
                ]
            ],

            5 => [
                'title' => 'Double Cheese Meal',
                'description' => 'Curabitur semper auctor libero eget tempor. Vivamus quis rutrum felis. Morbi ultricies lacinia nunc eu maximus. Mauris imperdiet, risus quis ullamcorper faucibus, elit massa imperdiet eros, ut consectetur lacus tellus quis sem.',
                'price' => 8.65,
                'category_id' => 2,
                'vegan' => 0,
                'gluten' => 1,
                'spice' => 1,
                'images' => [
                    '/storage/images/cTwFSPXcFoRTHCP.jpg',
                    '/storage/images/zWZRvnnMjN2fTAs.jpg',
                    '/storage/images/byPFH1HmfNonDfG.jpg'
                ]
            ],
            6 => [
                'title' => '2x Cheeseburger Meal',
                'description' => 'Curabitur semper auctor libero eget tempor. Vivamus quis rutrum felis. Morbi ultricies lacinia nunc eu maximus. Mauris imperdiet, risus quis ullamcorper faucibus, elit massa imperdiet eros, ut consectetur lacus tellus quis sem.',
                'price' => 5.65,
                'category_id' => 2,
                'vegan' => 0,
                'gluten' => 1,
                'spice' => 1,
                'images' => [
                    '/storage/images/40iDyaXCGenBchF.jpg',
                    '/storage/images/byPFH1HmfNonDfG.jpg'
                ]
            ],

            7 => [
                'title' => 'Oreo Icecream',
                'description' => 'Curabitur semper auctor libero eget tempor. Vivamus quis rutrum felis. Morbi ultricies lacinia nunc eu maximus. Mauris imperdiet, risus quis ullamcorper faucibus, elit massa imperdiet eros, ut consectetur lacus tellus quis sem.',
                'price' => 1.50,
                'category_id' => 3,
                'vegan' => 0,
                'gluten' => 0,
                'spice' => 0,
                'images' => [
                    '/storage/images/3CHjpgA0T4CFgwH.jpg',
                ]
            ],
            8 => [
                'title' => 'Vanilla Icecream',
                'description' => 'Curabitur semper auctor libero eget tempor. Vivamus quis rutrum felis. Morbi ultricies lacinia nunc eu maximus. Mauris imperdiet, risus quis ullamcorper faucibus, elit massa imperdiet eros, ut consectetur lacus tellus quis sem.',
                'price' => 1.00,
                'category_id' => 3,
                'vegan' => 0,
                'gluten' => 0,
                'spice' => 0,
                'images' => [
                    '/storage/images/VAeWaBQvmUxMQtl.jpg',
                ]
            ],

            9 => [
                'title' => 'Coca Cola',
                'description' => 'Curabitur semper auctor libero eget tempor. Vivamus quis rutrum felis. Morbi ultricies lacinia nunc eu maximus. Mauris imperdiet, risus quis ullamcorper faucibus, elit massa imperdiet eros, ut consectetur lacus tellus quis sem.',
                'price' => 1.50,
                'category_id' => 4,
                'vegan' => 0,
                'gluten' => 1,
                'spice' => 0,
                'images' => [
                    '/storage/images/byPFH1HmfNonDfG.jpg',
                ]
            ],
            10 => [
                'title' => 'Sprite',
                'description' => 'Curabitur semper auctor libero eget tempor. Vivamus quis rutrum felis. Morbi ultricies lacinia nunc eu maximus. Mauris imperdiet, risus quis ullamcorper faucibus, elit massa imperdiet eros, ut consectetur lacus tellus quis sem.',
                'price' => 1.50,
                'category_id' => 4,
                'vegan' => 0,
                'gluten' => 1,
                'spice' => 0,
                'images' => [
                    '/storage/images/oobXBbrVXQ7rUqH.jpg',
                ]
            ],
            11 => [
                'title' => 'Fanta',
                'description' => 'Curabitur semper auctor libero eget tempor. Vivamus quis rutrum felis. Morbi ultricies lacinia nunc eu maximus. Mauris imperdiet, risus quis ullamcorper faucibus, elit massa imperdiet eros, ut consectetur lacus tellus quis sem.',
                'price' => 1.50,
                'category_id' => 4,
                'vegan' => 0,
                'gluten' => 1,
                'spice' => 0,
                'images' => [
                    '/storage/images/7P2uT5VeZ40wUs5.jpg',
                ]
            ],

            12 => [
                'title' => 'Apple Slices',
                'description' => 'Curabitur semper auctor libero eget tempor. Vivamus quis rutrum felis. Morbi ultricies lacinia nunc eu maximus. Mauris imperdiet, risus quis ullamcorper faucibus, elit massa imperdiet eros, ut consectetur lacus tellus quis sem.',
                'price' => 1.30,
                'category_id' => 5,
                'vegan' => 1,
                'gluten' => 0,
                'spice' => 0,
                'images' => [
                    '/storage/images/9qwT9sgvVhlTyZs.jpg',
                ]
            ],
            13 => [
                'title' => 'Spicy Chicken Nuggets',
                'description' => 'Curabitur semper auctor libero eget tempor. Vivamus quis rutrum felis. Morbi ultricies lacinia nunc eu maximus. Mauris imperdiet, risus quis ullamcorper faucibus, elit massa imperdiet eros, ut consectetur lacus tellus quis sem.',
                'price' => 3.75,
                'category_id' => 5,
                'vegan' => 0,
                'gluten' => 1,
                'spice' => 4,
                'images' => [
                    '/storage/images/jm3pSSZra5arXGx.jpg',
                ]
            ],
            14 => [
                'title' => 'French Fries',
                'description' => 'Curabitur semper auctor libero eget tempor. Vivamus quis rutrum felis. Morbi ultricies lacinia nunc eu maximus. Mauris imperdiet, risus quis ullamcorper faucibus, elit massa imperdiet eros, ut consectetur lacus tellus quis sem.',
                'price' => 1.00,
                'category_id' => 5,
                'vegan' => 0,
                'gluten' => 1,
                'spice' => 0,
                'images' => [
                    '/storage/images/107KLMnLrwsiWV6.jpg',
                ]
            ],
        ];

        foreach ($data as $item => $details) {
            $product = new Product();

            $product->title = $details['title'];
            $product->description = $details['description'];
            $product->price = $details['price'];
            $product->vegan = $details['vegan'];
            $product->spice = $details['spice'];
            $product->gluten = $details['gluten'];

            $product->save();

            foreach ($details['images'] as $product_image) {
                $image = new Image();

                $image->path = url('/') . $product_image;
                $image->product_id = $product->id;

                $image->save();
            }

            $product->categories()->attach($details['category_id']);
        }
    }
}
