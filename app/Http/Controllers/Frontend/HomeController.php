<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Gallery;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //echo "Hello";
        return view('frontend.index');
    }
    
    /* How To Apply Controller
     * @Frontend
     */

    public function HowToApply()
    {
        return view('frontend.how_to_apply');
    }

    /* Age Requirement Controller requirement
     * @Frontend 
     */
    public function requirement()
    {
        return view('frontend.requirement');
    }
    /* Tutions And Fees Controller 
     * @Frontend 
     */
    public function TutionAndFees()
    {
        return view('frontend.tution_and_fees');
    }

     /* FAQ Controller
     * @Frontend
     */
    public function faq()
    {
        return view('frontend.faq');
    }
     /* Activities Controller
     * @Frontend
     */
    public function activities()
    {
        return view('frontend.activities');
    }
     /* Gallery Controller
     * @Frontend
     */

    public function gallery()
    {
        $images=Gallery::all();

        return view('frontend.gallery',compact('images'));
    }
    /* Notice Controller
     * @Frontend
     */

    public function notice()
    {
        return view('frontend.notice');
    }

    /* Contact-US Controller
     * @Frontend
     */
    public function contactUS()
    {
        return view('frontend.contact_us');
    }
    
}
