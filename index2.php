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


    <?php
    date_default_timezone_set('Asia/Tokyo');
    $Nowdate=0;

    if (date('w') == 1) {
      echo date("Y/m/d",strtotime('+2 week Monday'))." 週<br/>";
      $Nowdate=date("Ymd",strtotime('+2 week Monday'));

    }
    else {
      echo date("Y/m/d",strtotime('+2 week Monday'))." 週<br/>";
      $Nowdate=date("Ymd",strtotime('+2 week Monday'));

    }

    ?>



    <form action="index2.php"  method="get">
      <p>OKマーク用フォーム<br><br>
        「注意事項」<br>
        ・氏名にはスペースを入れない<br>
        ・従業員コードは大文字小文字を区別する<br>
        ・休み希望の時はチェックは指定の箇所のみチェックする<br>
        ・出勤希望の時はイン時間と上がる時間の2つチェックする<br>
        (12時から17時まで出勤できる場合：12と17にチェックする)

        <br><br>氏名&emsp;&emsp;&emsp;&emsp;
      <input type="text" name="Name"><br>従業員コード
      <input type="text" name="Code"><br><br>
      <p>月曜日<br><br>
      <input type="checkbox" name="NoChange[0]">変更がない時はこちらにチェックしてください<br><br>
      <input type="checkbox" name="holiday[0]">休み希望の時はこちらにチェックしてください<br><br>
      <input type="checkbox" name="Times[0][]" value="10">10&emsp;
      <input type="checkbox" name="Times[0][]" value="11">11&emsp;
      <input type="checkbox" name="Times[0][]" value="12">12&emsp;
      <input type="checkbox" name="Times[0][]" value="13">13&emsp;
      <input type="checkbox" name="Times[0][]" value="14">14&emsp;
      <input type="checkbox" name="Times[0][]" value="15">15&emsp;
      <input type="checkbox" name="Times[0][]" value="16">16&emsp;</br>
      <input type="checkbox" name="Times[0][]" value="17">17&emsp;
      <input type="checkbox" name="Times[0][]" value="18">18&emsp;
      <input type="checkbox" name="Times[0][]" value="19">19&emsp;
      <input type="checkbox" name="Times[0][]" value="20">20&emsp;
      <input type="checkbox" name="Times[0][]" value="21">21&emsp;
      <input type="checkbox" name="Times[0][]" value="22">22&emsp;
      <input type="checkbox" name="Times[0][]" value="23">23&emsp;
      <p></br>火曜日<br><br>
      <input type="checkbox" name="NoChange[1]">変更がない時はこちらにチェックしてください<br><br>
      <input type="checkbox" name="holiday[1]">休み希望の時はこちらにチェックしてください<br><br>
      <input type="checkbox" name="Times[1][]" value="10">10&emsp;
      <input type="checkbox" name="Times[1][]" value="11">11&emsp;
      <input type="checkbox" name="Times[1][]" value="12">12&emsp;
      <input type="checkbox" name="Times[1][]" value="13">13&emsp;
      <input type="checkbox" name="Times[1][]" value="14">14&emsp;
      <input type="checkbox" name="Times[1][]" value="15">15&emsp;
      <input type="checkbox" name="Times[1][]" value="16">16&emsp;</br>
      <input type="checkbox" name="Times[1][]" value="17">17&emsp;
      <input type="checkbox" name="Times[1][]" value="18">18&emsp;
      <input type="checkbox" name="Times[1][]" value="19">19&emsp;
      <input type="checkbox" name="Times[1][]" value="20">20&emsp;
      <input type="checkbox" name="Times[1][]" value="21">21&emsp;
      <input type="checkbox" name="Times[1][]" value="22">22&emsp;
      <input type="checkbox" name="Times[1][]" value="23">23&emsp;
      <p></br>水曜日<br><br>
      <input type="checkbox" name="NoChange[2]">変更がない時はこちらにチェックしてください<br><br>
