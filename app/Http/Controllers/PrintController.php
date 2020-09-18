<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use View;
use App\User;
use Illuminate\Support\Facades\Session;

use function simple_html_dom\file_get_html;

class PrintController extends Controller
{
    protected $domResult = [];


    public function __construct()
    {
       $this->domResult =  \Session::has('domResult') ? \Session::get('domResult') : new \stdClass();
    }
    /**

     * Print Google Search Result.

     *

     * @return \Illuminate\Http\Response

     */

    public function printPDF($page=null)
    {
        
        $data = [];

        /* ------- HTML render issue due to dynamic data in blade so worked with window.print on frontend ------ */
        
        // $html = view('search-result')->with('domResult',\Session::get('domResult'))->render();
       
        
        // $pdf = PDF::loadHtml($html);
        
        // // $pdf->save(storage_path().'_filename.pdf');
        // return $pdf->download('search-result.pdf');
    }
}
