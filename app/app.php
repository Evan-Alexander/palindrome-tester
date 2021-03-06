<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Palindrome.php";

    $app = new Silex\Application();
    $app['debug'] = true;
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));


    $app->get("/", function() use ($app){
        return $app['twig']->render('form.html.twig');
    });

    $app->post("/view_results", function() use ($app) {
        $new_palindrome = new Palindrome("borrow or rob");

        $result = $new_palindrome->checkPalindrome();
        return "Hello";
        // return $app['twig']->render('result.html.twig', array('result' => $get_sentence));
    });

    return $app;
