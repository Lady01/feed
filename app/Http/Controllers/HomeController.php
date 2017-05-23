<?php

namespace App\Http\Controllers;
use SimplePie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feed = new SimplePie();
        $feed->set_feed_url('https://news.google.com/news/section?cf=all&hl=pt-BR&pz=1&ned=pt-BR_br&topic=n&output=rss');
        $feed->enable_order_by_date(true);
        $feed->set_cache_location($_SERVER['DOCUMENT_ROOT'] . '/cache');
        $feed->init();
        return view('home')->with('feed', $feed);
       //return view('home');
    }
}
