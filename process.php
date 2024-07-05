<?php
require_once './model/Bmilndexer.php';
require_once './model/HealthAnalyzer.php';
require_once './model/HumanBeing.php';

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    // Retrieve form data
    $weight = $_POST['weight'] ?? '';
    $height = $_POST['height'] ?? '';

    $hb = new HumanBeing();
    $hb->setHeight($height);
    $hb->setWeight($weight);
    $hb->calculateBMI();

    echo "BMI : ". $hb->getBmi() ;
    echo "Result : ". $hb.analyzeBmi() ;
}

?>

