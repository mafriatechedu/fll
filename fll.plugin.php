<?php
/**
 * Plugin Name: Free Loan Letter
 * Plugin URI: https://github.com/mafriatechedu/fll
 * Description: Create letter for Member
 * Version: 3.0.0
 * Author: Drajat Hasan
 * Author URI: https://github.com/drajathasan
 */

use SLiMS\Plugins;

// Instance
$plugin = Plugins::getInstance();

// Plugin menu
$plugin->register('opac', 'bebas pustaka v3', __DIR__ . '/views/member.php');