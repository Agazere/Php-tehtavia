<body>
<form action="Katja_tahtitehtava.php" method="post">
<h4>Tähtitehtävä</h4>
 <p>Montako tähteä laitetaan?</p>
 <input type="number" name="tahti" />
 <p><input type="submit" /></p>
</form>

<footer>
<?php
$maara = intval($_POST['tahti']);
$maara++;

for ($i = 1; $i < $maara; $i++) {
  for ($stars = 1; $stars <= $i; $stars++) {
  echo "*";
} echo "<br/>";
}
?>

</footer>
</body>

<style>
body {
  background-color: #435f8c;
}
form {
  width: 300px;
  height: 200px;
  margin: auto;
  margin-top: 50px;
  padding: 10px;
  background-color: #f0f78a;
}
p {
  padding-bottom: 5px;
}
footer {
  width: 300px;
  margin: auto;
  padding:10px;
  background-color: white;
  color: #9da803;
  font-size: 2em;
}
</style>
