<?php
    ini_set("display_errors", 1);
    error_reporting(E_ALL);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>reservation</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
     <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <!-- <script type="text/javascript">
    $.ajax({
        success : function(response){
            alert('成功');
        },
        error: function(){
            //通信失敗時の処
            alert('通信失敗');
        }
    });
    </script> -->
    <!-- Bootstrap CSS -->
    <link href="css/reservation.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <header>
          <div class="container py-3">
            <h2><a href="index.php" class="text-white">愛＆D歯科</a></h2>
          </div>
      </header>
      <div class="row">
        <div class="col-lg-4 visible-lg"></div>
        <div class="col-lg-4">
            <div class="container">
                <form method="post" class="text-center mt-5">
                    <div class="form-group">
                        <label>Date:</label>
                        <input type="date" class="form-control date_schedule" name="date_schedule" id="date_schedule">
                    </div>
                    <div class="text-center mt-3">
                        <button class="btn bg-dark text-white" name="date_chose" id="date_chose">chose</button>
                    <script>
                        $(function() {
                            $('#date_chose').click(function() {
                                $.post('actionReservation.php',{
                                    date: $('#date_schedule').val()
                                },function(time) {
                                    $('#result').html(time);
                                });
                            });
                        });
                    </script>
                    </div>
                    <!-- <div class="form-group mt-4">
                        <label>Time:</label>
                        <select class="form-control time-schedule" id="time-schedule" name="time_schedule">
                            <option></option>
                        </select>
                    </div>
                    <div class="text-center mt-4">
                        <button class="btn bg-dark text-white" name="reservation">submit</button>
                    </div> -->
                </form>
            </div>
        </div>
        <div class="col-lg-4 visible-lg"></div>
      </div>
      <footer class="mt-5">
          <div class="container"></div>
      </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<!-- SELECT * FROM schedule WHERE date = '$date'; -->