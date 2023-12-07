<?php

namespace App\Http\Controllers;

use App\Models\StudentsScore;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function redirectToCreateStudentsScorePage()
    {
        return view('create_StudentsScore');
    }

    public function createStudentsScore(Request $request)
    {
        // dd($request->author);
        studentsScore::create([
            'student_name' => $request->student_name_input,
            'score' => $request->score_input,
            // 'updated_at' => now()
        ]);

        return redirect('/home');
        // coding how to insert in to database php myadmmin
    }
}
