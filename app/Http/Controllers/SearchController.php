<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use KubAT\PhpSimple\HtmlDomParser;
use PDF;

class SearchController extends Controller
{

    /* --------------------------- Google Search Page --------------------------- */

    public function googleSearch()
    {
        return view('google-search');
    }


    /* --------------------------- Custom Search Page --------------------------- */

    public function customSearch(Request $req)
    {
        return view('custom-search');
    }


    /* --------------------------- Custom Search --------------------------- */

    public function customSearchRequest(Request $req)
    {
        if (empty($req->search)) {
            \Session::flash('err', 'Search is empty');
            return redirect()->back();
        }
        
        /* ----------------- Getting Query from custom search field ----------------- */

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://www.google.com/search?q=' . str_replace(' ', '+', $req->search));
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($curl);
        curl_close($curl);

        $domResult = HtmlDomParser::str_get_html($result);
        $domResult->load($result);
        
        \Session::put('domResult',$domResult);
       
        return view('search-result')->with('domResult', $domResult);
    }
}
