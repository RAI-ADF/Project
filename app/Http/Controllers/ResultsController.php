<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\QuestionFormRequest;
use App\Result;
use App\Question;
use DB;

class ResultsController extends Controller
{
	
	public function index()
	{
		$question = question::all();
		return view('userpage', compact('question'));
	}
	
	
	public function show($slug)
	{
		//DB::table('yourtablename')->where('yourcolumn','value')->groupBy('column','column')->get();			 
		$result = result::select(DB::raw('vote,slug, count(*) as count'))->where('slug','=',$slug)->groupBy('vote','slug')->get();
		$question = question::whereSlug($slug)->firstOrFail();
		//result::whereSlug($slug)->whereVote('option1')->first()->count('*');
		
		//result::all();
		
		//where('slug','=',$slug)->groupBy('vote')->first()->count();
		//result::whereSlug($slug)->whereVote('option1')->count()->first();
		//DB::table('results')->select(DB::raw('count(*) as count'))
          //           ->where('slug', '=', $slug)
            //         ->groupBy('vote')
              //       ->get();
		//DB::table('results')->where('slug',$slug)->groupBy('vote','slug')->first();
		//result::select(result::raw('select (vote, slug) count(*) as count where slug = ',$slug,' Group by vote, slug'))->first();
		//select('vote','slug')->count('*')->where('slug','=',$slug)->groupBy('vote')->get();
		//result::select('vote','slug')->count('*')->where('slug','=',$slug)->groupBy('vote')->get();
		//result::whereSlug($slug)->whereVote('option1')->firstOrFail();
		// select(result::raw('count("vote") as votes')) ->where('slug', $slug)->get();
		//count('vote')->where('Slug',$slug)->whereVote('option1')->firstOrFail();
		//SELECT vote, slug, COUNT(*) FROM results where slug = '56583a4852f37' Group by vote, slug

		return view('results.show', compact('result', 'question'));
	}
	
	// public function getOption($slug)
	// {
		// $question = question::select('option1','option2','option3','option4')->whereSlug($slug)->first();
		// return view('results.show', compact('question'));
	// }
	
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
