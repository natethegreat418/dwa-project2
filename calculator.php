<?php

namespace TipCalculator;

class TipCalculate {

  public $split;

  public function splitRounded($totalcost, $tipamt, $peoplepaying) {
    $this->split = round($totalcost * (1 + $tipamt) / $peoplepaying);
    return $this->split;
  }

  public function split($totalcost, $tipamt, $peoplepaying) {
    $this->split = $totalcost * (1 + $tipamt) / $peoplepaying;
    return $this->split;
  }

}
