<?php
/*
 * Copyright (c) 2014 MilloLab
 * Distributed under MIT License
 * (see README for details)
 */

// Autoloader
require_once('vendor/autoload.php');

$templatesDir = "View/";
$fileToRender = "home.twig";
$twigVars = array();

Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem($templatesDir);

$twig_options = array();
$twig_options['auto_reload'] = true;

// Create twig object
$twig = new Twig_Environment($loader, $twig_options);
$template = $twig->loadTemplate($fileToRender);
echo $template->render($twigVars);
