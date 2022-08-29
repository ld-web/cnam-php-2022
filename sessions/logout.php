<?php
require_once('functions.php');
session_start();
$_SESSION = [];
session_destroy();
redirect('index.php');