<input type="checkbox" name="holiday[2]">休み希望の時はこちらにチェックしてください<br><br>
      <input type="checkbox" name="Times[2][]" value="10">10&emsp;
      <input type="checkbox" name="Times[2][]" value="11">11&emsp;
      <input type="checkbox" name="Times[2][]" value="12">12&emsp;
      <input type="checkbox" name="Times[2][]" value="13">13&emsp;
      <input type="checkbox" name="Times[2][]" value="14">14&emsp;
      <input type="checkbox" name="Times[2][]" value="15">15&emsp;
      <input type="checkbox" name="Times[2][]" value="16">16&emsp;</br>
      <input type="checkbox" name="Times[2][]" value="17">17&emsp;
      <input type="checkbox" name="Times[2][]" value="18">18&emsp;
      <input type="checkbox" name="Times[2][]" value="19">19&emsp;
      <input type="checkbox" name="Times[2][]" value="20">20&emsp;
      <input type="checkbox" name="Times[2][]" value="21">21&emsp;
      <input type="checkbox" name="Times[2][]" value="22">22&emsp;
      <input type="checkbox" name="Times[2][]" value="23">23&emsp;
      <p></br>木曜日<br><br>
      <input type="checkbox" name="NoChange[3]">変更がない時はこちらにチェックしてください<br><br>
<input type="checkbox" name="holiday[3]">休み希望の時はこちらにチェックしてください<br><br>
      <input type="checkbox" name="Times[3][]" value="10">10&emsp;
      <input type="checkbox" name="Times[3][]" value="11">11&emsp;
      <input type="checkbox" name="Times[3][]" value="12">12&emsp;
      <input type="checkbox" name="Times[3][]" value="13">13&emsp;
      <input type="checkbox" name="Times[3][]" value="14">14&emsp;
      <input type="checkbox" name="Times[3][]" value="15">15&emsp;
      <input type="checkbox" name="Times[3][]" value="16">16&emsp;</br>
      <input type="checkbox" name="Times[3][]" value="17">17&emsp;
      <input type="checkbox" name="Times[3][]" value="18">18&emsp;
      <input type="checkbox" name="Times[3][]" value="19">19&emsp;
      <input type="checkbox" name="Times[3][]" value="20">20&emsp;
      <input type="checkbox" name="Times[3][]" value="21">21&emsp;
      <input type="checkbox" name="Times[3][]" value="22">22&emsp;
      <input type="checkbox" name="Times[3][]" value="23">23&emsp;
      <p></br>金曜日<br><br>
      <input type="checkbox" name="NoChange[4]">変更がない時はこちらにチェックしてください<br><br>
<input type="checkbox" name="holiday[4]">休み希望の時はこちらにチェックしてください<br><br>
      <input type="checkbox" name="Times[4][]" value="10">10&emsp;
      <input type="checkbox" name="Times[4][]" value="11">11&emsp;
      <input type="checkbox" name="Times[4][]" value="12">12&emsp;
      <input type="checkbox" name="Times[4][]" value="13">13&emsp;
      <input type="checkbox" name="Times[4][]" value="14">14&emsp;
      <input type="checkbox" name="Times[4][]" value="15">15&emsp;
      <input type="checkbox" name="Times[4][]" value="16">16&emsp;</br>
      <input type="checkbox" name="Times[4][]" value="17">17&emsp;
      <input type="checkbox" name="Times[4][]" value="18">18&emsp;
      <input type="checkbox" name="Times[4][]" value="19">19&emsp;
      <input type="checkbox" name="Times[4][]" value="20">20&emsp;
      <input type="checkbox" name="Times[4][]" value="21">21&emsp;
      <input type="checkbox" name="Times[4][]" value="22">22&emsp;
      <input type="checkbox" name="Times[4][]" value="23">23&emsp;
      <p></br>土曜日<br><br>
      <input type="checkbox" name="NoChange[5]">変更がない時はこちらにチェックしてください<br><br>
