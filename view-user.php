<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Search & Edit users</title>
  </head>
  <body>

    <?php
      $view = $_POST['search'] ?? '';
      
      include "connection.php";

      $sql = "SELECT * FROM user WHERE name LIKE '%$view%'";

      $datas = mysqli_query($mysqli, $sql);
      ?>
    
    <div class="container">
      <div class="row">
        <div class="col">
          
          <h1>Search or Edit</h1>

          <nav class="navbar navbar-light bg-light">
            <form class="form-inline" action="view-user.php" method="POST">
              <input class="form-control mr-sm-2" type="search" placeholder="Type the name" aria-label="Search" name="search" autofocus>
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </nav>

          <!-- Table to organize -->
          <table class="table table-hover table-dark">
            <thead>
              <tr>
                <!-- Columns with the user datas -->
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Status</th>
                <th scope="col">Date of creation</th>
                <th scope="col">Last modification</th>

                <!-- Button to edit the user's data or delet him -->
                <th scope="col">Functions</th>
              </tr>
            </thead>
            <tbody>

              <!-- Taking the information from the database to fit in the columns -->
              <?php
                while ($line = mysqli_fetch_assoc($datas)) {
                  $id_user = $line['id_user'];
                  $name = $line['name'];
                  $email = $line['email'];
                  $status = $line['status'];
                  $date_one = $line['date_creat'];
                  $date_two = $line['date_modifie'];

                  echo "<tr>
                    <th scope='row'>$name</th>
                    <td>$email</td>
                    <td>$status</td>
                    <td>$date_one</td>
                    <td>$date_two</td>

                    <td width='150px'>
                      <a href='add-user-edit.php?id=$id_user' class='btn btn-success btn-sm'>Edit it</a>
                      <a href='delete-user.php?id=$id_user' class='btn btn-danger btn-sm'>Delet it</a>
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