<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user = new User([
        //     'first_name' => 'Josue',
        //     'last_name' => 'Ayala',
        //     'email' => 'josue.ayala@elaniin.com',
        //     'password' => 'password'
        // ]);

        // $user->save();

        // $user = User::create([
        //     'first_name' => 'Josue',
        //     'last_name' => 'Ayala',
        //     'email' => 'josue.ayala@mercandu.com',
        //     'password' => 'password'
        // ]);

        // $user = User::all();
        // $user = User::find(4);

        $user = User::where('email', 'josue.ayala@mercandu.com')->first();

        $orders = $user->orders();

        return $user;
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
