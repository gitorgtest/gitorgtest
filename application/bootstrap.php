<?php

require 'core/ClassLoader.php';

//classローダのインスタンス作成
$loader = new ClassLoader();
$loader->registerDir(dirname(__FILE__).'/core');
$loader->registerDir(dirname(__FILE__).'/models');
$loader->register();
