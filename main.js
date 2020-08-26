document.bgColor = "#FFFFEE";  //webの背景色を変更

//開発用


let CrewCode=['20579','24460','CG494','EC511','C4193','D9087','D9088','FB935','HF727','HA816','HF881','HH688','JG479','JU418','KA403','KG185','KM426','KG597','KM923','KR358','KR753','KR755','KU962','KQ071','LA547','LA204','F9985'];
let CrewName=['高野政一','松下海','金子健太','佐藤富江','佐藤奈緒子','水越智子','遠藤綾子','佐藤朝陽','末廣勇祐','安田亜未','村松綾音','後藤優果','杉本真理','坂本美帆','川浦みなみ','大坪遼香','内海利哉','井上真凛','王子萌々夏','近藤まどか','神谷翔斗','吉野大翔','高橋礼香','木下凛子','ヴティリー','粕谷陽希','山崎貴博'];

var UpLoadPass='09366390';
//var UpLoadPass="";開発時のみ使用

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
      window.location.href = "index2.php";

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
  var result_ = document.getElementsByClassName("result_output")[0];

  if (UpLoadPass === input_message) {
    console.log("認証成功")
    result_.textContent = Nowname + "さん　正解!";
    document.getElementsByClassName("hint_message")[0].innerHTML = "";
  }
  else {
    result_.textContent = Nowname + "さん　失敗!";
    document.getElementsByClassName("hint_message")[0].innerHTML = "<br>ヒント<br>・英字や数字は半角で入力していますか？<br>・大文字と小文字は正確ですか？";
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



//ここから下はtxtファイルを編集する関数を作成中

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

/*  var Monday = document.getElementById("Monday");
  var Tuesday = document.getElementById("Tuesday");
  var Wednesday = document.getElementById("Wednesday");
  var Thursday = document.getElementById("Thursday");
  var Friday = document.getElementById("Friday");
  var Saturday = document.getElementById("Saturday");
  var Sunday = document.getElementById("Sunday");*/
  for (let num=0;num<CrewCode.length;num++) {
    if (CrewName[num] === input_message_name) {
      Flag=1;
      Nowname=CrewName[num];
      CrewNumber=num;
      input_message_name = "";
      document.getElementById("hint_message").innerHTML = input_message_name;
  }
  else {
    console.log('Not!!\n');
  }
  }
}





//タブの操作
  //クルー専用
  NonActive[0].onclick = function() {
  NonActive[0].style.color=ActiveColor;
  NonActive[0].style.backgroundColor=ActiveBackColor;
  Active[0].style.color=NonActiveColor;
  Active[0].style.backgroundColor=NonActiveBackColor;
  NonActive[1].style.display="block";
  Active[1].style.display="none";
  }
  //責任者専用
  Active[0].onclick = function() {
  NonActive[0].style.color=NonActiveColor;
  NonActive[0].style.backgroundColor=NonActiveBackColor;
  Active[0].style.color=ActiveColor;
  Active[0].style.backgroundColor=ActiveBackColor;
  Active[1].style.display="block";
  NonActive[1].style.display="none";
  }
