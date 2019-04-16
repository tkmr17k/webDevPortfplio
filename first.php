<?php
    // require_once "SQLstatements.php";
    try {
        $dsn = 'mysql:host=localhost;dbname=reservation;charset=utf8';
        $user = 'root'; //root
        $pass = 'root'; //root
        $pdo = new PDO($dsn, $user, $pass, array(PDO::ATTR_EMULATE_PREPARES => false));
      } catch (Exception $e) {
        exit('データベース接続失敗'.$e->getMessage());
      }
    ini_set("display_errors", 1);
    error_reporting(E_ALL);
    $sql = "SELECT * FROM time";
    $stmt = $pdo->query($sql);
    $maker_list = array();
    while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){
    $maker_list[$row['time_id']] = $row['time'];
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>reservation</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script type="text/javascript">
      $(function(){
        //selectタグ（親） が変更された場合
        $('date_schedule').on('change', function(){
          var maker_val = $(this).val();

          //maker_val値 を select.php へ渡す
          $.ajax({
            url: "select.php",
            type: "POST",
            dataType: 'json',
            data: {
              maker_id: maker_val
            }
          })
          .done(function(data){
            //selectタグ（子） の option値 を一旦削除
            $('.time_schedule option').remove();
            //select.php から戻って来た data の値をそれそれ optionタグ として生成し、
            // .car_model に optionタグ を追加する
            $.each(data, function(id, name){
              $('.time_schedule').append($('<option>').text(name).attr('value', id));
            });
          })
          .fail(function(){
            console.log("失敗");
          });

        });
      });
    </script>

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
                <form action="" class="text-center mt-5">
                    <div class="form-group">
                        <label>Date:</label>
                        <input type="date" class="form-control date_schedule" name="date_schedule">
                    </div>
                    <div class="form-group mt-4">
                        <label>Time:</label>
                        <select class="form-control time-schedule" name="time_scheduler">
                            <option>Chose the time</option>
                            <?php foreach($maker_list as $key => $time){
                                echo '<option name="" value="'.$key.'">'.$time.'</option>';
                            }?>
                        </select>
                    </div>
                    <div class="text-center mt-4">
                        <button class="btn bg-dark text-white">submit</button>
                    </div>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<!-- SELECT * FROM schedule WHERE date = '$date'; -->