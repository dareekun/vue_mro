<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function __construct()
    {
    $this->middleware('auth');
    }

    public function dashboard() {
        return inertia::render('Dashboard');
    }

    public function product() {
        return inertia::render('Product');
    }

    public function supplier() {
        return inertia::render('Supplier');
    }

    public function request() {
        return inertia::render('Request');
    }

    public function invoice() {
        return inertia::render('Invoice');
    }

    public function inventory() {
        return inertia::render('Inventory');
    }

    public function options() {
        return inertia::render('Options');
    }

}
