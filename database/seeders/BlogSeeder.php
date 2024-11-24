<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::factory()->create([
            "title" => "Ayam Broiler",
            "description" => "
Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque earum similique voluptas, unde repudiandae, id totam at consequuntur eos, ex tenetur. Possimus nihil eaque ad.",
            "images" => "image/ayam4.jpg"
        ]);
    }
}
