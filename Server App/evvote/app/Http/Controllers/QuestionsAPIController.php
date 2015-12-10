<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\QuestionFormRequest;
use App\Question;
use App\Result;
use Input;
use Response;
use Actividades;

class QuestionsAPIController extends Controller
{
	public function create()
    {
        return view('questions.create');
    }
	
	public function index()
	{
		//return question::all();
		// $question = question::all();
		// return view('questions.index', compact('question'));
		try{

            $response = [
                'question' => []
            ];
            $statusCode = 200;
            $question = question::all();

            foreach($question as $question){

                $response['question'][] = [
                    'id' => $question->id,
                    'question' => $question->question,
                    'Option 1' => $question->option1,
                    'Option 2' => $question->option2,
					'Option 3' => $question->option3,
					'Option 4' => $question->option4,
					'Slug' 	   => $question->slug
                ];


            }


        }catch (Exception $e){
            $statusCode = 404;
        }finally{
            return Response::json($response, $statusCode);
        }
	}
	
	
	// public function show($slug)
	// {
		// $question = question::whereSlug($slug)->firstOrFail();
		// return view('questions.show', compact('question'));
	// }
	
     public function store()
     {
       //return $request->all();
	    $newResult = input::json();
		//$slug = uniqid();
		
		$result = new Result(array(
        'vote' => $newResult->get('vote'),
        'idUser' => $newResult->get('idUser'),
		'slug' => $newResult->get('slug')
		));

		$result->save();

		return Response::json(['message' => 'Thanks for your vote!']);
     }

}
