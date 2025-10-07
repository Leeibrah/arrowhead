<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ServicesController extends Controller
{
    /**
     * Retrieves the view for the index page of the frontend.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(){

        $page_title = 'Services';
        $page_description = "This is the Services page";
        
        return view('frontend.index', compact('page_title', 'page_description'));
    }

    public function architecturalSigns(){

        $page_title = 'Architectural Signs';
        $page_description = "This is the Architectural Signs page";

        return view('frontend.pages.services.architectural-signs', compact('page_title', 'page_description'));
    }

    public function businessStationary(){

        $page_title = 'Business Stationary';
        $page_description = "This is the Business Stationary page";

        return view('frontend.pages.services.business-stationary', compact('page_title', 'page_description'));
    }

    public function exteriorSigns(){

        $page_title = 'Exterior Signs';
        $page_description = "This is the Exterior Signs page";

        return view('frontend.pages.services.exterior-signs', compact('page_title', 'page_description'));
    }

    public function industrialSigns(){

        $page_title = 'Industrial Signs';
        $page_description = "This is the Industrial Signs page";

        return view('frontend.pages.services.industrial-signs', compact('page_title', 'page_description'));
    }

    public function interiorSigns(){

        $page_title = 'Interior Signs';
        $page_description = "This is the Interior Signs page";

        return view('frontend.pages.services.interior-signs', compact('page_title', 'page_description'));
    }

    public function internalDecoration(){

        $page_title = 'Internal Decoration';
        $page_description = "This is the Internal Decoration page";

        return view('frontend.pages.services.internal-decoration', compact('page_title', 'page_description'));
    }

    public function lettersLogos(){

        $page_title = 'Letters and Logos';
        $page_description = "This is the Letters Logos page";

        return view('frontend.pages.services.letters-logos', compact('page_title', 'page_description'));
    }

    public function pointOfSale(){

        $page_title = 'Point Of Sale';
        $page_description = "This is the point of sale page";

        return view('frontend.pages.services.point-of-sale', compact('page_title', 'page_description'));
    }

    public function shopFrontSigns(){

        $page_title = 'Shop Front Signs';
        $page_description = "This is the Shop Front Signs page";

        return view('frontend.pages.services.shop-front-signs', compact('page_title', 'page_description'));
    }

    public function vehicleGraphics(){

        $page_title = 'Vehicle Graphics';
        $page_description = "This is the Vehicle Graphics page";

        return view('frontend.pages.services.vehicle-graphics', compact('page_title', 'page_description'));
    }

}
