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
            'image' => 'eidi-spitioy.jpeg',
            'category_id' => 1,
        ]);
        Type::insert([
            'title' => 'ΣΑΛΟΝΙ & ΤΡΑΠΕΖΑΡΙΑ',
            'slug' => 'saloni-trapezaria',
            'active' => 1,
            'image' => 'eidi-spitioy.jpeg',
            'category_id' => 1,
        ]);
        Type::insert([
            'title' => 'ΥΠΝΟΔΩΜΑΤΙΟ',
            'slug' => 'ypnodwmatio',
            'active' => 1,
            'image' => 'eidi-spitioy.jpeg',
            'category_id' => 1,
        ]);
        Type::insert([
            'title' => 'ΚΟΥΖΙΝΑ',
            'slug' => 'koyzina',
            'active' => 1,
            'image' => 'hl-syskeyes.jpeg',
            'category_id' => 1,
        ]);
        Type::insert([
            'title' => 'ΜΠΑΝΙΟ',
            'slug' => 'mpanio',
            'active' => 1,
            'image' => 'tilefwnia-internet.jpeg',
            'category_id' => 1,
        ]);

        Type::insert([
            'title' => 'ΦΩΤΙΣΤΙΚΑ',
            'slug' => 'fotistika',
            'image' => 'technologia.jpeg',
            'category_id' => 2,
            'active' => 1,
        ]);
        Type::insert([
            'title' => 'ΚΑΘΡΕΠΤΕΣ',
            'slug' => 'kathreptes',
            'image' => 'technologia.jpeg',
            'category_id' => 2,
            'active' => 1,
        ]);
        Type::insert([
            'title' => 'ΡΟΛΟΓΙΑ',
            'slug' => 'rologia',
            'image' => 'technologia.jpeg',
            'category_id' => 2,
            'active' => 1,
        ]);
        Type::insert([
            'title' => 'ΜΑΞΙΛΑΡΙΑ',
            'slug' => 'maksilaria',
            'image' => 'technologia.jpeg',
            'category_id' => 2,
            'active' => 1,
        ]);
        Type::insert([
            'title' => 'ΣΕΝΤΟΝΙΑ',
            'slug' => 'sentonia',
            'image' => 'technologia.jpeg',
            'category_id' => 2,
            'active' => 1,
        ]);
        Type::insert([
            'title' => 'ΠΕΤΣΕΤΕΣ',
            'slug' => 'petsetes',
            'image' => 'technologia.jpeg',
            'category_id' => 2,
            'active' => 1,
        ]);

        Type::insert([
            'title' => 'ΤΗΛΕΟΡΑΣΕΙΣ',
            'slug' => 'tileoraseis',
            'image' => 'technologia.jpeg',
            'category_id' => 3,
            'active' => 1,
        ]);
        Type::insert([
            'title' => 'ΚΙΝΗΤΑ ΤΗΛΕΦΩΝΑ',
            'slug' => 'kinita-thlefwna',
            'image' => 'technologia.jpeg',
            'category_id' => 3,
            'active' => 1,
        ]);
        Type::insert([
            'title' => 'H/Y& LAPTOPS',
            'slug' => 'hl-ypologistes-laptop',
            'image' => 'technologia.jpeg',
            'category_id' => 3,
            'active' => 1,
        ]);
        Type::insert([
            'title' => 'TABLETS',
            'slug' => 'tablets',
            'image' => 'technologia.jpeg',
            'category_id' => 3,
            'active' => 1,
        ]);
        Type::insert([
            'title' => 'SMARTWATCHES',
            'slug' => 'smartwatches',
            'image' => 'technologia.jpeg',
            'category_id' => 3,
            'active' => 1,
        ]);
        Type::insert([
            'title' => 'ΕΞΑΡΤΗΜΑΤΑ',
            'slug' => 'eksartimata',
            'image' => 'technologia.jpeg',
            'category_id' => 3,
            'active' => 1,
        ]);

        Type::insert([
            'title' => 'ΨΥΓΕΙΑ',
            'slug' => 'psigeia',
            'image' => 'hl-syskeyes.jpeg',
            'category_id' => 4,
            'active' => 1,
        ]);
        Type::insert([
            'title' => 'ΠΛΥΝΤΗΡΙΑ',
            'slug' => 'plintiria',
            'image' => 'hl-syskeyes.jpeg',
            'category_id' => 4,
            'active' => 1,
        ]);
        Type::insert([
            'title' => 'ΚΟΥΖΙΝΕΣ',
            'slug' => 'koyzines',
            'image' => 'hl-syskeyes.jpeg',
            'category_id' => 4,
            'active' => 1,
        ]);
        Type::insert([
            'title' => 'ΚΑΦΕΤΙΕΡΕΣ',
            'slug' => 'cafetieres',
            'image' => 'hl-syskeyes.jpeg',
            'category_id' => 4,
            'active' => 1,
        ]);
        Type::insert([
            'title' => 'ΘΕΡΜΑΝΣΗ & ΑΦΥΓΡΑΝΤΗΡΕΣ',
            'slug' => 'thermansi-afigrantires',
            'image' => 'hl-syskeyes.jpeg',
            'category_id' => 4,
            'active' => 1,
        ]);
        Type::insert([
            'title' => 'ΛΟΙΠΕΣ ΟΙΚΕΙΑΚΕΣ ΣΥΣΚΕΥΕΣ',
            'slug' => 'diafores-hl-syskeyes',
            'image' => 'hl-syskeyes.jpeg',
            'category_id' => 4,
            'active' => 1,
        ]);
        // Type::insert([
        //     'title' => 'ΦΟΙΤΗΤΙΚΕΣ ΠΡΟΣΦΟΡΕΣ ΑΝΑ ΣΥΝΕΡΓΑΖΟΜΕΝΗ ΕΤΑΙΡΕΙΑ',
        //     'slug' => 'foititikes-prosfores-ana-etaireia',
        //     'image' => 'hl-syskeyes.jpeg',
        //     'category_id' => 4,
        // ]);


        // Type::insert([
        //     'title' => 'ΑΝΔΡΙΚΑ',
        //     'slug' => 'antrika',
        //     'image' => 'technologia.jpeg',
        //     'category_id' => 6,
        // ]);
        // Type::insert([
        //     'title' => 'ΓΥΝΑΙΚΕΙΑ',
        //     'slug' => 'gynaikeia',
        //     'image' => 'technologia.jpeg',
        //     'category_id' => 6,
        // ]);
        // Type::insert([
        //     'title' => 'ΜΠΛΟΥΖΕΣ',
        //     'slug' => 'mployzes',
        //     'image' => 'technologia.jpeg',
        //     'category_id' => 6,
        // ]);
        // Type::insert([
        //     'title' => 'ΠΟΥΚΑΜΙΣΑ',
        //     'slug' => 'poykamisa',
        //     'image' => 'technologia.jpeg',
        //     'category_id' => 6,
        // ]);
        // Type::insert([
        //     'title' => 'ΠΑΝΟΦΟΡΙΑ',
        //     'slug' => 'panoforia',
        //     'image' => 'technologia.jpeg',
        //     'category_id' => 6,
        // ]);
        // Type::insert([
        //     'title' => 'ΦΟΥΣΤΕΣ',
        //     'slug' => 'foystes',
        //     'image' => 'technologia.jpeg',
        //     'category_id' => 6,
        // ]);
        // Type::insert([
        //     'title' => 'ΦΟΡΕΜΑΤΑ',
        //     'slug' => 'foremata',
        //     'image' => 'technologia.jpeg',
        //     'category_id' => 6,
        // ]);
        // Type::insert([
        //     'title' => 'ΠΑΠΟΥΤΣΙΑ',
        //     'slug' => 'papoytsia',
        //     'image' => 'technologia.jpeg',
        //     'category_id' => 6,
        // ]);
        // Type::insert([
        //     'title' => 'ΑΞΕΣΟΥΑΡ',
        //     'slug' => 'aksesoyar',
        //     'image' => 'technologia.jpeg',
        //     'category_id' => 6,
        // ]);

        // Type::insert([
        //     'title' => 'ΕΙΔΗ ΑΘΛΗΣΗΣ',
        //     'slug' => 'eidi-athlisis',
        //     'image' => 'sport.jpeg',
        //     'category_id' => 8,
        // ]);
        // Type::insert([
        //     'title' => 'ΓΥΜΝΑΣΤΗΡΙΑ',
        //     'slug' => 'gymnastiria',
        //     'image' => 'sport.jpeg',
        //     'category_id' => 8,
        // ]);
        // Type::insert([
        //     'title' => 'ΟΜΑΔΙΚΑ ΑΘΛΗΜΑΤΑ',
        //     'slug' => 'omadika-athlimata',
        //     'image' => 'sport.jpeg',
        //     'category_id' => 8,
        // ]);
        // Type::insert([
        //     'title' => 'ΕΥΕΞΙΑ',
        //     'slug' => 'eyeksia',
        //     'image' => 'sport.jpeg',
        //     'category_id' => 8,
        // ]);

        // Type::insert([
        //     'title' => 'ΥΠΗΡΕΣΙΕΣ',
        //     'slug' => 'ypiresies',
        //     'image' => 'anakainisi.jpeg',
        //     'category_id' => 9,
        // ]);
        // Type::insert([
        //     'title' => 'ΥΛΙΚΑ',
        //     'slug' => 'ylika',
        //     'image' => 'anakainisi.jpeg',
        //     'category_id' => 9,
        // ]);

        // Type::insert([
        //     'title' => 'ΚΑΛΛΥΝΤΙΚΑ',
        //     'slug' => 'kalintika',
        //     'image' => 'technologia.jpeg',
        //     'category_id' => 12,
        // ]);
        // Type::insert([
        //     'title' => 'ΕΙΔΗ ΥΓΙΕΙΝΗΣ',
        //     'slug' => 'eidi-ygieinhs',
        //     'image' => 'technologia.jpeg',
        //     'category_id' => 12,
        // ]);

        // Type::insert([
        //     'title' => 'ΤΑΞΙΔΙΩΤΙΚΑ ΓΡΑΦΕΙΑ',
        //     'slug' => 'taksidiwtika-grafeia',
        //     'image' => 'technologia.jpeg',
        //     'category_id' => 13,
        // ]);
        // Type::insert([
        //     'title' => 'ΕΙΣΙΤΗΡΙΑ',
        //     'slug' => 'eisitiria',
        //     'image' => 'technologia.jpeg',
        //     'category_id' => 13,
        // ]);
        // Type::insert([
        //     'title' => 'ΔΙΑΜΟΝΗ',
        //     'slug' => 'diamoni',
        //     'image' => 'technologia.jpeg',
        //     'category_id' => 13,
        // ]);

        // Type::insert([
        //     'title' => 'ΣΙΝΕΜΑ',
        //     'slug' => 'cinema',
        //     'image' => 'technologia.jpeg',
        //     'category_id' => 14,
        // ]);
        // Type::insert([
        //     'title' => 'ΘΕΑΤΡΟ',
        //     'slug' => 'theatro',
        //     'image' => 'technologia.jpeg',
        //     'category_id' => 14,
        // ]);
        // Type::insert([
        //     'title' => 'ΣΥΝΑΥΛΙΕΣ',
        //     'slug' => 'synaylies',
        //     'image' => 'technologia.jpeg',
        //     'category_id' => 14,
        // ]);
        // Type::insert([
        //     'title' => 'ΜΟΥΣΕΙΑ',
        //     'slug' => 'moysia',
        //     'image' => 'technologia.jpeg',
        //     'category_id' => 14,
        // ]);
        // Type::insert([
        //     'title' => 'ΕΞΟΔΟΣ',
        //     'slug' => 'exodos',
        //     'image' => 'technologia.jpeg',
        //     'category_id' => 14,
        // ]);
    }
}
