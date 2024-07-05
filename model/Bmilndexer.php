<?php

class Bmilndexer {
    public function calculatrBMI($height, $weight) {
        return ($weight / ($height * $height)) * 10000;
    }
}
?>

