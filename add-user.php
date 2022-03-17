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

    <div class="container">
      <div class="row">
        <div class="col">
          
          <h1>Fill those blank spaces</h1>

          <!-- blank spaces to fill -->
          <form action="add-user-script.php" method="POST">
            <div class="mb-3">
              <label for="name">Name*</label>
              <input type="text" class="form-control" name="name" required>
            </div>

            <div class="mb-3">
              <label for="email">Email*</label>
              <input type="email" class="form-control" name="email" required>
            </div>

            <div class="mb-3">
              <label for="status">Status</label>
              <input type="text" class="form-control" name="status">
            </div>

            <div class="mb-3">
              <label for="date_one">1st Data</label>
              <input type="date" class="form-control" name="date_one">
            </div>

            <div class="mb-3">
              <label for="date_two">2nd Date</label>
              <input type="date" class="form-control" name="date_two">
            </div>

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