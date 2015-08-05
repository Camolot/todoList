<?php


  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/Task.php";

  $app = new Silex\Application();

  $app->get("/",function(){
      $test_task = new Task("Get fairies.");
      $another_test_task = new Task("Collect Triforce.");
      $third_task = new Task("Defeat Ganon.");

      $list_of_tasks = array ($test_task, $another_test_task, $third_task);
      $output = "";

      foreach ($list_of_tasks as $task) {
          $output = $output . "<p>" . $task->getDescription() . "</p>";
      }


    return $output;

  });

return $app;




?>
