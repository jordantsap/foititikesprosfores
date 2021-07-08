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
<<<<<<< HEAD
        'image' => 'eidi-spitioy.jpeg',
=======
        'image' => 'images/products/eidi-spitioy.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        'type_id' => 1,
      ]);
      SubType::insert([
        'title' => 'ΠΑΠΟΥΤΣΟΘΗΚΕΣ',
        'slug' => 'papoytsothikes',
<<<<<<< HEAD
        'image' => 'eidi-spitioy.jpeg',
=======
        'image' => 'images/products/eidi-spitioy.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        'type_id' => 1,
      ]);
      SubType::insert([
        'title' => 'ΚΑΛΟΓΕΡΟΙ',
        'slug' => 'kalogeroi',
<<<<<<< HEAD
        'image' => 'eidi-spitioy.jpeg',
=======
        'image' => 'images/products/eidi-spitioy.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        'type_id' => 1,
      ]);
      SubType::insert([
        'title' => 'ΚΡΕΜΑΣΤΕΣ',
        'slug' => 'kremastres',
<<<<<<< HEAD
        'image' => 'eidi-spitioy.jpeg',
=======
        'image' => 'images/products/eidi-spitioy.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        'type_id' => 1,
      ]);

      SubType::insert([
        'title' => 'ΚΑΝΑΠΕΔΕΣ',
        'slug' => 'kanapedes',
<<<<<<< HEAD
        'image' => 'eidi-spitioy.jpeg',
=======
        'image' => 'images/products/eidi-spitioy.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        'type_id' => 2,
      ]);
      SubType::insert([
        'title' => 'ΠΟΛΥΘΡΟΝΕΣ',
        'slug' => 'polythrones',
<<<<<<< HEAD
        'image' => 'eidi-spitioy.jpeg',
=======
        'image' => 'images/products/eidi-spitioy.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        'type_id' => 2,
      ]);
      SubType::insert([
        'title' => 'ΤΡΑΠΕΖΙΑ ΣΑΛΟΝΙΟΥ',
        'slug' => 'trapezia-salonioy',
<<<<<<< HEAD
        'image' => 'eidi-spitioy.jpeg',
=======
        'image' => 'images/products/eidi-spitioy.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        'type_id' => 2,
      ]);
      SubType::insert([
        'title' => 'ΤΗΛΕΟΡΑΣΗΣ ΚΑΙ ΣΥΝΘΕΤΑ',
        'slug' => 'tileorasi-syntheta',
<<<<<<< HEAD
        'image' => 'eidi-spitioy.jpeg',
=======
        'image' => 'images/products/eidi-spitioy.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        'type_id' => 2,
      ]);
      SubType::insert([
        'title' => 'ΤΡΑΠΕΖΙΑ',
        'slug' => 'trapezia',
<<<<<<< HEAD
        'image' => 'eidi-spitioy.jpeg',
=======
        'image' => 'images/products/eidi-spitioy.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        'type_id' => 2,
      ]);
      SubType::insert([
        'title' => 'ΚΑΡΕΚΛΕΣ',
        'slug' => 'karekles',
<<<<<<< HEAD
        'image' => 'eidi-spitioy.jpeg',
=======
        'image' => 'images/products/eidi-spitioy.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        'type_id' => 2,
      ]);

      SubType::insert([
        'title' => 'ΚΡΕΒΑΤΙΑ',
        'slug' => 'krevatia',
<<<<<<< HEAD
        'image' => 'eidi-spitioy.jpeg',
=======
        'image' => 'images/products/eidi-spitioy.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        'type_id' => 3,
      ]);
      SubType::insert([
        'title' => 'ΚΟΜΟΔΙΝΟ',
        'slug' => 'komodino',
<<<<<<< HEAD
        'image' => 'eidi-spitioy.jpeg',
=======
        'image' => 'images/products/eidi-spitioy.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        'type_id' => 3,
      ]);
      SubType::insert([
        'title' => 'ΓΡΑΦΕΙΑ ΚΑΙ ΚΑΡΕΚΛΕΣ',
        'slug' => 'grafia-karekles',
<<<<<<< HEAD
        'image' => 'eidi-spitioy.jpeg',
=======
        'image' => 'images/products/eidi-spitioy.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        'type_id' => 3,
      ]);
      SubType::insert([
        'title' => 'ΒΙΒΛΙΟΘΗΚΕΣ',
        'slug' => 'vivliothikes',
<<<<<<< HEAD
        'image' => 'eidi-spitioy.jpeg',
=======
        'image' => 'images/products/eidi-spitioy.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        'type_id' => 3,
      ]);
      SubType::insert([
        'title' => 'ΛΟΙΠΑ ΕΠΙΠΛΑ',
        'slug' => 'loipa-epipla-ypnodomatio',
<<<<<<< HEAD
        'image' => 'eidi-spitioy.jpeg',
=======
        'image' => 'images/products/eidi-spitioy.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        'type_id' => 3,
      ]);

      SubType::insert([
        'title' => 'ΤΡΑΠΕΖΙΑ',
        'slug' => 'trapezia',
<<<<<<< HEAD
        'image' => 'eidi-spitioy.jpeg',
=======
        'image' => 'images/products/eidi-spitioy.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        'type_id' => 4,
      ]);
      SubType::insert([
        'title' => 'ΚΑΡΕΚΛΕΣ',
        'slug' => 'karekles-koyzina',
<<<<<<< HEAD
        'image' => 'eidi-spitioy.jpeg',
=======
        'image' => 'images/products/eidi-spitioy.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        'type_id' => 4,
      ]);
      SubType::insert([
        'title' => 'ΒΟΗΘΗΤΙΚΑ ΕΠΙΠΛΑ',
        'slug' => 'boithitika-epipla-koyzinas',
<<<<<<< HEAD
        'image' => 'eidi-spitioy.jpeg',
=======
        'image' => 'images/products/eidi-spitioy.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        'type_id' => 4,
      ]);

      SubType::insert([
        'title' => 'ΕΠΙΠΛΑ ΜΠΑΝΙΟΥ',
        'slug' => 'epipla-mpanioy',
<<<<<<< HEAD
        'image' => 'eidi-spitioy.jpeg',
=======
        'image' => 'images/products/eidi-spitioy.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        'type_id' => 5,
      ]);
      SubType::insert([
        'title' => 'ΚΑΘΡΕΠΤΕΣ ΜΠΑΝΙΟΥ',
        'slug' => 'kathreptes-mpanioy',
<<<<<<< HEAD
        'image' => 'eidi-spitioy.jpeg',
=======
        'image' => 'images/products/eidi-spitioy.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        'type_id' => 5,
      ]);
      SubType::insert([
        'title' => 'ΕΞΑΡΤΗΜΑΤΑ',
        'slug' => 'eksartimata',
<<<<<<< HEAD
        'image' => 'eidi-spitioy.jpeg',
=======
        'image' => 'images/products/eidi-spitioy.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        'type_id' => 5,
      ]);
    }
}
