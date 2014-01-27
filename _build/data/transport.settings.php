<?php

$settings = array();

$setting = $modx->newObject('modSystemSetting');
$setting->fromArray(array(
    'key' => 'modxSite.template_url',     // set unique key
    'value' => '{assets_url}components/modxsite/templates/',
    'xtype' => 'textfield',     //  textfield, numberfield, combo-boolean or other
    'namespace' => NAMESPACE_NAME,
    'area' => 'site',
),'',true,true);
$settings[] = $setting;


unset($setting);
return $settings;