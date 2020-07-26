document.bgColor = "#FFFFEE";  //webの背景色を変更

let CrewCode=['HF727','EA283'];
let CrewName=['末廣勇祐','松下海'];


var UpLoadPass='09366390';

var Flag = 0;
var CrewNumber=0;
var Nowname='';
var Active=document.getElementsByClassName("Active");
var NonActive=document.getElementsByClassName("NonActive");

//タブの色指定
const ActiveColor = "#000";
const ActiveBackColor = "#CCFFCC";
const NonActiveColor = "#fff";
const NonActiveBackColor = "#009966";


function func1() {
    var input_message = document.getElementById("input_message").value;
    var input_message_name = document.getElementById("input_message_name").value;

    for (let num=0;num<CrewCode.length;num++) {
      if (CrewCode[num] === input_message) {
        if (CrewName[num] === input_message_name) {
          Flag=1;
          Nowname=CrewName[num];
          input_message = "<br>"+CrewName[CrewNumber]+"さん<br>しばらくお待ちください";
      }
    }
    }
    if (Flag == 1) {
      input_message = "";
      document.getElementById("hint_message").innerHTML = input_message;
      window.location.href = "index2.html";

    }
    else {
      input_message = "<br>入力された内容は誤っています<br>もう一度入力してください";
      document.getElementById("output_message").innerHTML = input_message;
      input_message = "<br><br>ヒント<br>・英字や数字は半角で入力していますか？<br>・大文字と小文字は正確ですか？";
      document.getElementById("hint_message").innerHTML = input_message;
      Flag=0;
      CrewNumber = 0;
    }
  }

function func2() {
  var input_message = document.getElementById("input_message").value;
    if (UpLoadPass === input_message) {
        Flag=1;
        input_message = "<br>認証完了<br>しばらくお待ちください";
    }
  if (Flag == 1) {
    input_message = Nowname + "さん　正解!";
    document.getElementById("hint_message").innerHTML = input_message;

  }
  else {

    input_message = "<br><br>ヒント<br>・英字や数字は半角で入力していますか？<br>・大文字と小文字は正確ですか？";
    document.getElementById("hint_message").innerHTML = input_message;
    Flag=0;
  }
}

function func3() {
  var input_message_name = document.getElementById("input_message_name").value;
  var Monday = document.getElementById("Monday").value;
  var Tuesday = document.getElementById("Tuesday").value;
  var Wednesday = document.getElementById("Wednesday").value;
  var Thursday = document.getElementById("Thursday").value;
  var Friday = document.getElementById("Friday").value;
  var Saturday = document.getElementById("Saturday").value;
  var Sunday = document.getElementById("Sunday").value;
}


  // SheetをWorkbookに追加する
  // 参照：https://github.com/SheetJS/js-xlsx/issues/163
  function sheet_to_workbook(sheet/*:Worksheet*/, opts)/*:Workbook*/ {
    var n = opts && opts.sheet ? opts.sheet : "Sheet1";
    var sheets = {}; sheets[n] = sheet;
    return { SheetNames: [n], Sheets: sheets };
  }

  // ArrayをWorkbookに変換する
  // 参照：https://github.com/SheetJS/js-xlsx/issues/163
  function aoa_to_workbook(data/*:Array<Array<any> >*/, opts)/*:Workbook*/ {
    return sheet_to_workbook(XLSX.utils.aoa_to_sheet(data, opts), opts);
  }

  // stringをArrayBufferに変換する
  // 参照：https://stackoverflow.com/questions/34993292/how-to-save-xlsx-data-to-file-as-a-blob
  function s2ab(s) {
    var buf = new ArrayBuffer(s.length);
    var view = new Uint8Array(buf);
    for (var i = 0; i != s.length; ++i) view[i] = s.charCodeAt(i) & 0xFF;
      return buf;
    }

  function func4() {
  // 書き込み時のオプションは以下を参照
  // https://github.com/SheetJS/js-xlsx/blob/master/README.md#writing-options
  var input_message_name = document.getElementById("input_message_name").value;

  var Monday = document.getElementById("Monday");
  var Tuesday = document.getElementById("Tuesday");
  var Wednesday = document.getElementById("Wednesday");
  var Thursday = document.getElementById("Thursday");
  var Friday = document.getElementById("Friday");
  var Saturday = document.getElementById("Saturday");
  var Sunday = document.getElementById("Sunday");
  for (let num=0;num<CrewCode.length;num++) {
    if (CrewName[num] === input_message_name) {
      Flag=1;
      Nowname=CrewName[num];
      CrewNumber=num;
      hint2_message = "<br>"+CrewName[CrewNumber]+"さん<br>しばらくお待ちください";
  }
  }
  if (Flag == 1) {

    var fs = WScript.CreateObject("Scripting.FileSystemObject");
    var file = fs.OpenTextFile("text.txt", 2, true, -1);

    file.Write("マルペケつくろ～");
    file.Close();


    /*let blob = new Blob(['\nあいうえお'],{type:"text/plan"});
    let link = document.createElement('a');
    link.href = URL.createObjectURL(blob);
    link.download = '作ったファイル.txt';
    link.click();*/

}

    /*var array1 =
    [
      [Nowname+"^n"+Nowname,"","","","","","",""]
    ];
    if (Monday.checked) {
      array1[0][1]="OK";
    }
    if (Tuesday.checked) {
      array1[0][2]="OK";
    }
    if (Wednesday.checked) {
      array1[0][3]="OK";
    }
    if (Thursday.checked) {
      array1[0][4]="OK";
    }
    if (Friday.checked) {
      array1[0][5]="OK";
    }
    if (Saturday.checked) {
      array1[0][6]="OK";
    }
    if (Sunday.checked) {
      array1[0][7]="OK";
    }
    var write_opts = {
      type: 'binary'
    };

    // ArrayをWorkbookに変換する
    var wb = aoa_to_workbook(array1);
    var wb_out = XLSX.write(wb, write_opts);

    // WorkbookからBlobオブジェクトを生成
    // 参照：https://developer.mozilla.org/ja/docs/Web/API/Blob
    var blob = new Blob([s2ab(wb_out)], { type: 'application/octet-stream' });

    // FileSaverのsaveAs関数で、xlsxファイルとしてダウンロード
    // 参照：https://github.com/eligrey/FileSaver.js/
    saveAs(blob, 'myExcelFile.xlsx');
    hint2_message = "完了しました<br>ありがとうございます";
    document.getElementById("hint_message").innerHTML = hint2_message;
  }
  else {
    hint2_message = "名前が間違っています";
    document.getElementById("hint_message").innerHTML = hint2_message;
  }
*/
}





  //ホーム
  NonActive[0].onclick = function() {
  NonActive[0].style.color=ActiveColor;
  NonActive[0].style.backgroundColor=ActiveBackColor;
  Active[0].style.color=NonActiveColor;
  Active[0].style.backgroundColor=NonActiveBackColor;
  NonActive[1].style.display="block";
  Active[1].style.display="none";
  }
  //メニュー
  Active[0].onclick = function() {
  NonActive[0].style.color=NonActiveColor;
  NonActive[0].style.backgroundColor=NonActiveBackColor;
  Active[0].style.color=ActiveColor;
  Active[0].style.backgroundColor=ActiveBackColor;
  Active[1].style.display="block";
  NonActive[1].style.display="none";
  }
