<?php


namespace Database\Seeders;


use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class CategorySeeder extends Seeder
{
public function run(): void
{
// Top-level categories
$tops = [
['name' => 'T-Shirts', 'image' => 'https://picsum.photos/seed/tshirts/600/600'],
['name' => 'Sweatshirts', 'image' => 'https://picsum.photos/seed/sweats/600/600'],
['name' => 'Uniforms', 'image' => 'https://picsum.photos/seed/uniforms/600/600'],
['name' => 'Jackets', 'image' => 'https://picsum.photos/seed/jackets/600/600'],
['name' => 'Blazers', 'image' => 'https://picsum.photos/seed/blazers/600/600'],
['name' => 'Caps', 'image' => 'https://picsum.photos/seed/caps/600/600'],
];


$topIds = [];
foreach ($tops as $t) {
$cat = Category::firstOrCreate(
['slug' => Str::slug($t['name'])],
['name' => $t['name'], 'image_url' => $t['image']]
);
$topIds[$t['name']] = $cat->id;
}


// Subcategories under T-Shirts
$subs = ['Polo T-Shirts','Roundneck T-Shirts','Oversize T-Shirts','Printed T-Shirts'];
foreach ($subs as $s) {
Category::firstOrCreate(
['slug' => Str::slug($s)],
['name' => $s, 'parent_id' => $topIds['T-Shirts'], 'image_url' => 'https://picsum.photos/seed/'.Str::slug($s).'/600/600']
);
}
}
}