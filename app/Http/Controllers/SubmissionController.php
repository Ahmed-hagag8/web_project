<?php

// SubmissionController.php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Form2;
use App\Models\Form3;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    public function index()
    {
        $submissions = Form::all(); 
        return view('admin.Deposit', compact('submissions'));
    }

public function destroy($id)
{
    $submission = Form::findOrFail($id);
    $submission->delete();

    return redirect()->back()->with('success', 'Submission deleted successfully.');
}
public function search(Request $request)
{
    $query = $request->input('query');

    // Fetch submissions based on search query
    $submissions = Form::where('name', 'LIKE', "%$query%")
                             ->orWhere('studentId', 'LIKE', "%$query%")
                             ->get();

    return view('admin.Deposit', ['submissions' => $submissions]);
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function index_car()
{
    $submissions = Form2::all(); 
        return view('admin.car', compact('submissions'));
}

public function destroy_car($id)
{
    $submission = Form2::findOrFail($id);
    $submission->delete();

    return redirect()->back()->with('success', 'Submission deleted successfully.');
}

public function search_car(Request $request)
{
    $query = $request->input('query');

    // Fetch submissions based on search query
    $submissions = Form2::where('name', 'LIKE', "%$query%")
                             ->get();

    return view('admin.car', ['submissions' => $submissions]);
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function index_lost_and_found()
{
    $submissions = Form3::all(); 
        return view('admin.lost-and-found', compact('submissions'));
}

public function destroy_lost_and_found($id)
{
    $submission = Form3::findOrFail($id);
    $submission->delete();

    return redirect()->back()->with('success', 'Submission deleted successfully.');
}

public function search_lost_and_found(Request $request)
{
    $query = $request->input('query');

    // Fetch submissions based on search query
    $submissions = Form3::where('name', 'LIKE', "%$query%")
                             ->get();

    return view('admin.lost-and-found', ['submissions' => $submissions]);
}
}
