<?php require('calc.php') ?>

<!DOCTYPE html>
<html>

<head>
  <title>Project2 Home</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

</head>

<body>
  <div class="container">
    <div class="row">
      <form method="GET">
        <div class="form-group">
          <label>How many ways should the check be split?</label>
          <input type="number" name="splitnum" class="form-control" min="1" max="99" value='<?php if (isset($_GET['splitnum'])) echo $_POST['splitnum'] ?>'>
        </div>
        <div class="form-group">
          <label>What is the total bill?</label>
          <input type="number" name="totalcost" class="form-control" min="0" value='<?php if (isset($_GET['totalcost'])) echo $_POST['totalcost'] ?>'>
        </div>
        <div class="form-group">
          <label>What percent tip would you like to include?</label>
          <select class="form-control" name="tipamt">
            <option value=".0">0%</option>
            <option value=".5">5%</option>
            <option value=".10">10%</option>
            <option value=".15">15%</option>
            <option value=".20">20%</option>
            <option value=".25">25%</option>
          </select>
        </div>
        <div class="form-group">
          <label>Round up?</label>
          <input type="checkbox" name="round" value="yes">Yes.
        </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
      <?php
      if (isset($results)){
        echo $results;
      }
      ?>
    </div>
  </div>


<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

</body>

</html>
