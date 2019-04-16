<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>pickadate.js demo</title>

<!-- 最新 -->
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/default.css">
<link rel="stylesheet" href="css/default.date.css">
<link rel="stylesheet" href="css/default.time.css">
<!-- クラクシック版 -->
<!-- <link rel="stylesheet" href="assets/css/classic.css">
<link rel="stylesheet" href="assets/css/classic.date.css">
<link rel="stylesheet" href="assets/css/classic.time.css"> -->

<script src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
<script src="js/picker.js"></script>
<script src="js/picker.date.js"></script>
<script src="js/picker.time.js"></script>
<script src="js/legacy.js"></script>
<script src="js/lang-ja.js"></script>  <!-- 日本語化 -->
<script src="js/main.js"></script>

</head>
<body>
  <section class="section">
    <div class="section__block section__block--scoped">
      <h3>pickadate.js 予約ページdemo</h3>                  
      <fieldset class="fieldset fieldset--demo">
        <div class="fieldset__wrapper">
          <label> ■予約日　 </label></br>              
          <input id='date' class="fieldset__input js__datepicker" type="text" placeholder="Try me&hellip;"></br></br>
          <label> ■予約時間　</label></br>            
          <input id='time' class="fieldset__input js__datepicker" type="text" placeholder="Try me&hellip;"></br></br>
          <button id="submit" class="fieldset__button button button--small">予約</button>
        </div>    
        <div id="result"></div>      <!-- ボタン押下の結果を表示する -->   
      </fieldset>
    </div>
  </section>
</body>
</html>
