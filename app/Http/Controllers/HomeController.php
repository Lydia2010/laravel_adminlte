<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

         $orders=DB::table('orders')
        ->get();

        $sum_add_prod_to_card=DB::table('monthly_reports')
        ->sum('add_prod_to_card');
        $complete_purchase=DB::table('monthly_reports')
        ->sum('complete_purchase');
        $visit_prem_page=DB::table('monthly_reports')
        ->sum('visit_prem_page');
        $send_inquiries=DB::table('monthly_reports')
        ->sum('send_inquiries');

        $results=DB::table('graphs')
        ->get();

        return view('backend.layouts.dashboard', compact('orders'),
         compact('complete_purchase', 'sum_add_prod_to_card', 'visit_prem_page','send_inquiries', 'results') );
    }
}


