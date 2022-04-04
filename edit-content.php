<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Navigation -->
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="#">Edition Page</a></li>
      </ol>
    </nav>
    
    <title>Data Edition</title>
  </head>
  <body>

    <?php

    include "connection.php";

    $id = $_GET['id'] ?? '';
    $sql = "SELECT * FROM  content WHERE id_content = $id";

    $data = mysqli_query($mysqli, $sql);
    $line = mysqli_fetch_assoc($data);

    ?>

    <div class="container">
      <div class="row">
        <div class="col">
          
          <h1>Edit it</h1>

          <form action="edit-content-script.php" method="POST">
            <div class="mb-3">
              <label for="title">Title</label>
              <input type="text" class="form-control" name="title" value="<?php echo $line['title']; ?>">
            </div>

            <div class="mb-3">
              <label for="description">Description Text</label>
              <input type="text" class="form-control" name="description" value="<?php echo $line['text']; ?>">
            </div>

            <div class="mb-3">
              <label for="date_two">Today's date</label>
              <input type="date" class="form-control" name="date_two" value="<?php echo $line['date_modifie']; ?>">
            </div>

            <!-- FK -->
            <select class="form-select" aria-label="Default select example" name="title_module">
              <option value="it" selected>Select a course</option>

              <?php

                require "connection.php";

                $sql = "select title, id_module from module;";
                $result = mysqli_query($mysqli, $sql);
                

                while ($datas = mysqli_fetch_assoc($result)){
                  $id = $datas['id_module'];
                  $title = $datas['title'];

                  echo "
                    <option value='$id'>$title</option>
                  ";
                }
              ?>
            </select>

            <div class="mb-3">
              <input type="submit" class="btn btn-success" value="Save it">
              <input type="hidden" name="id" value="<?php echo $line['id_content']; ?>">
            </div>

          </form>

          <a href="view-content.php" class="btn btn-primary">Back to search page</a>
          <a href="index.php" class="btn btn-primary">Back to main page</a>
        </div>
      </div>
    </div>

  </body>
</html>