<input type="checkbox" name="holiday[5]">休み希望の時はこちらにチェックしてください<br><br>
      <input type="checkbox" name="Times[5][]" value="10">10&emsp;
      <input type="checkbox" name="Times[5][]" value="11">11&emsp;
      <input type="checkbox" name="Times[5][]" value="12">12&emsp;
      <input type="checkbox" name="Times[5][]" value="13">13&emsp;
      <input type="checkbox" name="Times[5][]" value="14">14&emsp;
      <input type="checkbox" name="Times[5][]" value="15">15&emsp;
      <input type="checkbox" name="Times[5][]" value="16">16&emsp;</br>
      <input type="checkbox" name="Times[5][]" value="17">17&emsp;
      <input type="checkbox" name="Times[5][]" value="18">18&emsp;
      <input type="checkbox" name="Times[5][]" value="19">19&emsp;
      <input type="checkbox" name="Times[5][]" value="20">20&emsp;
      <input type="checkbox" name="Times[5][]" value="21">21&emsp;
      <input type="checkbox" name="Times[5][]" value="22">22&emsp;
      <input type="checkbox" name="Times[5][]" value="23">23&emsp;
      <p></br>日曜日<br><br>
      <input type="checkbox" name="NoChange[6]">変更がない時はこちらにチェックしてください<br><br>
<input type="checkbox" name="holiday[6]">休み希望の時はこちらにチェックしてください<br><br>
      <input type="checkbox" name="Times[6][]" value="10">10&emsp;
      <input type="checkbox" name="Times[6][]" value="11">11&emsp;
      <input type="checkbox" name="Times[6][]" value="12">12&emsp;
      <input type="checkbox" name="Times[6][]" value="13">13&emsp;
      <input type="checkbox" name="Times[6][]" value="14">14&emsp;
      <input type="checkbox" name="Times[6][]" value="15">15&emsp;
      <input type="checkbox" name="Times[6][]" value="16">16&emsp;</br>
      <input type="checkbox" name="Times[6][]" value="17">17&emsp;
      <input type="checkbox" name="Times[6][]" value="18">18&emsp;
      <input type="checkbox" name="Times[6][]" value="19">19&emsp;
      <input type="checkbox" name="Times[6][]" value="20">20&emsp;
      <input type="checkbox" name="Times[6][]" value="21">21&emsp;
      <input type="checkbox" name="Times[6][]" value="22">22&emsp;
      <input type="checkbox" name="Times[6][]" value="23">23&emsp;

      <p></br><input type="submit" value="送信"></br></br>
    </form>
    <?php

    $Times = $_GET["Times"];
    $Holiday = $_GET["holiday"];
    $Name=$_GET["Name"];
    $Code=$_GET["Code"];
    $Change=$_GET["NoChange"];
    $YourSche =array("Name","id","Mon","Tue","Wed","Thu","Fri","Sat","Sun");
    $Week=array("月","火","水","木","金","土","日");
    $Message=array("","","","","","","");
    $FlagInput=0;
    $FlagName=0;
