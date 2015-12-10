<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\QuestionFormRequest;
use App\Question;

class UserPageController extends Controller
{
	
	public function index()
	{
		$question = question::all();
		return view('userpage', compact('question'));
	}
	
	
	public function show($slug)
	{
		$question = question::whereSlug($slug)->firstOrFail();
		return view('questions.show', compact('question'));
	}
	
	public function edit($slug)
	{
		$question = question::whereSlug($slug)->firstOrFail();
		return view('questions.edit', compact('question'));
	}
	
	
	public function update($slug, QuestionFormRequest $request)
	{
		$question = question::whereSlug($slug)->firstOrFail();
		$question->question = $request->get('question');
		$question->option1 = $request->get('option1');
		$question->option2 = $request->get('option2');
		$question->option3 = $request->get('option3');
		$question->option4 = $request->get('option4');
		
		$question->save();
		return redirect(action('QuestionsController@edit', $question->slug))->with('status', 'The questions '.$slug.' has been updated!');

	}
	
	public function destroy($slug)
	{
		$question = Question::whereSlug($slug)->firstOrFail();
		$question->delete();
		return redirect('/questions')->with('status', 'The Question '.$slug.' has been deleted!');
	}
	
    public function store(QuestionFormRequest $request)
    {
        //return $request->all();
		$slug = uniqid();
		$question = new Question(array(
        'question' => $request->get('question'),
        'option1' => $request->get('option1'),
		'option2' => $request->get('option2'),
		'option3' => $request->get('option3'),
		'option4' => $request->get('option4'),
        'slug' => $slug
		));

		$question->save();

		return redirect('create')->with('status', 'Your question has been saved! Its unique id is: '.$slug);
    }

}
