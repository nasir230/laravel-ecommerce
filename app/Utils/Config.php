<?php
namespace App\Utils;

use App\Setting;
use Con;
class Config {


  public function settings(){
    
    $setting = Setting::all();
    $setting = $setting->pluck('value','title');
    $setting= $setting->toArray();
    $setting = (object)$setting;
    return $setting;
    
  }


}
?>