//開発用
    //$YourName=array("末廣勇祐","松下海","guest");
    //$YourNameAlpha=array("YusukeSuehiro","UmiMatsushita","guest");
    //$YourCode=array("HF727","EA283","");

    $YourName=array("高野政一","松下海","金子健太","佐藤富江","佐藤奈緒子","水越智子","遠藤綾子","佐藤朝陽","末廣勇祐","安田亜未","村松綾音","後藤優果","杉本真理","坂本美帆","川浦みなみ","大坪遼香","内海利哉","井上真凛","王子萌々夏","近藤まどか","神谷翔斗","吉野大翔","高橋礼香","木下凛子","ヴティリー","粕谷陽希","山崎貴博");
    $YourNameAlpha=array("Takano","UmiMatsushita","KentaKaneko"
,"TomieSato","NaokoSato","TomokoMizukoshi","AyakoEndo","AsahiSato","YusukeSuehiro","AmiYasuda","AyaneMuramatsu","YukaGoto","MariSugimoto","MihoSakamoto","MinamiKawaura","HarukaOtsubo","ToshiyaUtsumi","MarinInoue","MomokaOji","MadokaKondo","Kamiyan","YamatoYoshino","AyakaTakahashi","RinkoKinoshita","VuTiLi","HarukiKasuya","TakahiroYamasaki");
    $YourCode=array("20579","24460","CG494","EC511","C4193","D9087","D9088","FB935","HF727","HA816","HF881","HH688","JG479","JU418","KA403","KG185","KM426","KG597","KM923","KR358","KR753","KR755","KU962","KQ071","LA547","LA204","F9985");

    $RegistNum=27; //登録人数

    for ($num=0;$num<$RegistNum;$num++) {
      if ($YourName[$num] == $Name) {
        if ($YourCode[$num] == $Code) {
            $FlagName=1;
            $YourSche[0]=$YourNameAlpha[$num];
            $YourSche[1]=$YourCode[$num];
            //echo $YourSche[0]."<br/>";
            echo $YourName[$num]."<br/>";
            echo $YourSche[1]."<br/>";
        }
      }
    }

    //名前の認証が終わったら
  if ($FlagName ==1) {
    for ($day=0;$day<7;$day++) {
      if ($Change[$day] !== NULL) {
      if ($Holiday[$day] !==NULL or $Times[$day][0] !== NULL) {
$Message[$day]=$Week[$day]."曜日 "."変更なし，休み希望，時間を同時に選択しないでください<br/>";
}
else {
            $YourSche[$day+2]="Non";
            echo $Week[$day]."曜日 ";
            //echo $YourSche[$day+2]."<br/>";
            echo "NoChange<br/>";
            $Message[$day]="";
            $FlagInput=$FlagInput+1;
}
}
else {

      if ($Holiday[$day] == NULL) {
        if ($Times[$day][2] !== NULL) {
          $Message[$day]=$Week[$day]."曜日 "."３つ以上チェックしないでください<br/>";
        }
        else {
          if ($Times[$day][0] == NULL or $Times[$day][1] == NULL) {
            $Message[$day]=$Week[$day]."曜日 "."出勤できる時間を入力してください<br/>";
          }
          else {
            //echo $Times[0][0].PHP_EOL;
            //echo $Times[0][1].PHP_EOL;

            $YourSche[$day+2]=$Times[$day][0].PHP_EOL."-- ".$Times[$day][1].PHP_EOL;
            echo $Week[$day]."曜日 ";
            echo $YourSche[$day+2]."<br/>";
            $Message[$day]="";
            $FlagInput=$FlagInput+1;
          }
        }
      }
      else {
        if ($Times[$day][0] !== NULL ) {
          $Message[$day]=$Week[$day]."曜日 "."休み希望の時は時間を入力しないでください<br/>";
        }
        else {
          $YourSche[$day+2]="O";
          echo $Week[$day]."曜日 ";
          echo $YourSche[$day+2]."<br/>";
          $Message[$day]="";
          $FlagInput=$FlagInput+1;
        }
      }
}
      echo $Message[$day];





      //日程が正しく入力できたら
      if ($FlagInput == 7) {

          //$link = mysqli_connect('suehiroisamuyuunoMacBook-Pro.local', 'SUEHIRO', '44461016', 'Schedule');
          $link = mysqli_connect('mysql1.php.xdomain.ne.jp', 'miosche0936_sue', '44461016sue', 'miosche0936_schedule');
        if (!$link) {
        die("データベースに接続できません:" . mysqli_connect_error() . "\n");
        }
        else {

          echo "データベースの接続に成功しました。\n";
          //$sql="insert into sche20200810 (name, id, mon, tue, wed, thr, fri, sat, sun) values (:name, :id, :mon, :tue, :wed, :thr, :fri, :sat, :sun)";

          if ($TableExist=$link->query("SHOW TABLES LIKE 'Sche".$Nowdate."'")) {
            if ($TableExist->num_rows) {
              echo "テーブルあり";
            }
            else {
              echo "テーブルなし";
              $sql="create table Sche".$Nowdate." (name varchar(20),  id varchar(5), mon varchar(10), tue varchar(10), wed varchar(10), thr varchar(10), fri varchar(10), sat varchar(10), sun varchar(10))";
              $link->query($sql);

            }
            $TableExist->close();
          }





          //$sql="insert into Sche20200817 (name, id, mon, tue, wed, thr, fri, sat, sun) values (?, ?, ?, ?, ?, ?, ?, ?, ?)";
          $sql="insert into Sche".$Nowdate." (name, id, mon, tue, wed, thr, fri, sat, sun) values (?, ?, ?, ?, ?, ?, ?, ?, ?)";

          $stmt=$link->prepare($sql);

          $stmt->bind_param("sssssssss",$YourSche[0],$YourSche[1],$YourSche[2],$YourSche[3],$YourSche[4],$YourSche[5],$YourSche[6],$YourSche[7],$YourSche[8]);

          $stmt->execute();

          echo "登録完了";
          $link->close();
        }

      }
    }

}
//名前認証失敗
    else {
      if ($Name !==NULL) {
        echo "名前か従業員コードが間違っています";

      }
      else if ($Code !==NULL) {
        echo "名前か従業員コードが間違っています";
      }

    }



        ?>
