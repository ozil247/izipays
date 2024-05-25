<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome()
    {

      /*   $response = UnirestRequest::post("https://CoinMarketCapzakutynskyV1.p.rapidapi.com/getCryptocurrenciesList",
        array(
          "X-RapidAPI-Key" => "{84efa28e-a320-4f3a-9762-da436802573c}",
          "Content-Type" => "application/x-www-form-urlencoded"
        )
      ); */

        return view('welcome');
    }
}
