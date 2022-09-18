<?php

namespace Modules\WebSenifTheme\Http\Services;


use Modules\WebSenifTheme\Entities\WebSenifThemeSettings;
use Modules\WebSenifTheme\Http\Controllers\WebSenifThemeController;

class ThemeSettingService
{
   public static function getSenifThemeSetting($key)
   {

       $getSettings = WebSenifThemeSettings::where('key',$key)->first();

       if($getSettings)
       {
           return $getSettings->value;
       }else{
           return null;
       }
   }

   public static function updateSenifThemeSettings($key,$value)
   {
       $checkThemeSetting = WebSenifThemeSettings::where('key',$key)->first();

       if($checkThemeSetting == null)
       {
           $settings = new WebSenifThemeSettings;
           $settings->key = $key;
           $settings->value = $key;
           $settings->save();
           return $settings->id;

       }else{
           WebSenifThemeSettings::where('key',$key)->update([
               'value' => $value
           ]);
       }


   }

}