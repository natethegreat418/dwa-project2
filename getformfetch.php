<?php

require('calculator.php');

use TipCalculator\TipCalculate;

if (isset($_GET['submit'])){
  $calculate = new TipCalculate();
  if ($calculate->round === 'yes'){
      $calculate->splitRounded();
      $alert = $calculate->alert;
      $results = $calculate->results;
    }

    else {
      $calculate->split();
      $alert = $calculate->alert;
      $results = $calculate->results;
    }
  }
