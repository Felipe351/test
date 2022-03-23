<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Data Edition</title>
  </head>
  <body>

    <div class="container">
      <div class="row">
        <?php
          include "connection.php";

          $id = $_POST['id'];
          $title = $_POST['title'];
          $description = $_POST['description'];
          $user_id = $_POST['responsible_user'];
          $date_two = $_POST['date_two'];

          $sql = "UPDATE `course` SET `title` = '$title', `description` = '$description', `user_id` = '$user_id', `date_modifie` = '$date_two' WHERE id_course = $id";

          #Checking the addition
          if (mysqli_query($mysqli, $sql)) {
            echo "$title successfully edited";
          } else
            echo "ERROR";
        ?>
        <a href="index.php" class="btn btn-primary">Back to main page</a>
        <br>
        <br>
        <a href="view-course.php" class="btn btn-primary">Back to search 'n' edit</a>
      </div>
    </div>

  </body>
</html>