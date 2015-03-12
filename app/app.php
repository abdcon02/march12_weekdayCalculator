<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Weekday.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__."/../views"
    ));

    $app->get("/", function() use($app) {
        return $app['twig']->render('input.twig');
    });

    $app->post("/weekday", function() use($app) {
        $day = new Date;

        $input = ($_POST['day']."-".$_POST['month']."-".$_POST['year']);

        $return = $day->checkWeekday($input);
        return $app['twig']->render('weekday.twig', array('weekday' => $return));
    });

    return $app;

 ?>
