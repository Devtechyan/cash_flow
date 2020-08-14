<?php
// Load Config
require_once 'config/config.php';

//helper

require_once 'helper/url_helper.php';
require_once 'helper/message_helper.php';

// Autoload  Libraries Classes
spl_autoload_register(function ($className) {
 require_once 'libraries/' . $className . '.php';
});