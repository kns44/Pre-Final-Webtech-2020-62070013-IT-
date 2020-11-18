<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>ข้อที่ 1 62070013</title>
</head>
<body>
    <?php
      $url = "https://dd-wtlab2020.netlify.app/pre-final/ezquiz.json";
      $respose = file_get_contents($url);
      $result = json_decode($respose);
      echo "<div class='container'>";
      echo "<div class='row'>";
      foreach($result->tracks->items as $data){
        echo "<div class='col-4'><div class='card'>";
        echo "<img src='".$data->album->images[0]->url."' width='100%'>";
        echo "<p><b>".$data->album->name."</b></p>";
        echo "<p>Artist</p>";
        echo "<p>Release data " .$data->album->release_date."</p>";
        echo "<p>Avaliable</p>";
        echo "</div></div>";
      }
      echo "</div>";
      echo "</div>";
    ?>
</body>
</html>
