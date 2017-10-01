<?php

namespace TipCalculator;

class get_formvalues {

  public function getsetvalues($methodtype) {
    #Handle GET requests
    if ($methodtype === 'GET')
    {
      foreach ($_GET as $formfield => $value)
       {
        global $$formfield;
        if (isset($_GET[$formfield]))
        {
          $$formfield = $value;
        }
        else $$formfield = NULL;
      }
    }

    #Handle POST requests
    elseif ($methodtype ==='POST')
    {
      foreach ($_POST as $formfield => $value)
       {
        global $$formfield;
        if (isset($_POST[$formfield]))
        {
          $$formfield = $value;
        }
        else $$formfield = NULL;
      }
    }
  }
}
