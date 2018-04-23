<?php
setcookie("koodi", "kissa");
?>

<body>
<form action="Katja_kirjautumisjarjestelma.php" method="post">
<h4>Kirjautumislomake</h4>
 <p>Kirjaudu sisään:</p>
 <label for="salasana">Salasana: </label>
 <input type="password" name="salasana" />
 <p><input type="submit" /></p>
</form>

<footer>
<?php
$koodi = $_COOKIE["koodi"];

if (!empty($_POST['salasana']) AND ($_POST['salasana'] == $koodi)) {
  echo "Onnistui!";
  header("Location: tokasivu.php");
} elseif (!empty($_POST['salasana']) AND ($_POST['salasana'] != $koodi)) {
  echo "Väärä salasana!";
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
  color: red;
}
</style>
