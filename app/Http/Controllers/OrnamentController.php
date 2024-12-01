<?php

namespace App\Http\Controllers;

use App\Models\Ornament;
use Illuminate\View\View;

class OrnamentController extends Controller
{
    public function show(string $id): View
    {
        return view('ornament', [
            'ornament' => Ornament::findOrFail($id)
        ]);
    }
}
