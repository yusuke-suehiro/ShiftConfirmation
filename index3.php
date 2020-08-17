<?php
//mysqlのホスト名はlocalhost，ユーザ作成時にはパスワードの書式？設定が必要
/*    $link = mysqli_connect('suehiroisamuyuunoMacBook-Pro.local', 'SUEHIRO', '44461016', 'ShiftConfirmation');
//  $link = mysqli_connect('localhost', 'SUEHIRO', '44461016', 'shop');

if (mysqli_connect_errno()) {
die("データベースに接続できません:" . mysqli_connect_error() . "\n");
} else {
echo "データベースの接続に成功しました。\n";
}*/


  /*$uploaddir = '/Users/suehiroyusuke/Documents/GitHub/ShiftConfirmation/';
  $upload = $uploaddir . basename($_FILES['fname']['name']);
  move_uploaded_file($_FILES['fname']['tmp'], $upload);
  echo "完了";
*/
/*
$tempfile = $_FILES['fname']['tmp_name'];
//$filename = '/Users/suehiroyusuke/Documents/GitHub/ShiftConfirmation/' . $_FILES['fname']['name'];
$filename = $_FILES['fname']['name'];
if (is_uploaded_file($tempfile)) {
    if ( move_uploaded_file($tempfile , $filename )) {
  echo $filename . "をアップロードしました。";
    } else {
        echo "ファイルをアップロードできません。";
    }
} else {
    echo "ファイルが選択されていません。";
}
*/
echo "ファイルを選択";
if(is_uploaded_file($_FILES["fname"]["tmp_name"])){

  if(move_uploaded_file($_FILES["fname"]["tmp_name"], "/Users/suehiroyusuke/Documents/GitHub/ShiftConfirmation/".$_FILES['fname']['name'])){
		echo "アップロード完了です。";
	}else{
		echo "アップロードに失敗しました。";
	}

}

/*if (isset($_FILES['upfile']['error']) && is_int($_FILES['upfile']['error']) && $_FILES["upfile"]["name"] !== ""){
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
          }*/
?>
