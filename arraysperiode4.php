<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhP Test</title>
</head>
<body>
  <h1>PHP Test</h1>

  <?php
    function createNumberArray(int $cijfer): array{
      if ($cijfer < 5) {
        echo "Het aantal cijfers moet minimaal 5 zijn.";
      }
    }

    function returnString(int $leeftijd): void {
      echo $leeftijd;
      // if (returnString($naam)) {
      //   print_r($array);
      // } else {
      //   echo "Het argument moet een array zijn.";
      // }
    }

    

    // Aanroepen van de functies en weergeven van resultaten
    returnString(22);
    //Opdracht 3:
    function displayArrayContent(array $array): void {
  print_r($array);

}

    //Opdracht 4:
    function createNumberArray(int $length = 5): array {
  $numberArray = [];
  for ($i = 1; $i <= $length; $i++) {
    $numberArray[] = $i;
  }

  return $numberArray;
}


  ?>
</body>
</html>
