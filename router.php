<?php

// setup auto loader
set_include_path("class/");
spl_autoload_extensions(".class.php");
spl_autoload_register();
include('class/FormModel.class.php');
include('class/FormController.class.php');
include('class/FormView.class.php');
// ambil informasi path info
// $pathInfo = $_SERVER['PATH_INFO'];

// ambil controller dan method dari path info
// $mvc = explode("/", $pathInfo);
// $controller = $mvc[1];
// $method = $mvc[2];
$data = $_POST;
$file = $_FILES['pic'];

// instansiasi controller
$c = new FormController();
$c->setData($data);
$c->setFile($file);
$c->view();
// panggil method dari controller
// call_user_func(array($c, $method));
