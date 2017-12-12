<?php

require_once($_SERVER["DOCUMENT_ROOT"] . '/classes/config.php');
require_once($_SERVER["DOCUMENT_ROOT"] . '/classes/user.php');
require_once($_SERVER["DOCUMENT_ROOT"] . '/classes/posts.php');
session_start();

$config = new Config();
$conn = $config->getConnection();

$posts = new Posts($conn);
$user = new User($conn);