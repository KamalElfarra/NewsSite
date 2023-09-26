<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Politic;
use App\Models\Economy;
use App\Models\Sport;
use App\Models\Technology;
use App\Models\Popular;
use App\Models\More;

class SiteController extends Controller
{


    public function index(){

        $politic_first = Politic::first();
        $economy_first = Economy::first();
        $sport_first = Sport::first();
        $technology_first = Technology::first();


        $politic_skip = Politic::skip(2)->first();
        $economy_skip = Economy::skip(1)->first();
        $sport_skip = Sport::skip(1)->first();
        $technology_skip = Technology::skip(1)->first();


        $politic_last = Politic::latest()->first();
        $economy_last = Economy::latest()->first();
        $sport_last = Sport::latest()->first();
        $technology_last = Technology::latest()->first();

        $order_by_tech = Technology::orderBy('id', 'desc')->take(2)->get();
        $order_by_politic = Politic::orderBy('id', 'desc')->take(2)->get();
        $order_by_economy = Economy::orderBy('id', 'desc')->take(2)->get();
        $order_by_sport = Sport::orderBy('id', 'desc')->take(2)->get();
        $order_by_popular = Popular::orderBy('id', 'desc')->take(3)->get();
        $get_more = More::orderBy('id', 'desc')->take(8)->get();


        $array = [

          "data"=> $politic_first,$economy_first,
          $sport_first,$technology_first,$politic_skip,
          $economy_skip,$sport_skip,$technology_skip,
          $politic_last,$economy_last,$sport_last,$technology_last,
          $order_by_tech,$order_by_politic,$order_by_economy,
          $order_by_sport,$order_by_popular,$get_more,

          "msg" => "the data was returned on success"

        ];


        return response($array,200);

    }
}
