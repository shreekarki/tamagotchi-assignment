<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tamagotchi;

class TamagotchiController extends Controller
{
      public function index()
      {
          return Tamagotchi::all();
      }

      public function show($id)
      {
          $tamagotchi =  Tamagotchi::find($id);
          return $tamagotchi;
      }

      public function store(Request $request)
      {
          $tamagotchi = Tamagotchi::create($request->all());
          return response()->json($tamagotchi, 201);
      }

      public function update(Request $request, $id)
      {

          $tamagotchi = Tamagotchi::findOrFail($id);
          $tamagotchi->update($request->all());

          return response()->json($tamagotchi, 200);
      }

      public function delete(Request $request, $id)
      {
          $tamagotchi = Tamagotchi::findOrFail($id);
          $tamagotchi->delete();

          return response()->json(null, 204);
      }
}
