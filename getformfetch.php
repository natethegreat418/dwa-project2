<?php

require('calculator.php');

use TipCalculator\TipCalculate;

# Check for form submit
if (isset($_GET['submit'])){
  # Set variables
  $calculate = new TipCalculate();
  $peoplepaying = $_GET['splitnum'];
  $totalcost = $_GET['totalcost'];

  if (isset($_GET['round'])){
    $round = $_GET['round'];
  }

  else {
    $round = 0;
  }

  if (isset($_GET['tipamt'])){
    $tipamt = $_GET['tipamt'];
  }

  else {
    $tipamt = 0;
  }
  # Error out if key variables are empty
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
    else if ($round === 0){
      $calculate->split($totalcost, $tipamt, $peoplepaying);
      $alert = 'alert-info';
      $results = 'Each individual owes '.$calculate->split.' dollars.';
    }
  }
}
