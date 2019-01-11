<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JWTFactory;
use JWTAuth;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Hotelrooms;


class HotelroomController extends Controller
{

         public function index()
         {
             return Hotelrooms::all();
         }

         public function show($id)
         {

             $hotelrooms =  Hotelrooms::find($id);
             return $hotelrooms;
         }

         public function store(Request $request)
         {
              if (!$user){
               $hotelroom = Hotelrooms::create($request->all());
               return response()->json($hotelroom, 201);
              }

              return response()->json("UNauthorized access", 403);

         }

         public function update(Request $request, $id)
         {


             $hotelroom = Hotelrooms::findOrFail($id);
             $hotelroom->update($request->all());

             return response()->json($hotelroom, 200);
         }

         public function delete(Request $request, $id)
         {
             $hotelroom = Hotelrooms::findOrFail($id);
             $hotelroom->delete();

             return response()->json(null, 204);
         }
}
