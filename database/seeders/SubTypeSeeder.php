<?php

namespace Database\Seeders;

use App\Models\SubType;
use Illuminate\Database\Seeder;

class SubTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('sub_types')->truncate();
        // insert table data
      SubType::insert([
        'title' => 'ΕΠΙΠΛΑ ΕΙΣΟΔΟΥ',
        'slug' => 'eipla-eisodoy',
        'image' => 'eidi-spitioy.jpeg',
        'type_id' => 1,
      ]);
      SubType::insert([
        'title' => 'ΠΑΠΟΥΤΣΟΘΗΚΕΣ',
        'slug' => 'papoytsothikes',
        'image' => 'eidi-spitioy.jpeg',
        'type_id' => 1,
      ]);
      SubType::insert([
        'title' => 'ΚΑΛΟΓΕΡΟΙ',
        'slug' => 'kalogeroi',
        'image' => 'eidi-spitioy.jpeg',
        'type_id' => 1,
      ]);
      SubType::insert([
        'title' => 'ΚΡΕΜΑΣΤΕΣ',
        'slug' => 'kremastres',
        'image' => 'eidi-spitioy.jpeg',
        'type_id' => 1,
      ]);

      SubType::insert([
        'title' => 'ΚΑΝΑΠΕΔΕΣ',
        'slug' => 'kanapedes',
        'image' => 'eidi-spitioy.jpeg',
        'type_id' => 2,
      ]);
      SubType::insert([
        'title' => 'ΠΟΛΥΘΡΟΝΕΣ',
        'slug' => 'polythrones',
        'image' => 'eidi-spitioy.jpeg',
        'type_id' => 2,
      ]);
      SubType::insert([
        'title' => 'ΤΡΑΠΕΖΙΑ ΣΑΛΟΝΙΟΥ',
        'slug' => 'trapezia-salonioy',
        'image' => 'eidi-spitioy.jpeg',
        'type_id' => 2,
      ]);
      SubType::insert([
        'title' => 'ΤΗΛΕΟΡΑΣΗΣ ΚΑΙ ΣΥΝΘΕΤΑ',
        'slug' => 'tileorasi-syntheta',
        'image' => 'eidi-spitioy.jpeg',
        'type_id' => 2,
      ]);
      SubType::insert([
        'title' => 'ΤΡΑΠΕΖΙΑ',
        'slug' => 'trapezia',
        'image' => 'eidi-spitioy.jpeg',
        'type_id' => 2,
      ]);
      SubType::insert([
        'title' => 'ΚΑΡΕΚΛΕΣ',
        'slug' => 'karekles',
        'image' => 'eidi-spitioy.jpeg',
        'type_id' => 2,
      ]);

      SubType::insert([
        'title' => 'ΚΡΕΒΑΤΙΑ',
        'slug' => 'krevatia',
        'image' => 'eidi-spitioy.jpeg',
        'type_id' => 3,
      ]);
      SubType::insert([
        'title' => 'ΚΟΜΟΔΙΝΟ',
        'slug' => 'komodino',
        'image' => 'eidi-spitioy.jpeg',
        'type_id' => 3,
      ]);
      SubType::insert([
        'title' => 'ΓΡΑΦΕΙΑ ΚΑΙ ΚΑΡΕΚΛΕΣ',
        'slug' => 'grafia-karekles',
        'image' => 'eidi-spitioy.jpeg',
        'type_id' => 3,
      ]);
      SubType::insert([
        'title' => 'ΒΙΒΛΙΟΘΗΚΕΣ',
        'slug' => 'vivliothikes',
        'image' => 'eidi-spitioy.jpeg',
        'type_id' => 3,
      ]);
      SubType::insert([
        'title' => 'ΛΟΙΠΑ ΕΠΙΠΛΑ',
        'slug' => 'loipa-epipla-ypnodomatio',
        'image' => 'eidi-spitioy.jpeg',
        'type_id' => 3,
      ]);

      SubType::insert([
        'title' => 'ΤΡΑΠΕΖΙΑ',
        'slug' => 'trapezia',
        'image' => 'eidi-spitioy.jpeg',
        'type_id' => 4,
      ]);
      SubType::insert([
        'title' => 'ΚΑΡΕΚΛΕΣ',
        'slug' => 'karekles-koyzina',
        'image' => 'eidi-spitioy.jpeg',
        'type_id' => 4,
      ]);
      SubType::insert([
        'title' => 'ΒΟΗΘΗΤΙΚΑ ΕΠΙΠΛΑ',
        'slug' => 'boithitika-epipla-koyzinas',
        'image' => 'eidi-spitioy.jpeg',
        'type_id' => 4,
      ]);

      SubType::insert([
        'title' => 'ΕΠΙΠΛΑ ΜΠΑΝΙΟΥ',
        'slug' => 'epipla-mpanioy',
        'image' => 'eidi-spitioy.jpeg',
        'type_id' => 5,
      ]);
      SubType::insert([
        'title' => 'ΚΑΘΡΕΠΤΕΣ ΜΠΑΝΙΟΥ',
        'slug' => 'kathreptes-mpanioy',
        'image' => 'eidi-spitioy.jpeg',
        'type_id' => 5,
      ]);
      SubType::insert([
        'title' => 'ΕΞΑΡΤΗΜΑΤΑ',
        'slug' => 'eksartimata',
        'image' => 'eidi-spitioy.jpeg',
        'type_id' => 5,
      ]);
    }
}
