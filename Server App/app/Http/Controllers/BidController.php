<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Bid;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class BidController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $bids = Bid::paginate(15);

        return view('bid.index', compact('bids'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('bid.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['id' => 'required', 'item_id' => 'required', 'buyer' => 'required', 'current_bid' => 'required', 'bid_date' => 'required', ]);

        Bid::create($request->all());

        Session::flash('flash_message', 'Bid successfully added!');

        return redirect('bid');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $bid = Bid::findOrFail($id);

        return view('bid.show', compact('bid'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $bid = Bid::findOrFail($id);

        return view('bid.edit', compact('bid'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request, ['id' => 'required', 'item_id' => 'required', 'buyer' => 'required', 'current_bid' => 'required', 'bid_date' => 'required', ]);

        $bid = Bid::findOrFail($id);
        $bid->update($request->all());

        Session::flash('flash_message', 'Bid successfully updated!');

        return redirect('bid');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Bid::destroy($id);

        Session::flash('flash_message', 'Bid successfully deleted!');

        return redirect('bid');
    }

}
