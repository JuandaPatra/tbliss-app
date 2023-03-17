<?php

namespace Database\Seeders;

use App\Models\Hidden_gem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HiddenGemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hidden_gem::create([
            'title'         => 'N Seoul Tower',
            'slug'          => 'n-seoul-tower',
            'description1'  => 'description hidden gems Seoul 1',
            'image_desktop' => 'https://tbliss.owlandfoxes.co.id//storage/photos/1/HiddenGemss/seoul-2.jpg',
            'image_mobile'  => 'https://tbliss.owlandfoxes.co.id//storage/photos/1/HiddenGemss/seoul-2.jpg',
            'places_id'      => 8,
            'status'        => 'publish'
        ]);

        Hidden_gem::create([
            'title'         => 'Gyeongbokgung Palace',
            'slug'          => 'gyeongbokgung-palace',
            'description1'  => 'description Gyeongbokgung Palace',
            'image_desktop' => 'https://tbliss.owlandfoxes.co.id//storage/photos/1/HiddenGemss/pohang-1.jpg',
            'image_mobile'  => 'https://tbliss.owlandfoxes.co.id//storage/photos/1/HiddenGemss/pohang-1.jpg',
            'places_id'      => 8,
            'status'        => 'publish'
        ]);

        Hidden_gem::create([
            'title'         => 'Lotte World',
            'slug'          => 'lotte-world',
            'description1'  => 'description Lotte World',
            'image_desktop' => 'https://tbliss.owlandfoxes.co.id//storage/photos/1/HiddenGemss/seoul-3.jpg',
            'image_mobile'  => 'https://tbliss.owlandfoxes.co.id//storage/photos/1/HiddenGemss/seoul-3.jpg',
            'places_id'      => 8,
            'status'        => 'publish'
        ]);
        Hidden_gem::create([
            'title'         => 'Haedong Yonggungsa',
            'slug'          => 'haedong-yonggungsa',
            'description1'  => 'description Haedong Yonggungsa',
            'image_desktop' => 'https://tbliss.owlandfoxes.co.id//storage/photos/1/HiddenGemss/busan-1.jpg',
            'image_mobile'  => 'https://tbliss.owlandfoxes.co.id//storage/photos/1/HiddenGemss/busan-1.jpg',
            'places_id'      => 9,
            'status'        => 'publish'
        ]);
        Hidden_gem::create([
            'title'         => 'Kuil Beomeosa',
            'slug'          => 'kuil-beomeosa',
            'description1'  => 'description Kuil Beomeosa',
            'image_desktop' => 'https://tbliss.owlandfoxes.co.id//storage/photos/1/HiddenGemss/busan-2.jpg',
            'image_mobile'  => 'https://tbliss.owlandfoxes.co.id//storage/photos/1/HiddenGemss/busan-2.jpg',
            'places_id'      => 9,
            'status'        => 'publish'
        ]);
        

        Hidden_gem::create([
            'title'         => 'Jagalchi Market',
            'slug'          => 'jagalchi-market',
            'description1'  => 'description Jagalchi Market',
            'image_desktop' => 'https://tbliss.owlandfoxes.co.id//storage/photos/1/HiddenGemss/busan-3.jpg',
            'image_mobile'  => 'https://tbliss.owlandfoxes.co.id//storage/photos/1/HiddenGemss/busan-3.jpg',
            'places_id'      => 9,
            'status'        => 'publish'
        ]);

        Hidden_gem::create([
            'title'         => 'Jukdo Market',
            'slug'          => 'jukdo-market',
            'description1'  => 'description Jukdo Market',
            'image_desktop' => 'https://tbliss.owlandfoxes.co.id//storage/photos/1/HiddenGemss/pohang-2.jpg',
            'image_mobile'  => 'https://tbliss.owlandfoxes.co.id//storage/photos/1/HiddenGemss/pohang-2.jpg',
            'places_id'      => 10,
            'status'        => 'publish'
        ]);

        Hidden_gem::create([
            'title'         => 'Pohang Night Cruising',
            'slug'          => 'pohang-night-cruising',
            'description1'  => 'description Pohang Night Cruising',
            'image_desktop' => 'https://tbliss.owlandfoxes.co.id//storage/photos/1/HiddenGemss/pohang-3.jpg',
            'image_mobile'  => 'https://tbliss.owlandfoxes.co.id//storage/photos/1/HiddenGemss/pohang-3.jpg',
            'places_id'      => 10,
            'status'        => 'publish'
        ]);
        Hidden_gem::create([
            'title'         => 'Bogyeongsa Temple',
            'slug'          => 'bogyeongsa-temple',
            'description1'  => 'description Bogyeongsa Temple',
            'image_desktop' => 'https://tbliss.owlandfoxes.co.id//storage/photos/1/HiddenGemss/jeounju-1.jpg',
            'image_mobile'  => 'https://tbliss.owlandfoxes.co.id//storage/photos/1/HiddenGemss/jeounju-1.jpg',
            'places_id'      => 10,
            'status'        => 'publish'
        ]);
        Hidden_gem::create([
            'title'         => 'Jeonju Hanok Village',
            'slug'          => 'jeonju-hanok-village',
            'description1'  => 'description Jeonju Hanok Village',
            'image_desktop' => 'https://tbliss.owlandfoxes.co.id//storage/photos/1/HiddenGemss/jeounju-2.jpg',
            'image_mobile'  => 'https://tbliss.owlandfoxes.co.id//storage/photos/1/HiddenGemss/jeounju-2.jpg',
            'places_id'     => 11,
            'status'        => 'publish'
        ]);

        Hidden_gem::create([
            'title'         => 'Omokdae and Imokdae',
            'slug'          => 'omokdae-and-imokdae',
            'description1'  => 'description Omokdae and Imokdae',
            'image_desktop' => 'https://tbliss.owlandfoxes.co.id//storage/photos/1/HiddenGemss/jeounju-3.jpg',
            'image_mobile'  => 'https://tbliss.owlandfoxes.co.id//storage/photos/1/HiddenGemss/jeounju-3.jpg',
            'places_id'      => 11,
            'status'        => 'publish'
        ]);

        Hidden_gem::create([
            'title'         => 'Haneul Park',
            'slug'          => 'haneul-park',
            'description1'  => 'description Haneul Park',
            'image_desktop' => 'https://tbliss.owlandfoxes.co.id//storage/photos/1/HiddenGemss/hanuel-park.jpeg',
            'image_mobile'  => 'https://tbliss.owlandfoxes.co.id//storage/photos/1/HiddenGemss/hanuel-park.jpeg',
            'places_id'      => 8,
            'status'        => 'publish'
        ]);

        Hidden_gem::create([
            'title'         => 'Deoksugung',
            'slug'          => 'Deoksugung',
            'description1'  => 'description Deoksugung',
            'image_desktop' => 'https://tbliss.owlandfoxes.co.id//storage/photos/1/licensed-image.jpeg',
            'image_mobile'  => 'https://tbliss.owlandfoxes.co.id//storage/photos/1/licensed-image.jpeg',
            'places_id'      => 8,
            'status'        => 'publish'
        ]);
    }
}
