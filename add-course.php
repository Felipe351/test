<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Add a course</title>
  </head>
  <body>

    <!-- Navigation -->
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="#">Addition Page</a></li>
      </ol>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col">

          <!-- Connection to the database to register the Foreign Key -->
          <?php
          require "connection.php";

          $sql = "select name, id_user from user;";
          $result = mysqli_query($mysqli, $sql);
          ?>
          
          <h1>Fill those blank spaces</h1>

          <!-- blank spaces to fill -->
          <form action="add-course-script.php" method="POST">
            <div class="mb-3">
              <label for="title">Title*</label>
              <input type="text" class="form-control" name="title" required>
            </div>

            <div class="mb-3">
              <label for="description">Description*</label>
              <input type="text" class="form-control" name="description" required>
            </div>

            <div class="mb-3">
              <label for="date_one">Today's date</label>
              <input type="date" class="form-control" name="date_one">
            </div>

            <!-- Foreign Key -->
            <select class="form-select" aria-label="Default select example" name="responsible_user">
              <option value="it" selected>Select an user</option>

              <?php
                while ($datas = mysqli_fetch_assoc($result)){
                  $id = $datas['id_user'];
                  $name = $datas['name'];

                  echo "
                    <option value='$id'>$name</option>
                  ";
                }
              ?>
            </select>

            <!-- button to send datas to the database -->
            <div class="mb-3">
              <input type="submit" class="btn btn-success">
            </div>

          </form>

          <!-- back to home page button -->
          <a href="index.php" class="btn btn-primary">Back to main page</a>
        </div>
      </div>
    </div>

  </body>
</html>