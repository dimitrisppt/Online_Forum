<?php

require_once('core/config.php');
require_once('classes/user.php');
require_once('classes/posts.php');
session_start();

$config = new Config();
$conn = $config->getConnection();

$posts = new Posts($conn);
$user = new User($conn);