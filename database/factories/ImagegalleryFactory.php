<?php

namespace Database\Factories;

use App\Models\Imagegallery;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Imagegallery>
 */
class ImagegalleryFactory extends Factory

{
    protected $model = Imagegallery::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $multiple_image = [
            'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&q=80&w=1000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8cHJvZHVjdHxlbnwwfHwwfHx8MA%3D%3D',
            'https://us.123rf.com/450wm/vershininphoto/vershininphoto2002/vershininphoto200202378/140131075-clock-on-wooden-table-in-the-kitchen.jpg?ver=6',
            'https://www.intex.in/cdn/shop/products/1_9b8014ad-124e-4742-a628-9a4c4affe617.jpg?v=1648711109',
            'https://t-mobile.scene7.com/is/image/Tmusprod/fg-phone-google-pixel8-hazel-4?ts=1696339243135&fmt=png-alpha&qlt=85,0&resMode=sharp2&op_usm=1.75,0.3,2,0&dpr=off',
            'https://m.media-amazon.com/images/I/71jIfDWFmEL.jpg',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSA4DOWJd6RoHaGcg8-evF-khfIOVosTWwUMw&usqp=CAU',
            'https://static-01.daraz.com.bd/p/2da1b422207948120728834151d43610.jpg_188x188.jpg_.webp',
            'https://static-01.daraz.com.bd/p/7757636363ff2422212119ce38e7c025.jpg_188x188.jpg_.webp',
            'https://static-01.daraz.com.bd/p/b6dadfee5f9d38260285b2f65006a2e4.jpg_188x188.jpg_.webp',
            'https://static-01.daraz.com.bd/p/f887d3133e1ce569b28be6c84a76e3c8.jpg_188x188.jpg_.webp',
            'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&q=80&w=1000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8cHJvZHVjdHxlbnwwfHwwfHx8MA%3D%3D',
            'https://us.123rf.com/450wm/vershininphoto/vershininphoto2002/vershininphoto200202378/140131075-clock-on-wooden-table-in-the-kitchen.jpg?ver=6',
            'https://www.intex.in/cdn/shop/products/1_9b8014ad-124e-4742-a628-9a4c4affe617.jpg?v=1648711109',
            'https://t-mobile.scene7.com/is/image/Tmusprod/fg-phone-google-pixel8-hazel-4?ts=1696339243135&fmt=png-alpha&qlt=85,0&resMode=sharp2&op_usm=1.75,0.3,2,0&dpr=off',
            'https://m.media-amazon.com/images/I/71jIfDWFmEL.jpg',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSA4DOWJd6RoHaGcg8-evF-khfIOVosTWwUMw&usqp=CAU',
            'https://static-01.daraz.com.bd/p/2da1b422207948120728834151d43610.jpg_188x188.jpg_.webp',
            'https://static-01.daraz.com.bd/p/7757636363ff2422212119ce38e7c025.jpg_188x188.jpg_.webp',
            'https://static-01.daraz.com.bd/p/b6dadfee5f9d38260285b2f65006a2e4.jpg_188x188.jpg_.webp',
            'https://static-01.daraz.com.bd/p/f887d3133e1ce569b28be6c84a76e3c8.jpg_188x188.jpg_.webp',
            'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&q=80&w=1000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8cHJvZHVjdHxlbnwwfHwwfHx8MA%3D%3D',
            'https://us.123rf.com/450wm/vershininphoto/vershininphoto2002/vershininphoto200202378/140131075-clock-on-wooden-table-in-the-kitchen.jpg?ver=6',
            'https://www.intex.in/cdn/shop/products/1_9b8014ad-124e-4742-a628-9a4c4affe617.jpg?v=1648711109',
            'https://t-mobile.scene7.com/is/image/Tmusprod/fg-phone-google-pixel8-hazel-4?ts=1696339243135&fmt=png-alpha&qlt=85,0&resMode=sharp2&op_usm=1.75,0.3,2,0&dpr=off',
            'https://m.media-amazon.com/images/I/71jIfDWFmEL.jpg',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSA4DOWJd6RoHaGcg8-evF-khfIOVosTWwUMw&usqp=CAU',
            'https://static-01.daraz.com.bd/p/2da1b422207948120728834151d43610.jpg_188x188.jpg_.webp',
            'https://static-01.daraz.com.bd/p/7757636363ff2422212119ce38e7c025.jpg_188x188.jpg_.webp',
            'https://static-01.daraz.com.bd/p/b6dadfee5f9d38260285b2f65006a2e4.jpg_188x188.jpg_.webp',
            'https://static-01.daraz.com.bd/p/f887d3133e1ce569b28be6c84a76e3c8.jpg_188x188.jpg_.webp',
        ];

        return [

                'product_id' => $this->faker->numberBetween(1, 10), // Adjust the range as needed
                'multiple_image' =>  $this->faker->randomElement($multiple_image),

            ];
    }
}