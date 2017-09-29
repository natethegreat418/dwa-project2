<?php

namespace TipCalculator;

class TipCalculate {

  public $alert;
  public $results;
  public $peoplepaying;
  public $split;
  public $totalcost;
  public $tipamt;
  public $round;

  public function __construct() {
    $this->peoplepaying = $_GET['splitnum'];
    $this->totalcost = $_GET['totalcost'];
    if (isset($_GET['round'])){
      $this->round = $_GET['round'];
    }
    if (isset($_GET['tipamt'])){
      $this->tipamt = $_GET['tipamt'];
    }
    else {
      $this->tipamt = 0;
    }
    if (empty($this->totalcost) === true and empty($this->split) === true) {
        $this->alert = 'alert-danger';
        $this->results = 'Something went wrong';
        return $this->alert;
        return $this->results;
      }
  }

  public function splitRounded() {
    $this->split = round($this->totalcost * (1 + $this->tipamt) / $this->peoplepaying);
    $this->alert = 'alert-info';
    $this->results = 'Each individual owes '.$this->split.' dollars.';
    return $this->alert;
    return $this->results;
  }

  public function split() {
    $this->split = $this->totalcost * (1 + $this->tipamt) / $this->peoplepaying;
    $this->alert = 'alert-info';
    $this->results = 'Each individual owes '.$this->split.' dollars.';
    return $this->alert;
    return $this->results;
  }

}
