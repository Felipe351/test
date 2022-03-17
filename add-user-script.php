<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Add a user</title>
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

          $name = $_POST['name'];
          $email = $_POST['email'];
          $status = $_POST['status'];
          $date_one = $_POST['date_one'];
          $date_two = $_POST['date_two'];

          $sql = "INSERT INTO `user`(`name`, `email`, `status`, `date_creat`, `date_modifie`) VALUES ('$name', '$email', '$status', '$date_one', '$date_two')";

          if (mysqli_query($mysqli, $sql)) {
            echo "$name is just sucessfully added";
          } else
            echo "ERROR";
        ?>

        <!-- back to home page button -->
        <a href="index.php" class="btn btn-primary">Back to main page</a>
      </div>
    </div>

  </body>
</html>