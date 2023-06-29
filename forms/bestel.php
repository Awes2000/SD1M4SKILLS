<?php
declare(strict_types=1);
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bestel</title>
</head>
<body>

<form method="post" action="registreer.php">
    <h2>gebruikers gegevens:</h2>
    <label for="naam"></label>
    <input
           type="text"
           name="naam"
           placeholder="Naam"
           id="naam"
           required>
    <br>
    
    <label for="email"></label>
    <input
           type="text"
           name="email"
           placeholder="Email"
           id="email"
           required>
    <br>
    <label for="tel"></label>
    <input 
           type="tel"
           name="tel"
           placeholder="Telefoon nummer"
           id="tel"
           required>
    <br>
    
    <input type="submit" value="Bestel">
    <?php
         if (isset($_SESSION['error'])) {
             echo '</br>';
             foreach ($_SESSION['error'] as $value) {
                echo "{$value}</br>";
             }
             unset($_SESSION['error']);
         }
         
    ?>
</form>

</body>
</html>