</br></br></br></br></br></br>

    </div>

    <div id="tab2_cnt" class="NonActive">

      <form action="index2.php"  method="get">

      責任者コードを入力してください<input type="text" name="responsibility"></br>
      <input type="checkbox" name="table" value="10">表を表示する&emsp;
      <input type="submit" value="送信">
      </form>

      <?php

      $Table = $_GET["table"];
      $Response = $_GET["responsibility"];
      $ResPass="09366390";

      if ($Table !== NULL) {
        if ($Response == $ResPass) {
              //$link =new mysqli('suehiroisamuyuunoMacBook-Pro.local', 'SUEHIRO', '44461016', 'Schedule');
            $link =new mysqli('mysql1.php.xdomain.ne.jp', 'miosche0936_sue', '44461016sue', 'miosche0936_schedule');

          if (!$link) {
          die("データベースに接続できません:" . mysqli_connect_error() . "\n");
          }
          else {

            echo "</br>データベースの接続に成功しました．\n";

            if (date('w')==1) {
            $Nowdate=date("Ymd",strtotime('+1 week Monday'));
            echo date("Y/m/d",strtotime('+1 week Monday'))." 週<br/>";
}
            else {
            echo date("Y/m/d",strtotime('+2 week Monday'))." 週<br/>";
}


            //$sql="SELECT * FROM Sche20200810";
            $sql="SELECT * FROM Sche".$Nowdate;


            $result=$link->query($sql);
            if (!$result) {
              echo "データベースからレコードを読めません";
              exit();
            }
            $row_count=$result->num_rows;
            while($row=$result->fetch_array(MYSQLI_ASSOC)){
              $rows[]=$row;
            }
            $result->free();

            $link->close();
            echo "レコード件数".$row_count."</br></br>";
            $space=" ";
            echo str_pad("Code",6," ",2)."&nbsp;".str_pad("Name",20," ",2)."</br>".str_pad("Mon",7," ",2)."&nbsp;".str_pad("Tue",7," ",2)."&nbsp;".str_pad("Wed",7," ",2)."&nbsp;".str_pad("Thr",7," ",2)."&nbsp;".str_pad("Fri",7," ",2)."&nbsp;".str_pad("Sat",7," ",2)."&nbsp;".str_pad("Sun",7," ",2)."</br></br>";
            foreach($rows as $row){
              echo str_pad($row['id'],5,"$space",1)."&nbsp;".str_pad($row['name'],20," ",2)."</br>".str_pad($row['mon'],7," ",2)."&nbsp;".str_pad($row['tue'],7," ",2)."&nbsp;".str_pad($row['wed'],7," ",2)."&nbsp;".str_pad($row['thr'],7," ",2)."&nbsp;".str_pad($row['fri'],7," ",2)."&nbsp;".str_pad($row['sat'],7," ",2)."&nbsp;".str_pad($row['sun'],7," ",2)."</br></br>";

            }
      }
  }
  else {
    $Response="責任者コードが間違っています";
    echo $Response;
  }

}

      ?>




  </div>
</form>


    <script src="main.js" defer></script>
  </body>
</html>
