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

    <?php

    include "connection.php";

    $id = $_GET['id'] ?? '';
    $sql = "SELECT * FROM  user WHERE id_user = $id";

    $data = mysqli_query($mysqli, $sql);
    $line = mysqli_fetch_assoc($data);

    ?>

    <div class="container">
      <div class="row">
        <div class="col">
          
          <h1>Edit it</h1>

          <form action="add-user-edit-script.php" method="POST">
            <div class="mb-3">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" value="<?php echo $line['name']; ?>">
            </div>

            <div class="mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" value="<?php echo $line['email']; ?>">
            </div>

            <div class="mb-3">
              <label for="status">Status</label>
              <input type="text" class="form-control" name="status" value="<?php echo $line['status']; ?>">
            </div>

            <div class="mb-3">
              <label for="date_two">Today's date</label>
              <input type="date" class="form-control" name="date_two" value="<?php echo $line['date_modifie']; ?>">
            </div>

            <div class="mb-3">
              <input type="submit" class="btn btn-success" value="Save it">
              <input type="hidden" name="id" value="<?php echo $line['id_user']; ?>">
            </div>

          </form>

          <a href="view-user.php" class="btn btn-primary">Back to search page</a>
          <a href="index.php" class="btn btn-primary">Back to main page</a>
        </div>
      </div>
    </div>

  </body>
</html>