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

        $data=  [
          'logo' => 'default.logo',
          'slider_status' => 'Enabled',
          'hero_section' => 'Enabled',
          'hero_title' => 'Enabled',
          'hero_content' => 'Enabled',
          'hero_image' => 'default_hero.png',
          'hero_link' => null,
          'section_block1_title' => 'Provide financial advice by our advisor',
          'section_block1_content' => 'Copywrite, blogpublic realations content translation.',
          'section_block2_title' => 'Complete solutions for global organisations',
          'section_block2_content' => 'Copywrite, blogpublic realations content translation.',
          'section_block3_title' => 'Provide financial advice by our advisor',
          'section_block3_content' => 'Copywrite, blogpublic realations content translation.',
        ];

        foreach ($data as $key => $dataItem)
        {
            $wstSettings = new WebSenifThemeSettings;
            $wstSettings->key = $key;
            $wstSettings->value = $dataItem;
            $wstSettings->save();
        }



        // $this->call("OthersTableSeeder");
    }
}
