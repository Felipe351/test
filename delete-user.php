<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>User eliminated</title>
  </head>
  <body>

    <div class="container">
      <div class="row">
        <?php
          include "connection.php";

          $id = $_GET['id'] ?? '';
          $sql = "DELETE from `user` WHERE id_user = $id";

          if (mysqli_query($mysqli, $sql)) {
            echo "User deleted from the system";
          } else
            echo "ERROR";
        ?>
        <a href="index.php" class="btn btn-primary">Back to main page</a>
      </div>
    </div>

  </body>
</html>