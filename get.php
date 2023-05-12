<!DOCTYPE html>
<html lang="en">
<head>
    <title>Get Method Formulier</title>
</head>
<body>
    <form method="GET" action="">
        <label for="voornaam">Voornaam</label>
        <input type="text" id="voornaam" name="voornaam"><br>
        <label for="achternaam">Achternaam</label>
        <input type="text" id="achternaam" name="achternaam"><br>
        <label for="leeftijd">Leeftijd</label>
        <input type="number" id="leeftijd" name="leeftijd"><br>
        <label for="adres">Adres</label>
        <input type="text" id="adres" name="adres"><br>
        <label for="Email">Email:</label>
        <input for="email" id="email" name="email">
        <input type="submit" value="Verzenden">
    </form>

    <?php 
    if(isset($_GET['submit'])) {
        $naam = $_GET['naam'];
        $achternaam = $_GET['achternaam'];
        $leeftijd = $_GET['leeftijd'];
        $adres = $_GET['adres'];
        $email = $_GET['email'];

        echo "<p>naam: $naam</p>";
        echo "<p>achternaam: $achternaam</p>";
        echo "<p>leeftijd: $leeftijd</p>";
        echo "<p>adres: $adres</p>";
        echo "<p>email: $email</p>";
    }
    ?>
</body>
</html>