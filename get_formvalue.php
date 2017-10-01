<?php

namespace TipCalculator;

class get_formvalue {

  public function __construct() {
    foreach ($_GET as $formfield => $value) {
      global $$formfield;
      if (isset($_GET[$formfield])) {
        $$formfield = $value;
      }
      else $$formfield = NULL;
      }
  }

}
