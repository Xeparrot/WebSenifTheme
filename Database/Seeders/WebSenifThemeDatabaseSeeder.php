<?php

namespace Modules\WebSenifTheme\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\WebSenifTheme\Entities\WebSenifThemeSettings;

class WebSenifThemeDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $wstSettings = new WebSenifThemeSettings;
        $wstSettings->key = 'hero_content';
        $wstSettings->value = 'Great Companies are built on great Products';
        $wstSettings->save();

        // $this->call("OthersTableSeeder");
    }
}
