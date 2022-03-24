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
    $sql = "SELECT * FROM  module WHERE id_module = $id";

    $data = mysqli_query($mysqli, $sql);
    $line = mysqli_fetch_assoc($data);

    ?>

    <div class="container">
      <div class="row">
        <div class="col">
          
          <h1>Edit it</h1>

          <form action="edit-module-script.php" method="POST">
            <div class="mb-3">
              <label for="title">Title</label>
              <input type="text" class="form-control" name="title" value="<?php echo $line['title']; ?>">
            </div>

            <div class="mb-3">
              <label for="description">Description</label>
              <input type="text" class="form-control" name="description" value="<?php echo $line['desctiption']; ?>">
            </div>

            <div class="mb-3">
              <label for="date_two">Today's date</label>
              <input type="date" class="form-control" name="date_two" value="<?php echo $line['date_modifie']; ?>">
            </div>

            <!-- FK -->
            <select class="form-select" aria-label="Default select example" name="title_c">
              <option value="it" selected>Select a course</option>

              <?php

                require "connection.php";

                $sql = "select title, id_course from course;";
                $result = mysqli_query($mysqli, $sql);
                

                while ($datas = mysqli_fetch_assoc($result)){
                  $id = $datas['id_course'];
                  $title = $datas['title'];

                  echo "
                    <option value='$id'>$title</option>
                  ";
                }
              ?>
            </select>

            <div class="mb-3">
              <input type="submit" class="btn btn-success" value="Save it">
              <input type="hidden" name="id" value="<?php echo $line['id_module']; ?>">
            </div>

          </form>

          <a href="view-module.php" class="btn btn-primary">Back to search page</a>
          <a href="index.php" class="btn btn-primary">Back to main page</a>
        </div>
      </div>
    </div>

  </body>
</html>