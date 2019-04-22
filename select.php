<?php

// //直接のページ遷移を阻止
//   $request = isset($_SERVER['HTTP_X_REQUESTED_WITH']) ? strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) : '';
//   if($request !== 'xmlhttprequest') exit;
//   //DBへの接続
//   //本来は db_connect関数 を作成して、DRYにした方が良いです。
//   try {
//     $dsn = 'mysql:host=localhost;dbname=reservation;charset=utf8';
//     $user = 'root';
//     $pass = 'root';
//     $pdo = new PDO($dsn, $user, $pass, array(PDO::ATTR_EMULATE_PREPARES => false));
//   }
//   catch (Exception $e) {
//     exit('データベース接続失敗'.$e->getMessage());
//   }
//   //Ajaxで渡ってきた値をもとに modelテーブル から該当する model を抽出
//   $date_schedule = $_POST['date_schedule'];
// //   $sql = "SELECT time_id FROM time WHERE time_id NOT IN (SELECT time_id FROM schedule WHERE date = '$date_schedule')";
//   $sql = "SELECT time_id FROM time WHERE NOT EXISTS(SELECT time_id FROM schedule WHERE date = '$date_schedule')";
//   $stmt=$pdo->prepare($sql);
//   $stmt->bindValue(':time_id', (int)$time, PDO::PARAM_INT);
//   $stmt->execute();

//   //抽出された値を $model_list配列 に格納
//   $model_list = array();
//   while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){
//     $model_list[$row['time_id']] = $row['time'];
//   }
//   header('Content-Type: application/json');
//   //json形式で index.php へバックする
//   echo json_encode($model_list);
 ?>
 <option>Test</option>
 <option>Test</option>
 <option>Test</option>
 <option>Test</option>
 
 <option>Chose the time</option>
<?php foreach($maker_list as $key => $time){
    echo '<option name="" value="'.$key.'">'.$time.'</option>';
}?>