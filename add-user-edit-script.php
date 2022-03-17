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
          $name = $_POST['name'];
          $email = $_POST['email'];
          $status = $_POST['status'];
          $date_two = $_POST['date_two'];

          $sql = "UPDATE `user` SET `name` = '$name', `email` = '$email', `status` = '$status', `date_modifie` = '$date_two' WHERE id_user = $id";

          #Checking the addition
          if (mysqli_query($mysqli, $sql)) {
            echo "$name successfully edited";
          } else
            echo "ERROR";
        ?>
        <a href="index.php" class="btn btn-primary">Back to main page</a>
        <br>
        <br>
        <a href="view-user.php" class="btn btn-primary">Back to search 'n' edit</a>
      </div>
    </div>

  </body>
</html>