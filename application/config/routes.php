<?php defined('SYSPATH') OR die('No direct access allowed.');

$config['_default'] = 'homepage';
$config['dashboard'] = 'calendar/index';
$config['^day/?(\d{4}\-\d{2}\-\d{2})?/?'] = 'calendar/dayview/$1';
$config['coming\-soon'] = 'homepage/coming_soon';

