<?php

namespace App\Http\Controllers;

use App\PvpGame;
use App\User;
use Illuminate\Http\Request;

class PvpGameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(PvpGame::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newGame = PvpGame::create($request->all());
        return response()->json($newGame);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PvpGame  $pvpGame
     * @return \Illuminate\Http\Response
     */
    public function show(PvpGame $pvpGame)
    {
        return response()->json($pvpGame);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PvpGame  $pvpGame
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PvpGame $pvpGame)
    {
        $pvpGame->update($request->all());
        $pvpGame->save();

        return response()->json($pvpGame);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PvpGame  $pvpGame
     * @return \Illuminate\Http\Response
     */
    public function destroy(PvpGame $pvpGame)
    {
        //
    }

    public function ranking() {
        return response()->json(User::pvpRanking()->get());
    }
}
