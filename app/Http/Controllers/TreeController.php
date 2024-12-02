<?php

namespace App\Http\Controllers;

use App\Models\Tree;
use Illuminate\View\View;

class TreeController extends Controller
{
    public function show(string $id): View
    {
        $tree = Tree::with('ornaments')->findOrFail($id);

        return view('tree', [
            'tree' => $tree,
            'ornaments' => $tree->ornaments,
        ]);
    }
}
