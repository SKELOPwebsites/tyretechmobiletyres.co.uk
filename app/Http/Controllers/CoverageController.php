<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CoverageController extends Controller
{
    public function show($slug)
    {
        $towns = config('towns');

        // Find the town with the matching slug
        $town = collect($towns)->firstWhere('slug', $slug);

        if (!$town) {
            abort(404);
        }

        return Inertia::render('Location', [
            'location' => $town['town']
        ]);
    }
}
