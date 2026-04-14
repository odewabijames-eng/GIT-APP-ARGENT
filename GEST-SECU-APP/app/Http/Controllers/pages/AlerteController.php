<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlerteController extends Controller
{
    public function index()
    {
        return view('pages.alertes.index');
    }
}
