<!DOCTYPE html>
<html lang="zh-TW">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>陳恩儒簡介</title>
  <style type="text/css">
    * { font-family:"標楷體"; margin-left:auto; margin-right:auto;}
    h1 {color:blue; font-size:60px;}
    h2 {color:#33ff33; font-size:40px;}
  </style>
  <script>
    function change1() {
      document.getElementById("pic").src = "mountain.jpg";
      document.getElementById("h2text").innerText = "靜宜資管";
    }

    function change2() {
      document.getElementById("pic").src = "icon.png";
      document.getElementById("h2text").innerText = "EnJu Chen";
    }
  </script>
</head>
<body>
<table width="70%">
  <tr>
    <td>
      <img src="icon.png" width="30%" id="pic" onmouseover="change1()" onmouseout="change2()"></img>
    </td>

    <td>
    </td>
  </tr>
</table>
<h1>陳恩儒</h1>
  <h2 id="h2text">EnJu Chen</h2>
<table width="70%" border="1">
  <tr>
    <td>
    E-Mail: arren1088@gmail.com<br>
Gmail：<a href="https://mail.google.com">前往</a><br>
    <td>
    大象席地而坐電影配樂<br>
<audio controls>
  <source src="elephant.mp3" type="audio/mP3">
</audio><br>
    <td>
不要去臺灣<br>
<iframe src="https://www.youtube.com/embed/pW88QFpHXa8" allowfullscreen></iframe>
    <td>
  </tr>
</table>
<?php echo date("Y-m-d")?>
</body>
</html>
