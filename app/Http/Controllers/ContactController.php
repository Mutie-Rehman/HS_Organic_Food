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

    // public function open_file_form()
    // { return view ('/files/Upload_file'); }
   
    // public function store_file(Request $req)
    // {
    //     $req->validate([ 
    //         'file'=> 'required|mimes:pdf,doc,docx,xlx,csv,jpg,png|max:4048',
    //       ]); 
        
    //       $filename = time().'.'.$req->file->extension(); 
    //       $req->file->move('uploads', $filename);
        
    //       $req->file->storeAs('public', $filename);
    //       return redirect('/files/Upload_file');
    //       $filewritter = new filings;
    //        $filewritter -> file = $filename;
    //         $filewritter->save();
    //          return redirect('/files/Upload_file');
    // } 

    // public function show_file_data()
    // { $data = filings::all(); 
    //     return view('File_Upload.display_file_data', compact('data')); }

    //     public function file_view($id)
    //     { $data = filings::find($id);
    //          return view ('File_Upload.View_file', compact('data')); }

    //          public function file_download($file)
    //          { return response()->download(public_path('uploads/'.$file)); }
}