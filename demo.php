<?php
// Variables
    $name = "Miguel Ramirez ad";
    // $name = 2;
    $isDev = true;
    // $age = (bool)'39'; // type casting de variables
    $age = 33;

    $newAge = $age + 1;
    // Simbolo de + no sirve para concatenar CADENAS
    $newAge = $age . 1;
    $hola = "Hola";
    $isaias = "Isaias";
    $concatenacion .= $hola . $isaias;

    var_dump($newAge);
    var_dump($isDev);
    var_dump($name);

    echo gettype($newAge);
    echo gettype($isDev);
    echo gettype($name);
    echo gettext($name);
    $output = "Hola \"$name\" con una edad de $age.";

    // Constantes
    // define('LOGO_URL','https://cdn.freebiesupply.com/logos/large/2x/php-1-logo-svg-vector.svg');
    const NOMBRE = "Isaias";
    // Las constantes no funcionan en tiempo de ejecicion.

    // Ternario
    // $outputAge = $isOld ? 'Eres viejo, lo siento':'Eres joven,felicidades';

    // Match
    // $outputAge = match($age){
    //     0,1,2 => "Eres un bebe, $name",
    //     3,4,5,6,7,8,9,10 => "Eres un nino, $name",
    //     default => "Eres un extraterrestre"
    // }
   
    $outputAge = match(true){
        $age < 2 => "Eres un bebe, $name",
        $age < 10 => "Eres un nino, $name",
        $age < 18 => "Eres un adolescente, $name",
        $age === 18 => "Eres mayor, $name",
        $age < 40 => "Eres un adulto joven, $name",
        $age < 60 => "Eres un adulto viejo, $name",
        default => "Hueles mas a madera que a fruta"
    };

    // Arreglos
    $bestLanguages = ["PHP","Javascript","Python"];
    $bestLanguages[] = "Java";// Lo pondra al final
    $bestLanguages[3] = "Typescript"; // Sobreescribe al eleemento.

    // Recreacion de un map
    $person = [
        "name" => "Miguel",
        "age" => 78,
        "isDev" => false,
        "languages" => ["PHP","Javascript","Python"]
    ];
?>

<h4>
    El mejor lenguaje es <?= $bestLanguages[3] ?>
</h4>


<ul>
    <?php foreach($bestLanguages as $key => $language): ?>
        <li><?= $key . " " . $language ?></li>
    <?php endforeach; ?>
</ul>

<h1>
<?= $output ?>
<?= define('LOGO_URL','https://cdn.freebiesupply.com/logos/large/2x/php-1-logo-svg-vector.svg');?>
<img src="<?= LOGO_URL ?>" alt="PHP Logo" width="200"/>
<?= "\nIt is old?:". $isOld ?>
</h1>


<h2>
    <?= $outputAge ?> 
</h2>
<?php if ($isOld) : ?>
    <h2>Eres viejo </h2>
<?php elseif($isDev) : ?>
    <h2>Eres dev</h2>
<?php else : ?>
    <h2>C</h2>
<?php endif; ?>