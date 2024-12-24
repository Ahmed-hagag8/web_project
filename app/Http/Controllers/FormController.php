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
          
            
           $form = new form();
           $form->name = request('name');
           $form->faculty = request('faculty');
           $form->studentId = request('studentId');
           $form->phoneNumber =request('phoneNumber');;
           $form->depositedItem = request('depositedItem');
           $form->save();

           return redirect('/Deposit')->with("your Form submeted successfully");



         }



         public function create_form2(Request $request)
        {
            
           $form2 = new Form2();
           $form2->photo = request('photo');
           $form2->name = request('name');
           $form2->reason =request('reason');
           $form2->save();

           return redirect('/cars')->with("your Form submeted successfully");



         }


         public function create_form3(Request $request)
        {
            
           $form3 = new Form3();
           $form3->photo = request('photo');
           $form3->name = request('name');
           $form3->found =request('found');
           $form3->save();

           return redirect('/lost-and-found')->with("your Form submeted successfully");



         }
}