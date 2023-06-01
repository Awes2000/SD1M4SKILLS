<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhP Test</title>
</head>
<body>
    <h1>

    <?php

    $automerk = "Audi" ; 
    echo $automerk . '</br>';

    $gereedschap = "Hamer";
    print $gereedschap . '</br>';

    

    $postcode = "Postcode: 1234";
    echo $postcode . '</br>';

    //Dit is een regel met comments

    $gegroet = "Hoi";
    $persoon = "Awes";


    print $gegroet . " " . $persoon;
    print '</br>';

    print "{$gegroet} {$persoon} <br>";
    
    $onderwerp = "back-end";
    print strlen($onderwerp);
    print str_replace("back-end", "front-end", $onderwerp);

    print 4 + 5 . '</br>' . 8*4 .'</br>'. 5-5 .'</br>'. 20 / 5;

    $achternaam = "zoretic";

    if ($achternaam == "Zoretic") {
        print($achternaam);
    } else{
        echo("hoi");
    }

    function naam($awes){
    print 'functie aangeroepen' . ' '  . $awes . '<br>' ;

    }

    naam("Awes");

    
    // Array met 5 strings
    $strings = ["Appel", "Banaan", "Citroen", "Druif", "Mango"];
    
    // Array met 5 integers
    $integers = [5, 10, 15, 20, 25];
    
    // Gemixed array met strings en integer
    $mixed = ["Appel", 10, "Citroen", 20, "Mango"];
    
    // Array met 5 verschillende strings en een lege string
    $strings_with_empty = ["Appel", "", "Citroen", "Druif", "Mango"];

    // Loop door de arrays en print de uitvoer
    for($i = 0; $i < count($strings); $i++) {
        echo "Element " . ($i + 1) . " van de array strings: " . $strings[$i] . "<br>";
        echo "Type van element " . ($i + 1) . " van de array strings: " . isset($strings[$i]) . "<br><br>";
    }
    
    for($i = 0; $i < count($integers); $i++) {
        echo  $integers[$i] . "<br>";
        echo "Type van element " . ($i + 1) . " van de array integers: " . gettype($integers[$i]) . "<br><br>";
    }
    
    for($i = 0; $i < count($mixed); $i++) {
        echo "Element " . ($i + 1) . " van de array mixed: " . $mixed[$i] . "<br>";
        echo "Type van element " . ($i + 1) . " van de array mixed: " . empty($mixed[$i]) . "<br><br>";
    }
    
    for($i = 0; $i < count($strings_with_empty); $i++) {
        echo "Element  ($i + 1)  van de array strings_with_empty:  $strings_with_empty[$i]  <br>";
        echo "Type van element " . ($i + 1) . " van de array strings_with_empty: " . gettype($strings_with_empty[$i]) . "<br><br>";
    }

    $naam = "Awes";
    $leeftijd = 22;
    $geld = 22.999999;
    $broer = "Teo";
    $leeftijd_broer = 28;


    printf("Mijn naam is %s en ik ben %d jaar oud en ik heb %.3f in mijn broekzak en mijn broer heet %s en hij is %d oud", $naam, $leeftijd, $geld, $broer, $leeftijd_broer);


    
        


    
    
    

    

    ?>
    </h1>
</body>
</html>