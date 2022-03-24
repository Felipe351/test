<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Search & Edit module</title>
  </head>
  <body>

    <?php
      $view = $_POST['search'] ?? '';
      
      include "connection.php";

      $sql = "SELECT * FROM module WHERE title LIKE '%$view%'";

      $datas = mysqli_query($mysqli, $sql);
      ?>
    
    <div class="container">
      <div class="row">
        <div class="col">
          
          <h1>Search or Edit</h1>

          <nav class="navbar navbar-light bg-light">
            <form class="form-inline" action="view-module.php" method="POST">
              <input class="form-control mr-sm-2" type="search" placeholder="Type the title" aria-label="Search" name="search" autofocus>
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </nav>

          <!-- Table to organize -->
          <table class="table table-hover table-dark">
            <thead>
              <tr>
                <!-- Columns with the course datas -->
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Last update</th>

                <!-- Button to edit the course's data or delet it -->
                <th scope="col">Options</th>
              </tr>
            </thead>
            <tbody>

              <!-- Taking the information from the database to fit in the columns -->
              <?php
                while ($line = mysqli_fetch_assoc($datas)) {
                  $id_module = $line['id_module'];
                  $title = $line['title'];
                  $description = $line['desctiption'];
                  $date = $line['date_modifie'];
                  
                  echo "<tr>
                    <th scope='row'>$title</th>
                    <td>$description</td>
                    <td>$date</td>
                    
                    <td width='150px'>
                      <a href='edit-module.php?id=$id_module' class='btn btn-success btn-sm'>Edit it</a>
                      <a href='delete-module.php?id=$id_module' class='btn btn-danger btn-sm'>Delet it</a>
                    </td>
                  </tr>";
                }
              ?>
              
            </tbody>
          </table>

          <!-- back to home page button -->
          <a href="index.php" class="btn btn-primary">Back to main page</a>
        </div>
      </div>
    </div>

  </body>
</html>