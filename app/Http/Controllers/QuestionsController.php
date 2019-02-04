<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        /*
        $questions = Question::with('users')->get();
        return view('questions.index', ['questions'=> $questions]);
        */
        $questions = DB::table('users')
            ->join('questions', 'users.id', '=', 'questions.user_id')
            ->select('users.*', 'questions.*')->orderBy('questions.created_at', 'desc')
            ->paginate(5);

        return view('questions.index', ['questions'=> $questions]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
     $question = Question::find($question-> id);
     return view('questions.show', ['question'=> $question]);
        /*
        $quiz = $request->input('quiz_id');
        $question = DB::select("SELECT * FROM questions WHERE id=$quiz");
        return view('questions.show', ['question'=> $question]);
        */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
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
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }
}
