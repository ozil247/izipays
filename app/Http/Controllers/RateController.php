<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;

class RateController extends Controller
{
    public function rate($id)
    {

        $currency_id = $id;
        $currencies = Currency::find($id);

        return view('update_rate', compact('currencies'));

    }

    public function updateRate(Request $request, $id)
    {
        $currencies = Currency::find($id);
        $currencies->name = $request->name;
        $currencies->buy = $request->buy;
        $currencies->sell = $request->sell;
        $currencies -> save();

        return redirect()->route('all.currency', compact('currencies'));
    }


}
