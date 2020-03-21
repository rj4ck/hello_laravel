<?php

namespace App\Http\Controllers;

use App\UserOrders;
use Illuminate\Http\Request;

class UserOrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $userOrders = UserOrders::all()/* -> skip(20) -> take(10)*/;

        return view('userOrders.index', compact('userOrders'));

        //return view('userOrders.index', compact('userOrders')) -> with('i', (request() -> input(page, 1) -1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('userOrders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*request()->validate([
            'user' => 'required',
            'detail' => 'required',
        ]);


        UserOrders::create($request->all());


        return redirect()->route('userOrders.index')
            ->with('success','Order created successfully.');*/
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserOrders  $userOrders
     * @return \Illuminate\Http\Response
     */
    public function show(UserOrders $userOrders)
    {
        //return view('userOrders.show', compact('userOrders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserOrders  $userOrders
     * @return \Illuminate\Http\Response
     */
    public function edit(UserOrders $userOrders)
    {
        //return view('userOrders.edit', compact('userOrders'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserOrders  $userOrders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserOrders $userOrders)
    {
        /*request()->validate([
            'user' => 'required',
            'detail' => 'required',
        ]);


        $userOrders->update($request->all());


        return redirect()->route('userOrders.index')->with('success','Order updated successfully');*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserOrders  $userOrders
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserOrders $userOrders)
    {
        /*$userOrders->delete();

        return redirect()->route('userOrders.index')->with('success','Order deleted successfully');*/
    }
}
