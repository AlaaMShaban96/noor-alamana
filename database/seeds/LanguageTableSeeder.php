<?php

use Illuminate\Database\Seeder;
use App\Language;

class LanguageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $language = new Language;
        $language->code = "en";
        $language->name = "English";
        $language->save();
        
        $language = new Language;
        $language->code = "ar";
        $language->name = "عربي";
        $language->save();
    }
}
