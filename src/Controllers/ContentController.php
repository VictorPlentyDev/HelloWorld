<?php
/**
 * Created by PhpStorm.
 * User: externaldev
 * Date: 31/07/2018
 * Time: 15:01
 */

namespace HelloWorld\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

class ContentController extends Controller
{
    public function sayHello(Twig $twig): string
    {
        return $twig->render('HelloWorld::content.hello');
    }

    public function secondHello(Twig $twig): string
    {
        return $twig->render('HelloWorld::content.second');
    }
}