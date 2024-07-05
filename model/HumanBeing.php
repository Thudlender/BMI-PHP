<?php
// require_once 'BmiIndexer.php';
// require_once 'HealthAnalyzer.php';

class HumanBeing {
    private $height;
    private $weight;
    private $bmi;

    public function getHeight() {
        return $this->height;
    }

    public function setHeight($height) {
        $this->height = $height;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
    }

    public function getBmi() {
        return $this->bmi;
    }

    public function setBmi($bmi) {
        $this->bmi = $bmi;
    }

    public function calculateBMI() {
        $bmiCalculator = new Bmilndexer();
        $this->setBmi($bmiCalculator->calculatrBMI($this->getHeight(), $this->getWeight()));
    }

    public function analyzeBmi() {
        $healthAnalyzer = new HealthAnalyzer();
        return $healthAnalyzer->analyzeBmi($this->getBmi());
    }
}
?>
