<?php

if (isset($_GET['submit'])){
  if (empty($_GET['totalcost']) === false and empty($_GET['splitnum']) === false) {
    if (isset($_GET['round'])) {
      $split = round($_GET['totalcost'] * (1 + $_GET['tipamt']) / $_GET['splitnum']);
      $alert = 'alert-info';
      $results = 'Each individual owes '.$split.' dollars.';
    }
    else {
      $split = $_GET['totalcost'] * (1 + $_GET['tipamt']) / $_GET['splitnum'];
      $results = 'Each individual owes '.$split.' dollars.';
      $alert = 'alert-info';
    }
  }
  else {
    $alert = 'alert-danger';
    $results = 'Something went wrong';
  }

}
