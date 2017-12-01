<?php 
/**
 * Single entry point
 * 
 * PHP Blog System v1.0.0
 * 2017.11.30
 */


define("ROOT", dirname(__DIR__));
define("TIMESTAMP", time());
include '../src/lib.php';
include '../src/App.php';
$config = require_once('../src/config.php');
App::run($config);