<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarcodeGenerateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return inertia()->render('Generate');
    }
}
