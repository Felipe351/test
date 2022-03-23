<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Course eliminated</title>
  </head>
  <body>

    <div class="container">
      <div class="row">
        <?php
          include "connection.php";

          $id = $_GET['id'] ?? '';
          $sql = "DELETE from `course` WHERE id_course = $id";

          if (mysqli_query($mysqli, $sql)) {
            echo "Course deleted from the system";
          } else
            echo "ERROR";
        ?>
        <a href="index.php" class="btn btn-primary">Back to main page</a>
        <br>
        <br>
        <a href="view-course.php" class="btn btn-primary">Back to Search 'n' Edit page</a>
      </div>
    </div>

  </body>
</html>