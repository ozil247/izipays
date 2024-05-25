<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function currency()
    {
        return view('upload_currency');
    }

    public function uploadCurrency(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'image' => 'required'
            ]
        );

        $currencey = new Currency();
        $currencey->name = $request->name;

        if ($request->has('image')) {
            $image = $request->image;
            $extension = $image->getClientOriginalExtension();
            $filename = $request->title . uniqid() . '.' . $extension;
            $request->file('image')->storePubliclyAs('public/image', $filename);
            $currencey->image = $filename;
        }
        $currencey->save();

        return back()->with(['success'=>'Currency Uploaded']);
    }

    public function allCurrency()
    {
        $currencies = Currency::all();
        return view ('all_currency',compact('currencies'));
    }


    public function deleteCurrency($id)
    {
        $currencies = Currency::find($id);
        $currencies->delete();
        return back();

    }


}
