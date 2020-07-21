document.bgColor = "#FFFFEE";  //webの背景色を変更

let CrewCode=['HF727','EA283'];
let CrewName=['末廣勇祐','松下海'];

var Flag = 0;
var CrewNumber = 0;

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
          CrewNumber = num;
          input_message = "<br>認証完了<br>しばらくお待ちください";
      }
    }
    }
    if (Flag == 1) {
      input_message = "";
      document.getElementById("hint_message").innerHTML = input_message;
      window.location.href = "ScheduleManagement2.html";
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
