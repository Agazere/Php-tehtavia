<form action="Katja_tahtitehtava.php" method="post">
<h4>Tähtitehtävä</h4>
 <p>Montako tähteä laitetaan?</p>
 <input type="number" name="tahti" />
 <p><input type="submit" /></p>
</form>

<?php
$maara = intval($_POST['tahti']);
$maara++;

for ($i = 1; $i < $maara; $i++) {
  for ($stars = 1; $stars <= $i; $stars++) {

  echo "*";
}
echo "<br/>";
}
?>
