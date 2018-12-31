<?php
if(!isset($_SESSION)) {
	session_start();
}

//ini_set("error_reporting", "E_ALL & ~E_NOTICE");

// site domain name with http
defined("SITE_URL")
	|| define("SITE_URL", "http://".$_SERVER['SERVER_NAME']);
	
// directory separator
defined("DS")
	|| define("DS", DIRECTORY_SEPARATOR);

// root path
defined("ROOT_PATH")
	|| define("ROOT_PATH", realpath(dirname(__FILE__) . DS."..".DS));


	
// classes folder
defined("CLASSES_DIR")
	|| define("CLASSES_DIR", "classes");

// pages directory
defined("PAGES_DIR")
	|| define("PAGES_DIR", "pages");

// modules folder
defined("MOD_DIR")
	|| define("MOD_DIR", "mod");

// languages folder
defined("LANG_DIR")
|| define("LANG_DIR", "lang");


// inc folder
defined("INC_DIR")
	|| define("INC_DIR", "inc");
	
// templates folder
defined("TEMPLATE_DIR")
	|| define("TEMPLATE_DIR", "template");
	
// emails path
defined("EMAILS_PATH")
	|| define("EMAILS_PATH", ROOT_PATH.DS."emails");
	
// catalogue images path
defined("UPLOAD_PATH")
	|| define("UPLOAD_PATH", ROOT_PATH.DS."media".DS."upload");
	
// add all above directories to the include path
set_include_path(implode(PATH_SEPARATOR, array(
	realpath(ROOT_PATH.DS.CLASSES_DIR),
	realpath(ROOT_PATH.DS.PAGES_DIR),
    realpath(ROOT_PATH.DS.LANG_DIR),
	realpath(ROOT_PATH.DS.MOD_DIR),
	realpath(ROOT_PATH.DS.INC_DIR),
	realpath(ROOT_PATH.DS.TEMPLATE_DIR),
	get_include_path()
)));




