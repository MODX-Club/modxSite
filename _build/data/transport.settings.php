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

$setting = $modx->newObject('modSystemSetting');
$setting->fromArray(array(
    'key' => 'modxsite.thumb_snippet',     // set unique key
    'value' => '',
    'xtype' => 'textfield',     //  textfield, numberfield, combo-boolean or other
    'namespace' => NAMESPACE_NAME,
    'area' => 'site',
),'',true,true);
$settings[] = $setting;

$setting = $modx->newObject('modSystemSetting');
$setting->fromArray(array(
    'key' => 'modxsite.thumb_types',     // set unique key
    'value' => '{"small":"&q=90&f=jpg&w=280&h=210","medium":"&q=90&f=jpg&w=600&h=375","big":"&q=90&f=jpg&w=1000&h=750"}',
    'xtype' => 'textarea',     //  textfield, numberfield, combo-boolean or other
    'namespace' => NAMESPACE_NAME,
    'area' => 'site',
),'',true,true);
$settings[] = $setting;


unset($setting);
return $settings;