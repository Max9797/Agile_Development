<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Full_text_search;
use DataTables;

class Full_text_search_Controller extends Controller
{
    function index()
    {
     return view('full-text-search');
    }

    function action(Request $request)
    {
     if($request->ajax())
     {
      $data = Full_text_search::search($request->get('full-text-search-query'))->get();

      return response()->json($data);
     }
    }

    function normal_search(Request $request)
    {
        if($request->ajax())
        {
            $data = Full_text_search::latest()->get();
            return Datatables::of($data)->make(true);
        }
      
        return view('normal-search');
    }
}