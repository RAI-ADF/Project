<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Item;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class ItemController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $items = Item::paginate(15);

        return view('item.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('item.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        

        Item::create($request->all());

        Session::flash('flash_message', 'Item successfully added!');

        return redirect('item');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $item = Item::findOrFail($id);

        return view('item.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $item = Item::findOrFail($id);

        return view('item.edit', compact('item','$item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request, ['id' => 'required', ]);

        $item = Item::findOrFail($id);
        $item->update($request->all());

        Session::flash('flash_message', 'Item successfully updated!');

        return redirect('item');
    }

    public function updateEdit(){
        $data = array('item_name' => Input::get('item_name'), 'item_desc' => Input::get('item_desc'), 'item_desc' => Input::get('item_desc'), 'item_img' => Input::get('item_img'), 'start_bid' => Input::get('start_bid'), 'buy_now_price' => Input::get('buy_now_price'), 'last_bid' => Input::get('last_bid'), 'status' => Input::get('status'), 'start_date' => Input::get('start_date'), 'max_date' => Input::get('max_date'), 'seller' => Input::get('seller'));
        
        $id = Input::get('id');
        DB::table('items')-> where('id','=',$id)->update($data);
        return Redirect::to('item')->with('message','Data berhasil diupdate');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Item::destroy($id);

        Session::flash('flash_message', 'Item successfully deleted!');

        return redirect('item');
    }

}
