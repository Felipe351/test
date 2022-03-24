<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Add a module</title>
  </head>
  <body>

    <!-- Navigation -->
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="#">Addition Page</a></li>
      </ol>
    </nav>

    <!-- Sending the information to the database -->
    <div class="container">
      <div class="row">
        <?php
          include "connection.php";

          $title = $_POST['title'];
          $description = $_POST['description'];
          $course_id = $_POST['course_title'];
          $date_one = $_POST['date_one'];
          $date_two = $_POST['date_one'];

          $sql = "INSERT INTO `module`(`title`, `desctiption`, `course_id`, `date_create`, `date_modifie`) VALUES ('$title', '$description', '$course_id', '$date_one', '$date_two')";

          #Checking the addition
          if (mysqli_query($mysqli, $sql)) {
            echo "$title is just sucessfully added";
          } else
            echo "ERROR";
        ?>

        <!-- back to home page button -->
        <a href="index.php" class="btn btn-primary">Back to main page</a>
        <!-- back to home page button -->
        <a href="add-module.php" class="btn btn-primary">Add a new module</a>
      </div>
    </div>

  </body>
</html>