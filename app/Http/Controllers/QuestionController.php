<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Session::put("nextq", '1');
        Session::put("wrongans", '0');
        Session::put("correctans", '0');

        $question = Question::all()->first();

        return view('pages.questions.quiz')->with(['question' => $question]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }



    public function submitans(Request $request)
    {



        $nextq = Session::get('nextq');
        $wrongans = Session::get('wrongans');
        $correctans = Session::get('correctans');

        $validate = $request->validate([
            'ans' => "required",
            'dbans' => 'required'
        ]);
        $nextq = Session::get('nextq');
        $nextq += 1;


        if ($request->dbans == $request->ans) {
            $correctans += 1;
        } else {
            $wrongans += 1;
        }

        Session::put("nextq", $nextq);
        Session::put("wrongans", $wrongans);
        Session::put("correctans", $correctans);

        $i = 0;

        $questions = question::all();

        foreach ($questions as $question) {
            $i++;
            if ($questions->count() < $nextq) {
                return view('pages.end');
            }
            if ($i == $nextq) {

                // $question = Question::where('id', '>', $question->id)->orderBy('id')->first();
                return view('pages.questions.quiz')->with(['question' => $question]);
            }
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $question = Question::all()->first();

        return view('pages.questions.quiz')->with(['question' => $question]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }
}
