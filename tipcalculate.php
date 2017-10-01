<?php

require('calculator.php');
require('get_formvalues.php');

use TipCalculator\TipCalculate;
use TipCalculator\get_formvalues;

# Check for form submit
if (isset($_GET['submit']))
{
  # Find and set all variables
  $fetch = new get_formvalues();
  $fetch->getsetvalues('GET');

  $calculate = new TipCalculate();

  # Secondary catch for good submit
  if (empty($totalcost) === true or empty($peoplepaying) === true)
  {
    $alert = 'alert-danger';
    $results = 'Something went wrong';
  }

  # Submit is good: Perform math via Calculate class
  else
  {
    # Round return path
    if ($round === 'yes')
    {
      $calculate->splitRounded($totalcost, $tipamt, $peoplepaying);
      $alert = 'alert-info';
      $results = 'Each individual owes '.$calculate->split.' dollars.';
    }
    # Un-rounded return path
    else if ($round === 'no')
    {
      $calculate->split($totalcost, $tipamt, $peoplepaying);
      $alert = 'alert-info';
      $results = 'Each individual owes '.$calculate->split.' dollars.';
    }
  }
}
