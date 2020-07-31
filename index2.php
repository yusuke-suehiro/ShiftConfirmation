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
    <?php
    echo 'include1<br>';
    //mysqlのホスト名はlocalhost，ユーザ作成時にはパスワードの書式？設定が必要
    $link = mysqli_connect('suehiroisamuyuunoMacBook-Pro.local', 'SUEHIRO', '44461016', 'ShiftConfirmation');
//  $link = mysqli_connect('localhost', 'SUEHIRO', '44461016', 'shop');

    if (mysqli_connect_errno()) {
    die("データベースに接続できません:" . mysqli_connect_error() . "\n");
} else {
    echo "データベースの接続に成功しました。\n";
}
    ?>
    <?php
    if (isset($_FILES['upfile']['error']) && is_int($_FILES['upfile']['error']) && $_FILES["upfile"]["name"] !== ""){
      //NULLならFALSE,
                //エラーチェック
                switch ($_FILES['upfile']['error']) {
                    case UPLOAD_ERR_OK: // OK
                        break;
                    case UPLOAD_ERR_NO_FILE:   // 未選択
                        throw new RuntimeException('ファイルが選択されていません', 400);
                    case UPLOAD_ERR_INI_SIZE:  // php.ini定義の最大サイズ超過
                        throw new RuntimeException('ファイルサイズが大きすぎます', 400);
                    default:
                        throw new RuntimeException('その他のエラーが発生しました', 500);
                }
                echo "OK\n";
              }
    ?>


    <form action="index2.php" enctype="multipart/form-data" method="post">
        <label>画像/動画アップロード</label>
        <input type="file" name="upfile">
        <br>

        <input type="submit" value="アップロード">
    </form>



    <input type="text" id="input_message_name" value=""></p>
    <input type="checkbox" id="Monday" value="Monday">月曜日<br>
    <input type="checkbox" id="Tuesday" value="Tuesday">火曜日<br>
    <input type="checkbox" id="Wednesday" value="Wednesday">水曜日<br>
    <input type="checkbox" id="Thursday" value="Thursday">木曜日<br>
    <input type="checkbox" id="Friday" value="Friday">金曜日<br>
    <input type="checkbox" id="Saturday" value="Saturday">土曜日<br>
    <input type="checkbox" id="Sunday" value="Sunday">日曜日<br>
    <input type="button" id="button" onclick="func4()" value="完了">
    <div id="hint_message"></div>
    </div>

    <div id="tab2_cnt" class="NonActive">

      <input type="file" name="test" accept=".pdf" required>
      <br><br>
      <p>アップロード用パスワード<br>

      <input type="password" id="input_message" value=""><br></p>
      <br><br>
      <input type="button" id="button" onclick="func2()" value="完了">

      <br>
      <p class="result_output">結果</p>
      <p class="hint_message"></p>

  </div>
</form>


    <script src="main.js" defer></script>
  </body>
</html>
