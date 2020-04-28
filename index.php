<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>PHP</title>
    <style media="screen">
      th, td{
        color: black;
      }
      small,i,b,.xdebug-var-dump{
        color: white;
      }
    </style>
  </head>
  <body style="background: #333; color: white">

    <?php
      echo '<div class="jumbotron" style="color: #333;">
        <h1>Demonstrating basic PHP functions from todays lession</h1>
      </div>';
    ?>

    <div class="container">

      <form class="form-group" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <label for="enterText">Write something</label>
        <input type="text" name="enterText" class="form-control" id="enterText" aria-describedby="emailHelp" placeholder="Enter text here" autocomplete="off">
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

      <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $text = $_POST['enterText'];
            if (empty($text)) {
              echo "You need to enter something";
            } else {
              echo $text;
            }
        }

       echo '<br><br><br><br>';

       echo '<h2>String and Number Examples:</h2>';

       define("defineExample", "This is an example of a constant", false);
       print '<br>' . defineExample;

       $stringExample = 'This is a normal PHP string';
       echo '<br><br>' . $stringExample;
       print '<br><br> <h5>This is what a var_dump looks like:</h5>';
       var_dump($stringExample);

       echo '<br>';

       $arrayExample = array("This ", "Is ", "An ", "Array ", "Example  ");
       print '<h5>This is what an array var_dump looks like:</h5>';
       var_dump($arrayExample);
       echo $arrayExample[0] . $arrayExample[1] . $arrayExample[2] . $arrayExample[3] . $arrayExample[4];

       echo '<br><br>';

       print '<h5>This is what an integer looks like:</h5>';
       $integerExample = 2020;
       echo $integerExample;
      ?>
    </div> <!-- end of container -->

  </body>
</html>
