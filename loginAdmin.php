<!doctype html>
<html lang="en">
  <head>
    <title>管理者</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="css/reservation.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <header>
          <div class="container py-3">
              <h2>ADMIN USER</h2>
          </div>
      </header>
      <main>
          <div class="container">
              <div class="row">
                  <div class="col-lg-2 visible-lg"></div>
                  <div class="col-lg-8 visible-lg mt-5">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">
                                <form action="actionFile.php" method="post">
                                    <div class="form-group">
                                        <label>Username</label>
                                            <input class="form-control" type="text" name="username">
                                    </div>
                                    <div class="form-group">
                                        <label>password</label>
                                        <input class="form-control" type="password" name="pass">
                                    </div>
                                    <div class="container text-center">
                                        <button class="btn bg-dark text-white text-center" type="submit" name="loginadmin">LOGIN</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-2 visible-lg"></div>
              </div>
          </div>
      </main>
      <footer>
          <div class="container"></div>
      </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>