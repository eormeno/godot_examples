<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoomRequest;
use App\Models\Room;
use Illuminate\Http\Request;
use App\Http\Resources\RoomCollection;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new RoomCollection(Room::paginate(5));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoomRequest $request)
    {
        $room = $request->validated();
        Room::factory()->fromArray($room)->create();
        return response()->json([
            'message' => 'Room created successfully',
            'data' => $room
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        return new RoomCollection(Room::where('id', $room->id)->get());
    }

    public function image(Room $room)
    {
        return response()->file($room->image);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RoomRequest $request, Room $room)
    {
        $room->update($request->validated());
        return response()->json([
            'message' => 'Room updated successfully',
            'data' => $room
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        $room->delete();
        return response()->json([
            'message' => 'Room deleted successfully'
        ], 200);
    }
}
