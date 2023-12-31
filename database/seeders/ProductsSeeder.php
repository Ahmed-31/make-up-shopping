<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample product data
        $products = [
            [
                'name' => 'Lipstick',
                'description' => 'Transform your look with a swipe of color using our luxurious lipstick collection. Our highly pigmented formulas offer vibrant shades that glide on smoothly, leaving your lips with a bold and long-lasting finish. Elevate your beauty routine with the perfect lip color for any occasion.',
                'price' => 14.99,
                'image' => 'images/products/product1.jpg'
            ],
            [
                'name' => 'Mascara',
                'description' => 'Enhance your lashes effortlessly with our precision-formulated mascara. Our volumizing and lengthening formula coats each lash, creating a dramatic yet natural look that lasts all day. Elevate your eye makeup routine with lashes that speak volumes.',
                'price' => 23.99,
                'image' => 'images/products/product2.jpg'
            ],
            [
                'name' => 'Foundation',
                'description' => 'Discover flawless radiance with our lightweight foundation, expertly crafted to provide seamless coverage. Infused with nourishing ingredients, it creates a smooth, natural finish that lasts throughout the day. Unveil a radiant complexion and embrace a foundation that enhances your natural beauty.',
                'price' => 29.99,
                'image' => 'images/products/product3.jpg'
            ],
            [
                'name' => 'Blusher',
                'description' => 'Blusher is a cosmetic product applied to the cheeks to add a rosy or flushed appearance, enhancing the natural color of the skin. Available in various formulations, including powder, cream, and liquid, blushers are used to create a youthful and radiant complexion. They come in a range of shades to suit different skin tones and makeup preferences.',
                'price' => 9.99,
                'image' => 'images/products/product4.jpg'
            ],
            [
                'name' => 'Eyeliner',
                'description' => 'Elevate your gaze with our precision-formulated eyeliner that effortlessly defines and accentuates your eyes. Glide on smoothly with intense, smudge-proof pigments for a long-lasting, dramatic look. Achieve bold, captivating eyes with ease, making a statement that lasts from day to night.',
                'price' => 8.99,
                'image' => 'images/products/product5.jpg'
            ],
            [
                'name' => 'Eyeshadow',
                'description' => 'Unleash your creativity with our velvety eyeshadows, blending seamlessly to create stunning eye looks. Our richly pigmented palette offers a spectrum of captivating colors, from subtle neutrals to vibrant hues, allowing you to express your unique style. Elevate your eye game with long-lasting, crease-resistant shades for a mesmerizing and glamorous finish.',
                'price' => 159.99,
                'image' => 'images/products/product6.jpg'
            ],
        ];

        // Insert data into the products table
        foreach ($products as $productData) {
            Products::create($productData);
        }
    }
}