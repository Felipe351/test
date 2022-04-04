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

    <div class="container">
      <div class="row">
        <?php
          include "connection.php";

          $id = $_POST['id'];
          $title = $_POST['title'];
          $description = $_POST['description'];
          $module_id = $_POST['title_module'];
          $date_two = $_POST['date_two'];

          $sql = "UPDATE `content` SET `title` = '$title', `text` = '$description', `module_id` = '$module_id', `date_modifie` = '$date_two' WHERE id_content = $id";

          #Checking the addition
          if (mysqli_query($mysqli, $sql)) {
            echo "$title successfully edited";
          } else
            echo "ERROR";
        ?>
        <a href="index.php" class="btn btn-primary">Back to main page</a>
        <br>
        <br>
        <a href="view-content.php" class="btn btn-primary">Back to search 'n' edit</a>
      </div>
    </div>

  </body>
</html>