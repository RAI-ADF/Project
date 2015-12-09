<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\News;
use Illuminate\Http\Request;
use Response;
use Carbon\Carbon;
use Session;

class NewsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $news = News::paginate(15);

        return view('news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nik' => 'required',
            'title' => 'required',
            'content' => 'required',
        ]);

        News::create($request->all());

        Session::flash('flash_message', 'News successfully added!');

        return redirect('news');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $news = News::findOrFail($id);

        return view('news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $news = News::findOrFail($id);

        return view('news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request, [
            'nik' => 'required',
            'title' => 'required',
            'content' => 'required',
        ]);

        $news = News::findOrFail($id);
        $news->update($request->all());

        Session::flash('flash_message', 'News successfully updated!');

        return redirect('news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        News::destroy($id);

        Session::flash('flash_message', 'News successfully deleted!');

        return redirect('news');
    }

    public function apiIndex(){
        $news = News::all();
        return Response::json([
            'data' => $news->toArray()
            ],200);
    }
    
}
