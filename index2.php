<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>従業員限定ページ</title>
    <link rel="stylesheet" href="stylesheet.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.14.2/xlsx.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/1.3.8/FileSaver.min.js"></script>

  </head>
  <body>

    <h1 class="title">ようこそ！</h1>
    <div id="message"></div>

    <form id="form1" action="#">
    <ul class="tab_test">
    <li id="tab1_test" class="Active">クルー向け</li>
    <li id="tab2_test" class="NonActive">責任者向け</li>
    </ul>
    <div class="tab_cnt">
    <div id="tab1_cnt" class="Active">
    <a href="./file/20200702_suehiro.pdf" download="20200702_suehiro.pdf">PDFファイル</a>
    <p>OKマーク用フォーム<br>氏名</p>



    <input type="text" id="input_message_name" value=""></p>
    <input type="checkbox" id="Monday" value="Monday">月曜日<br>
    <input type="checkbox" id="Tuesday" value="Tuesday">火曜日<br>
    <input type="checkbox" id="Wednesday" value="Wednesday">水曜日<br>
    <input type="checkbox" id="Thursday" value="Thursday">木曜日<br>
    <input type="checkbox" id="Friday" value="Friday">金曜日<br>
    <input type="checkbox" id="Saturday" value="Saturday">土曜日<br>
    <input type="checkbox" id="Sunday" value="Sunday">日曜日<br>
    <input type="button" id="button" onclick="func4()" value="完了">

    </div>

    <div id="tab2_cnt" class="NonActive">

      <form action="index2.php" enctype="multipart/form-data" method="POST">
          <label>画像/動画アップロード</label>

          <input type="file" name="fname" accept=".pdf" required>
          <br>
          <input type="submit" value="アップロード">

      </form>

      <?php
      if (!empty($_FILES)) {//アップロードファイルがある時の処理
          if(is_uploaded_file($_FILES["fname"]["tmp_name"])){

            if(move_uploaded_file($_FILES["fname"]["tmp_name"], "/Users/suehiroyusuke/Documents/GitHub/ShiftConfirmation/".basename($_FILES['fname']['name']))){
              echo "アップロード完了です。";
            }else{
              echo "アップロードに失敗しました。";
            }

          }

          /*$uploaddir = '/Users/suehiroyusuke/Documents/GitHub/ShiftConfirmation/';
          $upload = $uploaddir . basename($_FILES['fname']['name']);
          move_uploaded_file($_FILES['fname']['tmp'], $upload);
          echo "完了";
      */
      }
      else {
        echo "ファイルを選択してください";
      }
          ?>


      <br>
      <p class="result_output">結果</p>
      <p class="hint_message"></p>

  </div>
</form>


    <script src="main.js" defer></script>
  </body>
</html>
