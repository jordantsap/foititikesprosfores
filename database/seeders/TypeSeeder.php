<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Run the cache:clear if u change anything.
     *
     * @return void
     */
    public function run()
    {
        // clean the db table
        DB::table('types')->truncate();
        // insert table data
        Type::insert([
            'title' => 'ΧΩΛ',
            'slug' => 'xol',
            'active' => 1,
<<<<<<< HEAD
            'image' => 'eidi-spitioy.jpeg',
=======
            'image' => 'images/products/eidi-spitioy.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
            'category_id' => 1,
        ]);
        Type::insert([
            'title' => 'ΣΑΛΟΝΙ & ΤΡΑΠΕΖΑΡΙΑ',
            'slug' => 'saloni-trapezaria',
            'active' => 1,
<<<<<<< HEAD
            'image' => 'eidi-spitioy.jpeg',
=======
            'image' => 'images/products/eidi-spitioy.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
            'category_id' => 1,
        ]);
        Type::insert([
            'title' => 'ΥΠΝΟΔΩΜΑΤΙΟ',
            'slug' => 'ypnodwmatio',
            'active' => 1,
<<<<<<< HEAD
            'image' => 'eidi-spitioy.jpeg',
=======
            'image' => 'images/products/eidi-spitioy.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
            'category_id' => 1,
        ]);
        Type::insert([
            'title' => 'ΚΟΥΖΙΝΑ',
            'slug' => 'koyzina',
            'active' => 1,
<<<<<<< HEAD
            'image' => 'hl-syskeyes.jpeg',
=======
            'image' => 'images/products/hl-syskeyes.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
            'category_id' => 1,
        ]);
        Type::insert([
            'title' => 'ΜΠΑΝΙΟ',
            'slug' => 'mpanio',
            'active' => 1,
<<<<<<< HEAD
            'image' => 'tilefwnia-internet.jpeg',
=======
            'image' => 'images/products/tilefwnia-internet.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
            'category_id' => 1,
        ]);

        Type::insert([
            'title' => 'ΦΩΤΙΣΤΙΚΑ',
            'slug' => 'fotistika',
<<<<<<< HEAD
            'image' => 'technologia.jpeg',
=======
            'image' => 'images/products/technologia.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
            'category_id' => 2,
            'active' => 1,
        ]);
        Type::insert([
            'title' => 'ΚΑΘΡΕΠΤΕΣ',
            'slug' => 'kathreptes',
<<<<<<< HEAD
            'image' => 'technologia.jpeg',
=======
            'image' => 'images/products/technologia.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
            'category_id' => 2,
            'active' => 1,
        ]);
        Type::insert([
            'title' => 'ΡΟΛΟΓΙΑ',
            'slug' => 'rologia',
<<<<<<< HEAD
            'image' => 'technologia.jpeg',
=======
            'image' => 'images/products/technologia.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
            'category_id' => 2,
            'active' => 1,
        ]);
        Type::insert([
            'title' => 'ΜΑΞΙΛΑΡΙΑ',
            'slug' => 'maksilaria',
<<<<<<< HEAD
            'image' => 'technologia.jpeg',
=======
            'image' => 'images/products/technologia.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
            'category_id' => 2,
            'active' => 1,
        ]);
        Type::insert([
            'title' => 'ΣΕΝΤΟΝΙΑ',
            'slug' => 'sentonia',
<<<<<<< HEAD
            'image' => 'technologia.jpeg',
=======
            'image' => 'images/products/technologia.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
            'category_id' => 2,
            'active' => 1,
        ]);
        Type::insert([
            'title' => 'ΠΕΤΣΕΤΕΣ',
            'slug' => 'petsetes',
<<<<<<< HEAD
            'image' => 'technologia.jpeg',
=======
            'image' => 'images/products/technologia.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
            'category_id' => 2,
            'active' => 1,
        ]);

        Type::insert([
            'title' => 'ΤΗΛΕΟΡΑΣΕΙΣ',
            'slug' => 'tileoraseis',
<<<<<<< HEAD
            'image' => 'technologia.jpeg',
=======
            'image' => 'images/products/technologia.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
            'category_id' => 3,
            'active' => 1,
        ]);
        Type::insert([
            'title' => 'ΚΙΝΗΤΑ ΤΗΛΕΦΩΝΑ',
            'slug' => 'kinita-thlefwna',
<<<<<<< HEAD
            'image' => 'technologia.jpeg',
=======
            'image' => 'images/products/technologia.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
            'category_id' => 3,
            'active' => 1,
        ]);
        Type::insert([
            'title' => 'H/Y& LAPTOPS',
            'slug' => 'hl-ypologistes-laptop',
<<<<<<< HEAD
            'image' => 'technologia.jpeg',
=======
            'image' => 'images/products/technologia.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
            'category_id' => 3,
            'active' => 1,
        ]);
        Type::insert([
            'title' => 'TABLETS',
            'slug' => 'tablets',
<<<<<<< HEAD
            'image' => 'technologia.jpeg',
=======
            'image' => 'images/products/technologia.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
            'category_id' => 3,
            'active' => 1,
        ]);
        Type::insert([
            'title' => 'SMARTWATCHES',
            'slug' => 'smartwatches',
<<<<<<< HEAD
            'image' => 'technologia.jpeg',
=======
            'image' => 'images/products/technologia.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
            'category_id' => 3,
            'active' => 1,
        ]);
        Type::insert([
            'title' => 'ΕΞΑΡΤΗΜΑΤΑ',
            'slug' => 'eksartimata',
<<<<<<< HEAD
            'image' => 'technologia.jpeg',
=======
            'image' => 'images/products/technologia.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
            'category_id' => 3,
            'active' => 1,
        ]);

        Type::insert([
            'title' => 'ΨΥΓΕΙΑ',
            'slug' => 'psigeia',
<<<<<<< HEAD
            'image' => 'hl-syskeyes.jpeg',
=======
            'image' => 'images/products/hl-syskeyes.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
            'category_id' => 4,
            'active' => 1,
        ]);
        Type::insert([
            'title' => 'ΠΛΥΝΤΗΡΙΑ',
            'slug' => 'plintiria',
<<<<<<< HEAD
            'image' => 'hl-syskeyes.jpeg',
=======
            'image' => 'images/products/hl-syskeyes.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
            'category_id' => 4,
            'active' => 1,
        ]);
        Type::insert([
            'title' => 'ΚΟΥΖΙΝΕΣ',
            'slug' => 'koyzines',
<<<<<<< HEAD
            'image' => 'hl-syskeyes.jpeg',
=======
            'image' => 'images/products/hl-syskeyes.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
            'category_id' => 4,
            'active' => 1,
        ]);
        Type::insert([
            'title' => 'ΚΑΦΕΤΙΕΡΕΣ',
            'slug' => 'cafetieres',
<<<<<<< HEAD
            'image' => 'hl-syskeyes.jpeg',
=======
            'image' => 'images/products/hl-syskeyes.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
            'category_id' => 4,
            'active' => 1,
        ]);
        Type::insert([
            'title' => 'ΘΕΡΜΑΝΣΗ & ΑΦΥΓΡΑΝΤΗΡΕΣ',
            'slug' => 'thermansi-afigrantires',
<<<<<<< HEAD
            'image' => 'hl-syskeyes.jpeg',
=======
            'image' => 'images/products/hl-syskeyes.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
            'category_id' => 4,
            'active' => 1,
        ]);
        Type::insert([
            'title' => 'ΛΟΙΠΕΣ ΟΙΚΕΙΑΚΕΣ ΣΥΣΚΕΥΕΣ',
            'slug' => 'diafores-hl-syskeyes',
<<<<<<< HEAD
            'image' => 'hl-syskeyes.jpeg',
=======
            'image' => 'images/products/hl-syskeyes.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
            'category_id' => 4,
            'active' => 1,
        ]);
        // Type::insert([
        //     'title' => 'ΦΟΙΤΗΤΙΚΕΣ ΠΡΟΣΦΟΡΕΣ ΑΝΑ ΣΥΝΕΡΓΑΖΟΜΕΝΗ ΕΤΑΙΡΕΙΑ',
        //     'slug' => 'foititikes-prosfores-ana-etaireia',
<<<<<<< HEAD
        //     'image' => 'hl-syskeyes.jpeg',
=======
        //     'image' => 'images/products/hl-syskeyes.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        //     'category_id' => 4,
        // ]);


        // Type::insert([
        //     'title' => 'ΑΝΔΡΙΚΑ',
        //     'slug' => 'antrika',
<<<<<<< HEAD
        //     'image' => 'technologia.jpeg',
=======
        //     'image' => 'images/products/technologia.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        //     'category_id' => 6,
        // ]);
        // Type::insert([
        //     'title' => 'ΓΥΝΑΙΚΕΙΑ',
        //     'slug' => 'gynaikeia',
<<<<<<< HEAD
        //     'image' => 'technologia.jpeg',
=======
        //     'image' => 'images/products/technologia.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        //     'category_id' => 6,
        // ]);
        // Type::insert([
        //     'title' => 'ΜΠΛΟΥΖΕΣ',
        //     'slug' => 'mployzes',
<<<<<<< HEAD
        //     'image' => 'technologia.jpeg',
=======
        //     'image' => 'images/products/technologia.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        //     'category_id' => 6,
        // ]);
        // Type::insert([
        //     'title' => 'ΠΟΥΚΑΜΙΣΑ',
        //     'slug' => 'poykamisa',
<<<<<<< HEAD
        //     'image' => 'technologia.jpeg',
=======
        //     'image' => 'images/products/technologia.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        //     'category_id' => 6,
        // ]);
        // Type::insert([
        //     'title' => 'ΠΑΝΟΦΟΡΙΑ',
        //     'slug' => 'panoforia',
<<<<<<< HEAD
        //     'image' => 'technologia.jpeg',
=======
        //     'image' => 'images/products/technologia.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        //     'category_id' => 6,
        // ]);
        // Type::insert([
        //     'title' => 'ΦΟΥΣΤΕΣ',
        //     'slug' => 'foystes',
<<<<<<< HEAD
        //     'image' => 'technologia.jpeg',
=======
        //     'image' => 'images/products/technologia.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        //     'category_id' => 6,
        // ]);
        // Type::insert([
        //     'title' => 'ΦΟΡΕΜΑΤΑ',
        //     'slug' => 'foremata',
<<<<<<< HEAD
        //     'image' => 'technologia.jpeg',
=======
        //     'image' => 'images/products/technologia.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        //     'category_id' => 6,
        // ]);
        // Type::insert([
        //     'title' => 'ΠΑΠΟΥΤΣΙΑ',
        //     'slug' => 'papoytsia',
<<<<<<< HEAD
        //     'image' => 'technologia.jpeg',
=======
        //     'image' => 'images/products/technologia.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        //     'category_id' => 6,
        // ]);
        // Type::insert([
        //     'title' => 'ΑΞΕΣΟΥΑΡ',
        //     'slug' => 'aksesoyar',
<<<<<<< HEAD
        //     'image' => 'technologia.jpeg',
=======
        //     'image' => 'images/products/technologia.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        //     'category_id' => 6,
        // ]);

        // Type::insert([
        //     'title' => 'ΕΙΔΗ ΑΘΛΗΣΗΣ',
        //     'slug' => 'eidi-athlisis',
<<<<<<< HEAD
        //     'image' => 'sport.jpeg',
=======
        //     'image' => 'images/products/sport.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        //     'category_id' => 8,
        // ]);
        // Type::insert([
        //     'title' => 'ΓΥΜΝΑΣΤΗΡΙΑ',
        //     'slug' => 'gymnastiria',
<<<<<<< HEAD
        //     'image' => 'sport.jpeg',
=======
        //     'image' => 'images/products/sport.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        //     'category_id' => 8,
        // ]);
        // Type::insert([
        //     'title' => 'ΟΜΑΔΙΚΑ ΑΘΛΗΜΑΤΑ',
        //     'slug' => 'omadika-athlimata',
<<<<<<< HEAD
        //     'image' => 'sport.jpeg',
=======
        //     'image' => 'images/products/sport.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        //     'category_id' => 8,
        // ]);
        // Type::insert([
        //     'title' => 'ΕΥΕΞΙΑ',
        //     'slug' => 'eyeksia',
<<<<<<< HEAD
        //     'image' => 'sport.jpeg',
=======
        //     'image' => 'images/products/sport.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        //     'category_id' => 8,
        // ]);

        // Type::insert([
        //     'title' => 'ΥΠΗΡΕΣΙΕΣ',
        //     'slug' => 'ypiresies',
<<<<<<< HEAD
        //     'image' => 'anakainisi.jpeg',
=======
        //     'image' => 'images/products/anakainisi.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        //     'category_id' => 9,
        // ]);
        // Type::insert([
        //     'title' => 'ΥΛΙΚΑ',
        //     'slug' => 'ylika',
<<<<<<< HEAD
        //     'image' => 'anakainisi.jpeg',
=======
        //     'image' => 'images/products/anakainisi.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        //     'category_id' => 9,
        // ]);

        // Type::insert([
        //     'title' => 'ΚΑΛΛΥΝΤΙΚΑ',
        //     'slug' => 'kalintika',
<<<<<<< HEAD
        //     'image' => 'technologia.jpeg',
=======
        //     'image' => 'images/products/technologia.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        //     'category_id' => 12,
        // ]);
        // Type::insert([
        //     'title' => 'ΕΙΔΗ ΥΓΙΕΙΝΗΣ',
        //     'slug' => 'eidi-ygieinhs',
<<<<<<< HEAD
        //     'image' => 'technologia.jpeg',
=======
        //     'image' => 'images/products/technologia.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        //     'category_id' => 12,
        // ]);

        // Type::insert([
        //     'title' => 'ΤΑΞΙΔΙΩΤΙΚΑ ΓΡΑΦΕΙΑ',
        //     'slug' => 'taksidiwtika-grafeia',
<<<<<<< HEAD
        //     'image' => 'technologia.jpeg',
=======
        //     'image' => 'images/products/technologia.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        //     'category_id' => 13,
        // ]);
        // Type::insert([
        //     'title' => 'ΕΙΣΙΤΗΡΙΑ',
        //     'slug' => 'eisitiria',
<<<<<<< HEAD
        //     'image' => 'technologia.jpeg',
=======
        //     'image' => 'images/products/technologia.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        //     'category_id' => 13,
        // ]);
        // Type::insert([
        //     'title' => 'ΔΙΑΜΟΝΗ',
        //     'slug' => 'diamoni',
<<<<<<< HEAD
        //     'image' => 'technologia.jpeg',
=======
        //     'image' => 'images/products/technologia.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        //     'category_id' => 13,
        // ]);

        // Type::insert([
        //     'title' => 'ΣΙΝΕΜΑ',
        //     'slug' => 'cinema',
<<<<<<< HEAD
        //     'image' => 'technologia.jpeg',
=======
        //     'image' => 'images/products/technologia.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        //     'category_id' => 14,
        // ]);
        // Type::insert([
        //     'title' => 'ΘΕΑΤΡΟ',
        //     'slug' => 'theatro',
<<<<<<< HEAD
        //     'image' => 'technologia.jpeg',
=======
        //     'image' => 'images/products/technologia.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        //     'category_id' => 14,
        // ]);
        // Type::insert([
        //     'title' => 'ΣΥΝΑΥΛΙΕΣ',
        //     'slug' => 'synaylies',
<<<<<<< HEAD
        //     'image' => 'technologia.jpeg',
=======
        //     'image' => 'images/products/technologia.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        //     'category_id' => 14,
        // ]);
        // Type::insert([
        //     'title' => 'ΜΟΥΣΕΙΑ',
        //     'slug' => 'moysia',
<<<<<<< HEAD
        //     'image' => 'technologia.jpeg',
=======
        //     'image' => 'images/products/technologia.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        //     'category_id' => 14,
        // ]);
        // Type::insert([
        //     'title' => 'ΕΞΟΔΟΣ',
        //     'slug' => 'exodos',
<<<<<<< HEAD
        //     'image' => 'technologia.jpeg',
=======
        //     'image' => 'images/products/technologia.jpeg',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        //     'category_id' => 14,
        // ]);
    }
}
