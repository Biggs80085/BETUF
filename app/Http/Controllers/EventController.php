<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Intervention;

class EventController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Récuperer tous les evenements
        $events = Intervention::all();
        $eventsArray = [];
        foreach ($events as $event) {
            $data = [
                'id' => $event->id,
                'tunnelID' => $event->tunnelID,
                'title' => $event->title,
                'start' => $event->dateIntervention,
                'end' => $event->dateFinIntervention,
                'description' => $event->description, 
                'rapport' => $event->rapport, 
                'typeVisite' => $event->typeVisite,
            ];
            array_push($eventsArray, $data);
        }
        //récuperer la liste des evenements dans un array
        return response()->json($eventsArray);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEventRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Intervention::create([
            'tunnelID' => $request->tunnelID,
            'userID' => $request->userID,
            'title' => $request->title,
            'dateIntervention' => $request->dateIntervention,
            'dateFinIntervention' => $request->dateFinIntervention,
            'description' => $request->description, 
            'rapport' => $request->rapport, 
            'typeVisite' => $request->typeVisite,
        ]);

        return response()->json(['success' => 'Event Adeed']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Intervention::findOrFail($id);

        $data = [
            'id' => $event->id,
            'tunnelID' => $event->tunnelID,
            'userID' => $event->userID,
            'title' => $event->title,
            'dateIntervention' => $event->dateIntervention,
            'dateFinIntervention' => $event->dateFinIntervention,
            'description' => $event->description, 
            'rapport' => $event->rapport, 
            'typeVisite' => $event->typeVisite, 
        ];

        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEventRequest  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $event = Intervention::findOrFail($id);
        if($request->rapport != null){
            $event->update([
                
                'tunnelID' => $request->tunnelID,
                'userID' => $request->userID,
                'title' => $request->title,
                'dateIntervention' => $request->dateIntervention,
                'dateFinIntervention' => $request->dateFinIntervention,
                'description' => $request->description, 
                'rapport' => $request->rapport, 
                'typeVisite' => $request->typeVisite, 
            ]);
        }else{
            $event->update([
                
                'tunnelID' => $request->tunnelID,
                'userID' => $request->userID,
                'title' => $request->title,
                'dateIntervention' => $request->dateIntervention,
                'dateFinIntervention' => $request->dateFinIntervention,
                'description' => $request->description, 
                'typeVisite' => $request->typeVisite, 
            ]);
        }

        return response()->json(['success' => 'Event Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Intervention::findOrFail($id);

        $event->delete();

        return response()->json(['success' => "Evenement Deleted"]);
    }
}
