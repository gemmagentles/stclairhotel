<?php

/**
 * Plugin Name: Social Share Buttons by Supsystic
 * Plugin URI: http://supsystic.com
 * Description: Social share buttons to increase social traffic and popularity. Social sharing to Facebook, Twitter and other social networks
 * Version: 2.1.13
 * Author: supsystic.com
 * Author URI: http://supsystic.com
 **/

include dirname(__FILE__) . '/app/SupsysticSocialSharing.php';

$supsysticSocialSharing = new SupsysticSocialSharing();

$supsysticSocialSharing->activate(__FILE__);
$supsysticSocialSharing->deactivate(__FILE__);

$supsysticSocialSharing->run();
