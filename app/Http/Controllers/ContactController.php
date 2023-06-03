<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Contact;
  
class ContactController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('/contact/contactForm');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:11|numeric',
            'subject' => 'required',
            'message' => 'required'
        ]);
  
        Contact::create($request->all());
  
        return redirect()->back()
                         ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
    }

    // public function home()
    // {
    //     return view('/mainsite/main_home');
    // }

    // public function price()
    // {
    //     return view('/mainsite/main_price');
    // }

    // public function about()
    // {
    //     return view('/mainsite/main_about');
    // }

    // public function item()
    // {
    //     return view('/mainsite/main_items');
    // }
}