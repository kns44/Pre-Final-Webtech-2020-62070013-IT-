<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อที่ 1</title>
</head>
<body>
    <?php
      $url = "https://dd-wtlab2020.netlify.app/pre-final/ezquiz.json";
      $respose = file_get_contents($url);
      $result = json_decode($respose);
      echo "<div class='container'>";
      echo "<div class='row'>";
      foreach($result->tracks->items as $data){
        echo "<div class='col-4'>";
        echo "</div>"
        echo "<p>".$data->album->name."</p>";
      }
      echo "</div>"
      echo "</div>"
    ?>
</body>
</html>
