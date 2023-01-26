<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;


class QuoteController extends Controller
{
    //

    public function quote_lists(Request $request)
    {       
            $quotes = Quote::all();
            return view('quotes.all', compact('quotes'));
    }
}
