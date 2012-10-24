<?php
 
/**
 * Settings for the Aerie Lite theme
 */

defined('MOODLE_INTERNAL') || die;

// Adds our page to the structure of the admin tree

if ($ADMIN->fulltree) { 

// Page Background colour setting
$name = 'theme_aerie_lite/pagebackgroundcolor';
$title = get_string('pagebackgroundcolor','theme_aerie_lite');
$description = get_string('pagebackgroundcolordesc', 'theme_aerie_lite');
$default = '#e9e9e9';
$previewconfig = array('selector'=>'html', 'style'=>'backgroundColor');
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
$settings->add($setting);

// Inside Wrapper Background colour setting
$name = 'theme_aerie_lite/insidebackgroundcolor';
$title = get_string('insidebackgroundcolor','theme_aerie_lite');
$description = get_string('insidebackgroundcolordesc', 'theme_aerie_lite');
$default = '#d8d8eb';
$previewconfig = array('selector'=>'html', 'style'=>'backgroundColor');
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
$settings->add($setting);

// Frame colour setting
$name = 'theme_aerie_lite/framecolor';
$title = get_string('framecolor','theme_aerie_lite');
$description = get_string('framecolordesc', 'theme_aerie_lite');
$default = '#b3b3d9';
$previewconfig = array('selector'=>'html', 'style'=>'backgroundColor');
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
$settings->add($setting);

// Block colour setting
$name = 'theme_aerie_lite/blockcolor';
$title = get_string('blockcolor','theme_aerie_lite');
$description = get_string('blockcolordesc', 'theme_aerie_lite');
$default = '#b3b3d9';
$previewconfig = array('selector'=>'html', 'style'=>'backgroundColor');
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
$settings->add($setting);

// Navbar and dock colour setting
$name = 'theme_aerie_lite/navbarcolor';
$title = get_string('navbarcolor','theme_aerie_lite');
$description = get_string('navbarcolordesc', 'theme_aerie_lite');
$default = '#b3b3d9';
$previewconfig = array('selector'=>'html', 'style'=>'backgroundColor');
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
$settings->add($setting);

// Custom menu bar colour setting
$name = 'theme_aerie_lite/custommenucolor';
$title = get_string('custommenucolor','theme_aerie_lite');
$description = get_string('custommenucolordesc', 'theme_aerie_lite');
$default = '#b3b3d9';
$previewconfig = array('selector'=>'html', 'style'=>'backgroundColor');
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
$settings->add($setting);

// Custom menu mouseover hover colour setting
$name = 'theme_aerie_lite/custommenuhovercolor';
$title = get_string('custommenuhovercolor','theme_aerie_lite');
$description = get_string('custommenuhovercolordesc', 'theme_aerie_lite');
$default = '#ffff80';
$previewconfig = array('selector'=>'html', 'style'=>'backgroundColor');
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
$settings->add($setting);

// Course topic box colour setting
$name = 'theme_aerie_lite/topiccolor';
$title = get_string('topiccolor','theme_aerie_lite');
$description = get_string('topiccolordesc', 'theme_aerie_lite');
$default = '#e3e3e3';
$previewconfig = array('selector'=>'html', 'style'=>'backgroundColor');
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
$settings->add($setting);

// Course highlighted topic box colour setting
$name = 'theme_aerie_lite/highlightedtopiccolor';
$title = get_string('highlightedtopiccolor','theme_aerie_lite');
$description = get_string('highlightedtopiccolordesc', 'theme_aerie_lite');
$default = '#ffcc66';
$previewconfig = array('selector'=>'html', 'style'=>'backgroundColor');
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
$settings->add($setting);

// Logo file setting
$name = 'theme_aerie_lite/logo';
$title = get_string('logo','theme_aerie_lite');
$description = get_string('logodesc', 'theme_aerie_lite');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$settings->add($setting);

// Block region width
$name = 'theme_aerie_lite/regionwidth';
$title = get_string('regionwidth','theme_aerie_lite');
$description = get_string('regionwidthdesc', 'theme_aerie_lite');
$default = 200;
$choices = array(150=>'150px', 170=>'170px', 200=>'200px', 240=>'240px', 290=>'290px', 350=>'350px', 420=>'420px');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);

// Foot note setting
$name = 'theme_aerie_lite/footnote';
$title = get_string('footnote','theme_aerie_lite');
$description = get_string('footnotedesc', 'theme_aerie_lite');
$setting = new admin_setting_confightmleditor($name, $title, $description, '');
$settings->add($setting);

// Show the credits to MoodleBites for Theme Designers
$name = 'theme_aerie_lite/mbcredits';
$title = get_string('mbcredits','theme_aerie_lite');
$description = get_string('mbcreditsdesc', 'theme_aerie_lite');
$default = 1;
$choices = array(0=>'No', 1=>'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);

// Custom CSS file
$name = 'theme_aerie_lite/customcss';
$title = get_string('customcss','theme_aerie_lite');
$description = get_string('customcssdesc', 'theme_aerie_lite');
$setting = new admin_setting_configtextarea($name, $title, $description, '');
$settings->add($setting);

}