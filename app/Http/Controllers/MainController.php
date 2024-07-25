<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Partner;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\ServicePortfolio;
use App\Models\Team;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
//        $products = Information::latest()->take(6)->get();
//        $partners = Logo::latest()->take(5)->get();
//        $sertificate = Sertificate::latest()->take(1)->get();
        $services = Service::latest()->take(8)->get();
        $contact = Contact::latest()->take(1)->get();
        $portfolios = Portfolio::with('services')->latest()->take(6)->get();
        return view('front.index', compact([
//            'products',
//            'partners',
//            'sertificate',
            'services',
            'contact',
            'portfolios',
        ]));
    }
    public function about()
    {
        $teams = Team::all();
        $services = Service::all();
        $partners = Partner::latest()->take(5)->get();
        $partners1 = Partner::latest()->skip(5)->take(5)->get();
        return view('front.about', compact(
            'teams',
            'services',
            'partners',
            'partners1',
        ));
    }
    public function portfolio()
    {
        $portfolio1 = Portfolio::latest()->take(1)->get();
        $portfolio2 = Portfolio::latest()->skip(1)->take(1)->get();
        $portfolio3 = Portfolio::latest()->skip(2)->take(1)->get();
        $portfolio4 = Portfolio::latest()->skip(3)->take(1)->get();
        $portfolio5 = Portfolio::latest()->skip(4)->take(1)->get();
        $portfolio6 = Portfolio::latest()->skip(5)->take(1)->get();
        $portfolio7 = Portfolio::latest()->skip(6)->take(1)->get();
        $portfolio8 = Portfolio::latest()->skip(7)->take(1)->get();
        return view('front.portfolio', compact(
            'portfolio1',
            'portfolio2',
            'portfolio3',
            'portfolio4',
            'portfolio5',
            'portfolio6',
            'portfolio7',
            'portfolio8',
        ));
    }
    public function singlePortfolio($portfolio)
    {
        $portfolio = Portfolio::with('services')->findOrFail($portfolio);
        return view('front.portfolioDetail', compact(
            'portfolio',
        ));
    }

    public function contacts()
    {
        $contact  = Contact::latest()->take(1)->get();
        return view('front.contacts', compact(
            'contact',
        ));
    }
    public function brief()
    {
        return view('front.brief');
    }
}
