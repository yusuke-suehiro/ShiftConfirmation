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



    <form action="index2.php"  method="get">
      <p>月曜日&emsp;&emsp;&emsp;&emsp;&emsp;
      <input type="checkbox" name="holiday[0]">休み希望の時はこちらにチェックしてください<br><br>
      <input type="checkbox" name="Times[0][]" value="10">10&emsp;
      <input type="checkbox" name="Times[0][]" value="11">11&emsp;
      <input type="checkbox" name="Times[0][]" value="12">12&emsp;
      <input type="checkbox" name="Times[0][]" value="13">13&emsp;
      <input type="checkbox" name="Times[0][]" value="14">14&emsp;
      <input type="checkbox" name="Times[0][]" value="15">15&emsp;
      <input type="checkbox" name="Times[0][]" value="16">16&emsp;
      <input type="checkbox" name="Times[0][]" value="17">17&emsp;
      <input type="checkbox" name="Times[0][]" value="18">18&emsp;
      <input type="checkbox" name="Times[0][]" value="19">19&emsp;
      <input type="checkbox" name="Times[0][]" value="20">20&emsp;
      <input type="checkbox" name="Times[0][]" value="21">21&emsp;
      <input type="checkbox" name="Times[0][]" value="22">22&emsp;
      <input type="checkbox" name="Times[0][]" value="23">23&emsp;
      <p>火曜日&emsp;&emsp;&emsp;&emsp;&emsp;
      <input type="checkbox" name="holiday[1]">休み希望の時はこちらにチェックしてください<br><br>
      <input type="checkbox" name="Times[1][]" value="10">10&emsp;
      <input type="checkbox" name="Times[1][]" value="11">11&emsp;
      <input type="checkbox" name="Times[1][]" value="12">12&emsp;
      <input type="checkbox" name="Times[1][]" value="13">13&emsp;
      <input type="checkbox" name="Times[1][]" value="14">14&emsp;
      <input type="checkbox" name="Times[1][]" value="15">15&emsp;
      <input type="checkbox" name="Times[1][]" value="16">16&emsp;
      <input type="checkbox" name="Times[1][]" value="17">17&emsp;
      <input type="checkbox" name="Times[1][]" value="18">18&emsp;
      <input type="checkbox" name="Times[1][]" value="19">19&emsp;
      <input type="checkbox" name="Times[1][]" value="20">20&emsp;
      <input type="checkbox" name="Times[1][]" value="21">21&emsp;
      <input type="checkbox" name="Times[1][]" value="22">22&emsp;
      <input type="checkbox" name="Times[1][]" value="23">23&emsp;
      <p>水曜日&emsp;&emsp;&emsp;&emsp;&emsp;
      <input type="checkbox" name="holiday[2]">休み希望の時はこちらにチェックしてください<br><br>
      <input type="checkbox" name="Times[2][]" value="10">10&emsp;
      <input type="checkbox" name="Times[2][]" value="11">11&emsp;
      <input type="checkbox" name="Times[2][]" value="12">12&emsp;
      <input type="checkbox" name="Times[2][]" value="13">13&emsp;
      <input type="checkbox" name="Times[2][]" value="14">14&emsp;
      <input type="checkbox" name="Times[2][]" value="15">15&emsp;
      <input type="checkbox" name="Times[2][]" value="16">16&emsp;
      <input type="checkbox" name="Times[2][]" value="17">17&emsp;
      <input type="checkbox" name="Times[2][]" value="18">18&emsp;
      <input type="checkbox" name="Times[2][]" value="19">19&emsp;
      <input type="checkbox" name="Times[2][]" value="20">20&emsp;
      <input type="checkbox" name="Times[2][]" value="21">21&emsp;
      <input type="checkbox" name="Times[2][]" value="22">22&emsp;
      <input type="checkbox" name="Times[2][]" value="23">23&emsp;
      <p>木曜日&emsp;&emsp;&emsp;&emsp;&emsp;
      <input type="checkbox" name="holiday[3]">休み希望の時はこちらにチェックしてください<br><br>
      <input type="checkbox" name="Times[3][]" value="10">10&emsp;
      <input type="checkbox" name="Times[3][]" value="11">11&emsp;
      <input type="checkbox" name="Times[3][]" value="12">12&emsp;
      <input type="checkbox" name="Times[3][]" value="13">13&emsp;
      <input type="checkbox" name="Times[3][]" value="14">14&emsp;
      <input type="checkbox" name="Times[3][]" value="15">15&emsp;
      <input type="checkbox" name="Times[3][]" value="16">16&emsp;
      <input type="checkbox" name="Times[3][]" value="17">17&emsp;
      <input type="checkbox" name="Times[3][]" value="18">18&emsp;
      <input type="checkbox" name="Times[3][]" value="19">19&emsp;
      <input type="checkbox" name="Times[3][]" value="20">20&emsp;
      <input type="checkbox" name="Times[3][]" value="21">21&emsp;
      <input type="checkbox" name="Times[3][]" value="22">22&emsp;
      <input type="checkbox" name="Times[3][]" value="23">23&emsp;
      <p>金曜日&emsp;&emsp;&emsp;&emsp;&emsp;
      <input type="checkbox" name="holiday[4]">休み希望の時はこちらにチェックしてください<br><br>
      <input type="checkbox" name="Times[4][]" value="10">10&emsp;
      <input type="checkbox" name="Times[4][]" value="11">11&emsp;
      <input type="checkbox" name="Times[4][]" value="12">12&emsp;
      <input type="checkbox" name="Times[4][]" value="13">13&emsp;
      <input type="checkbox" name="Times[4][]" value="14">14&emsp;
      <input type="checkbox" name="Times[4][]" value="15">15&emsp;
      <input type="checkbox" name="Times[4][]" value="16">16&emsp;
      <input type="checkbox" name="Times[4][]" value="17">17&emsp;
      <input type="checkbox" name="Times[4][]" value="18">18&emsp;
      <input type="checkbox" name="Times[4][]" value="19">19&emsp;
      <input type="checkbox" name="Times[4][]" value="20">20&emsp;
      <input type="checkbox" name="Times[4][]" value="21">21&emsp;
      <input type="checkbox" name="Times[4][]" value="22">22&emsp;
      <input type="checkbox" name="Times[4][]" value="23">23&emsp;
      <p>土曜日&emsp;&emsp;&emsp;&emsp;&emsp;
      <input type="checkbox" name="holiday[5]">休み希望の時はこちらにチェックしてください<br><br>
      <input type="checkbox" name="Times[5][]" value="10">10&emsp;
      <input type="checkbox" name="Times[5][]" value="11">11&emsp;
      <input type="checkbox" name="Times[5][]" value="12">12&emsp;
      <input type="checkbox" name="Times[5][]" value="13">13&emsp;
      <input type="checkbox" name="Times[5][]" value="14">14&emsp;
      <input type="checkbox" name="Times[5][]" value="15">15&emsp;
      <input type="checkbox" name="Times[5][]" value="16">16&emsp;
      <input type="checkbox" name="Times[5][]" value="17">17&emsp;
      <input type="checkbox" name="Times[5][]" value="18">18&emsp;
      <input type="checkbox" name="Times[5][]" value="19">19&emsp;
      <input type="checkbox" name="Times[5][]" value="20">20&emsp;
      <input type="checkbox" name="Times[5][]" value="21">21&emsp;
      <input type="checkbox" name="Times[5][]" value="22">22&emsp;
      <input type="checkbox" name="Times[5][]" value="23">23&emsp;
      <p>日曜日&emsp;&emsp;&emsp;&emsp;&emsp;
      <input type="checkbox" name="holiday[6]">休み希望の時はこちらにチェックしてください<br><br>
      <input type="checkbox" name="Times[6][]" value="10">10&emsp;
      <input type="checkbox" name="Times[6][]" value="11">11&emsp;
      <input type="checkbox" name="Times[6][]" value="12">12&emsp;
      <input type="checkbox" name="Times[6][]" value="13">13&emsp;
      <input type="checkbox" name="Times[6][]" value="14">14&emsp;
      <input type="checkbox" name="Times[6][]" value="15">15&emsp;
      <input type="checkbox" name="Times[6][]" value="16">16&emsp;
      <input type="checkbox" name="Times[6][]" value="17">17&emsp;
      <input type="checkbox" name="Times[6][]" value="18">18&emsp;
      <input type="checkbox" name="Times[6][]" value="19">19&emsp;
      <input type="checkbox" name="Times[6][]" value="20">20&emsp;
      <input type="checkbox" name="Times[6][]" value="21">21&emsp;
      <input type="checkbox" name="Times[6][]" value="22">22&emsp;
      <input type="checkbox" name="Times[6][]" value="23">23&emsp;

      <input type="submit" value="送信">
    </form>
    <?php
    $Times = $_GET["Times"];
    $Holiday = $_GET["holiday"];
    $YourSche =array("Name","id","Mon","Tue","Wed","Thu","Fri","Sat","Sun");

    for ($day=0;$day<7;$day++) {
      if ($Holiday[$day] == NULL) {
        if ($Times[$day][2] !== NULL) {
          echo "３つ以上チェックしないでください";
        }
        else {
          if ($Times[$day][0] == NULL or $Times[$day][1] == NULL) {
            echo "出勤できる時間を入力してください";
          }
          else {
            //echo $Times[0][0].PHP_EOL;
            //echo $Times[0][1].PHP_EOL;
            $YourSche[$day+2]=$Times[$day][0].PHP_EOL."-- ".$Times[$day][1].PHP_EOL;
            echo $YourSche[$day+2];
          }
        }
      }
      else {
        if ($Times[$day][0] !== NULL ) {
          echo "休み希望の時は時間を入力しないでください";
        }
        else {
          $YourSche[$day+2]="O";
          echo $YourSche[$day+2];
        }
      }
}


        ?>


    </div>

    <div id="tab2_cnt" class="NonActive">






      <br>
      <p class="result_output">結果</p>
      <p class="hint_message"></p>

  </div>
</form>


    <script src="main.js" defer></script>
  </body>
</html>
