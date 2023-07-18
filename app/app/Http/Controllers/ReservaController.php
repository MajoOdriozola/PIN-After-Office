<?php

namespace App\Http\Controllers;

use App\Mail\SendPost;
use App\Models\Reserva;
use Illuminate\Http\Request;
use Mail;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * 
     */
    public function store(Request $request)
    {
        $reserva = Reserva::create([
            'nombre' => $request['nombre'],
            'telefono' => $request['telefono'],
            'correo' => $request['correo'],
            'opcion' => $request['opcion'],
            'fecha' => $request['fecha']
        ]);

        $details = [
            'nombre' => $request['nombre'],
            'telefono' => $request['telefono'],
            'correo' => $request['correo'],
            'opcion' => $request['opcion'],
            'fecha' => $request['fecha']
        ];
        Mail::to('jonatan.leguisamo@gmail.com')->send(new SendPost($details));

        return response()->json([
            'mensaje' => 'Se registro',
            'reserva'=> $reserva
        ]);    
    }

    /**
     * Display the specified resource.
     */
    public function show(Reserva $reserva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reserva $reserva)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reserva $reserva)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reserva $reserva)
    {
        //
    }
}
