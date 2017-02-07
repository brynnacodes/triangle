<?php
  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/triangle.php";

  $app = new Silex\Application();

  $app->get("/", function() {
    return
    "
    <!DOCTYPE html>
    <html>
      <head>
        <meta charset='utf-8'>
        <title></title>
      </head>
      <body>
        <form action='/result'>
          <input type='number' name='side1' id='side1' value=''></input>
          <input type='number' name='side2' id='side2' value=''></input>
          <input type='number' name='side3' id='side3' value=''></input>
          <button type='submit' name='button'>What kind of dog is this?</button>
        </form>
      </body>
    </html>
    ";
  });

  $app->get("/result",function() {
    $myNumber1 = $_GET['side1'];
    $myNumber2 = $_GET['side2'];
    $myNumber3 = $_GET['side3'];

    $myTriangle = new Triangle($myNumber1,$myNumber2,$myNumber3);
    return $myTriangle->calculate();

  });
  return $app;
 ?>
