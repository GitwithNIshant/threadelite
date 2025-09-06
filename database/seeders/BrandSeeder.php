<?php


namespace Database\Seeders;


use App\Models\Brand;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class BrandSeeder extends Seeder
{
public function run(): void
{
$names = [
'hp','shubhi','gera','lets out do','maharastra police','techbean','aryan aesthetics',
'purnartha','kajaria','enka zaden','cdac','cummins','quaker houghton','weichai',
'NRCes','vincacyber','bajaj finserv','vasudev kutumbkam','potain authorized',
'real value','manitowoc'
];


foreach ($names as $n) {
Brand::firstOrCreate(
['slug' => Str::slug($n)],
['name' => ucwords($n)]
);
}
}
}