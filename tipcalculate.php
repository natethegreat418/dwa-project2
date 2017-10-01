<?php

require('calculator.php');
require('get_formvalue.php');

use TipCalculator\TipCalculate;
use TipCalculator\get_formvalue;

# Check for form submit
if (isset($_GET['submit'])){
  # Find and set all GET variables
  $fetch = new get_formvalue();

  $calculate = new TipCalculate();

  # Secondary catch for good submit
  if (empty($totalcost) === true and empty($split) === true) {
    $alert = 'alert-danger';
    $results = 'Something went wrong';
  }

  # Submit is good: Perform math via Calculate class
  else {
    # Round return path
    if ($round === 'yes'){
      $calculate->splitRounded($totalcost, $tipamt, $peoplepaying);
      $alert = 'alert-info';
      $results = 'Each individual owes '.$calculate->split.' dollars.';
    }
    # Un-rounded return path
    else if ($round === 'no'){
      $calculate->split($totalcost, $tipamt, $peoplepaying);
      $alert = 'alert-info';
      $results = 'Each individual owes '.$calculate->split.' dollars.';
    }
  }
}
