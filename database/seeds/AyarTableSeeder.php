<?php

use App\Ayar;
use Illuminate\Database\Seeder;

class AyarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Ayar::create(["name"=>"baslik","value"=>"Yazılım Dünyası"]);
        Ayar::create(["name"=>"author","value"=>"Akif Güldemir"]);
        Ayar::create(["name"=>"aciklama","value"=>"Az kod cok iş.."]);
        Ayar::create(["name"=>"keywords","value"=>"yazılımi,php,javascript,bootstrap"]);
        Ayar::create(["name"=>"facebook","value"=>"https://www.facebook.com/akifguldemir"]);
        Ayar::create(["name"=>"twitter","value"=>"https://twitter.com/akifguldemir"]);
        Ayar::create(["name"=>"github","value"=>"https://github.com/akifguldemir"]);
    }
}
