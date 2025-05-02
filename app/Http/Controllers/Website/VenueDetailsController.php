<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class VenueDetailsController extends Controller
{
    public function venueDetails($venuename): View
    {
        return view('website.venue-details');
    }
}
