<!DOCTYPE html>
<html>

<head>
  <title>HTML01</title>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <style>
    .box {
      display:flex;
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
  </style>
</head>

<body>

  <div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <section class="box" id="row1">
      <div class="b1"><br></div>
      <div class="b2"><br></div>
      <div class="b3"><br></div>
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


  <script>
    var data = [];
    while (data.length < 9) {
      var r = Math.floor(Math.random() * 9) + 1;
      if (data.indexOf(r) === -1) data.push(r);
    }

    for (let i = 1; i < 10; i++) {
      const pop = data.pop();
      $(".b" + i).append(pop);
    }
  </script>

</body>

</html>