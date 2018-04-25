<?php

  $mysql_yhteys = mysqli_connect("localhost", "okp", "oli9tRR3", "Katjan");
  $query = "select nimi, rotu from Kissat";
  $result = mysqli_query($mysql_yhteys, $query)
  or die("Virhe: " . mysqli_error($mysql_yhteys)); ?>

<h1>Kissat</h1>
<p>Nimi ja rotu</p>

<?php
  while($rivi=mysqli_fetch_array($result)) {
    echo ($rivi["nimi"] ." ". $rivi["rotu"] ."<br>");
  }

mysqli_free_result($result);
mysqli_close($mysql_yhteys);
?>
