<!DOCTYPE html>
<html>

<head>
  <title>HTML01</title>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <style>
    .box {
      display: flex;
    }

    .box>div {
      width: 100px;
      height: 85px;
      background-color: orangered;
      margin: 1px;
      font-size: 30px;
      text-align: center;
      text-decoration: dashed;
    }

    .p1 {
      font-size: 40px;
    }
  </style>
</head>

<body>
  <div id="timer">
    Timer: <span id="minutes">00</span>:<span id="seconds">00</span><br><br>
    <button id="stoptime" onclick="clearInterval(timerVariable)">Pause</button>
  </div>


  <div>
    <br>
    <section class="box" id="row1">
      <div id="v1" class="b1"><br></div>
      <div id="v2" class="b2"><br></div>
      <div id="v3" class="b3"><br></div>
    </section>
    <section class="box" id="row2">
      <div class="b4"><br></div>
      <div class="b5"><br></div>
      <div class="b6"><br></div>
    </section>
    <section class="box" id="row3">
      <div class="b7"><br></div>
      <div class="b8"><br></div>
      <div class="b9"><br></div>
    </section>
  </div>
  <p id="A1" class="p1"></p>
  <p id="A2" class="p1"></p>
  

  <script>
    //จับเวลา//
    var timerVariable = setInterval(countTimer, 1000);
    var second = 0;

    function time(value) {
      return value > 9 ? value : "0" + value;
    }

    function countTimer() {
      document.getElementById("seconds").innerHTML = time(++second % 60);
      document.getElementById("minutes").innerHTML = time(parseInt(second / 60, 10));

    }

    //สุ่มตัวเลข//
    var data = [];
    var data2 = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    while (data.length < 9) {
      var r = Math.floor(Math.random() * 9) + 1;
      if (data.indexOf(r) === -1) data.push(r);
    }

    //ใส่ตัวเลขไปใน box//

    for (let i = 1; i < 10; i++) {
      const pop = data.pop();
      $(".b" + i).append(pop);
      $(".b" + i).val(pop);
    }
    //เงื่อนไขในการเล่น box//
    start = 1;
    num = -1;
    let Count = 1;
    $(document).ready(function() {
      for (let i = 1; i < 10; i++) {

        $(".b" + i).click(() => {
          if (start == 1) {
            Count++;
            num++;
            console.log(data2[num]);
            if ($(".b" + i).val() == data2[num]) {
              $(".b" + i).css("visibility", "hidden");
            } else if ($(".b" + i).val() != data2[num]) {
              $(".b" + i).css("visibility", "hidden");
              $("#A2").append("Game Over");
              clearInterval(timerVariable);
              $(".b" + i).dblclick();
              start = 0;
            }

            if (Count == 10) {
              $("#A1").append("<br>" + "Victory, you win");
              clearInterval(timerVariable)
            }
          }

        })


      }

    });
  </script>

</body>

</html>