<?php

require_once __DIR__ ."/../vendor/autoload.php";
require_once __DIR__ ."/../src/Cd.php";


//*****************************************************Starts new Session*******************************************************************//

session_start();
//*****************Checks to see if  cd store(which is the key) array in this session is empty*********************************************//
//*****************And if it is emty it makes an array and assigns it to the key cd_store ************************************************//

if(empty($_SESSION['cd_store'])){
 $_SESSION['cd_store'] = array();
}
//*****************Makes a new Silex Application assigns it to the variable $app*********************************************//
$app = new Silex\Application();


//*****************Makes registers twig and makes an array and assigns the directory views to the kwy twig.path*****************************//
 $app->register (new Silex\Provider\TwigServiceProvider(), array(
        'twig.path'=> __DIR__.'/../views'
    ));

//*****************Makes home page which gets all from cd(getall() method which store everything in the method.*****************************//

$app->get("/",  function() use ($app){   

   return $app['twig']->render("home.php", array('cds'=> CD::getAll()));

});

//*****************Calls form page to add new cds*****************************//
$app->get("/enter_form",  function() use ($app){   

   return $app['twig']->render("cd_form.php");

});

//*****************Calls page entered and diplays what the user entered****************************//
$app->post("/entered",  function() use ($app){ 

   $cd=new CD($_POST['title'],$_POST['artist'],$_POST['image'],$_POST['price']); 
   $cd->save();

   return $app['twig']->render("cd_entered.php", array("cd"=> $cd));

});
//*****************Clears session array ****************************//
$app->post("/delete", function() use ($app){

            return $app['twig']->render('/delete.php', array('delete'=>CD::deleteAll()));

    });

$app->get("/search", function() use ($app){

            return $app['twig']->render('/search.php');

    });



$app->get("/search_results", function() use ($app){        
        $cd_search_results= array();

        $cds=CD::getAll();

        foreach($cds as $cd)
        {
          $artist= $cd->getArtist();


         if(mb_stripos($artist, $_GET['search']))
         {
            
            array_push($cd_search_results, $cd);
            

           }
    }


            return $app['twig']->render('/search_results.php', array('cds' => $cd_search_results));

    });




//Returns $app
return $app;









?>