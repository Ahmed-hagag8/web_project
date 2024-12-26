<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\Form2;
use App\Models\Form3;
use Illuminate\Support\Facades\Hash;


class FormController extends Controller
{ 
  
    
    

        // Validate the form data including the uploaded image
        public function create_form(Request $request)
        {
          $request->validate([
            'name' => 'required|string|max:255',
            'faculty' => 'required|string|max:255',
            'studentId' => 'required',
            'phoneNumber' => 'required',
            //'deposited_item' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // max 2MB
            'depositedItem' => 'required|image|mimes:jpeg,png,jpg,gif', // max 2MB
        ]);
        // dd($request);

        // Handle file upload
        if ($request->hasFile('depositedItem')) {
            $image = $request->file('depositedItem');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Move the uploaded image to the public/images directory
            $image->move(public_path('depositedItem'), $imageName);
            
           $form = new form();
           $form->name = request('name');
           $form->faculty = request('faculty');
           $form->studentId = request('studentId');
           $form->phoneNumber =request('phoneNumber');;
           $form->depositedItem = $imageName;
           $form->save();

           return redirect('/Deposit')->with("your Form submeted successfully");


        }
         }



         public function create_form2(Request $request)
        {
          if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Move the uploaded image to the public/images directory
            $image->move(public_path('depositedItem'), $imageName);
            
           $form2 = new Form2();
           $form2->photo = $imageName;
           $form2->name = request('name');
           $form2->reason =request('reason');
           $form2->save();

           return redirect('/cars')->with("your Form submeted successfully");


          }
         }


         public function create_form3(Request $request)
        {
          if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Move the uploaded image to the public/images directory
            $image->move(public_path('depositedItem'), $imageName);
            
           $form3 = new Form3();
           $form3->photo = $imageName;
           $form3->name = request('name');
           $form3->found =request('found');
           $form3->save();

           return redirect('/lost-and-found')->with("your Form submeted successfully");


          }
         }
}