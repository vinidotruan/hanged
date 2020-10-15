<?php

namespace App\Http\Controllers;

use App\CasualGame;
use App\User;
use Illuminate\Http\Request;

class CasualGameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(CasualGame::paginate(15));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $game = CasualGame::create($request->all());
        return response()->json($game);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CasualGame  $casualGame
     * @return \Illuminate\Http\Response
     */
    public function show(CasualGame $casualGame)
    {
        return response()->json($casualGame);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CasualGame  $casualGame
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CasualGame $casualGame)
    {
        $casualGame->update($request->all());
        $casualGame->save();

        return response()->json($casualGame);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CasualGame  $casualGame
     * @return \Illuminate\Http\Response
     */
    public function destroy(CasualGame $casualGame)
    {
        //
    }

    public function ranking() {
        return response()->json(User::casualRanking()->get());
    }
}
