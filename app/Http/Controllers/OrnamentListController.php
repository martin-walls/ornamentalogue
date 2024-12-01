<?php

namespace App\Http\Controllers;

use App\Models\Ornament;
use Illuminate\View\View;

class OrnamentListController extends Controller
{
    public function show(): View
    {
        return view('ornament-list', [
            'ornaments' => Ornament::all(),
        ]);
    }
}
