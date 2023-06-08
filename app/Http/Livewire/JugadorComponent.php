<?php

namespace App\Http\Livewire;

use App\Models\Jugador;
use Livewire\Component;

class JugadorComponent extends Component
{

    public $jugadores, $nombre, $apellido, $numero, $Id;
    public $modal = false;

    public function render()
    {
        $this->jugadores = Jugador::all();
        return view('livewire.jugador-component');
    }

    public function insert(){
        $jugador = new Jugador();
        $jugador->nombre = $this->nombre;
        $jugador->apellido = $this->apellido;
        $jugador->numero = $this->numero;
        $jugador->save();
        $this->clear();
    }

    public function clear(){
        $this->nombre = ""; 
        $this->apellido = ""; 
        $this->numero = ""; 
    }


    public function edit($id){
        $jugador = Jugador::find($id);
        $this->clear();
        $this->nombre = $jugador->nombre;
        $this->apellido = $jugador->apellido;
        $this->numero = $jugador->numero;
        $this->Id = $jugador->id;
    }

    public function update($id){
        $jugador = Jugador::find($id);
        $jugador->nombre = $this->nombre;
        $jugador->apellido = $this->apellido;
        $jugador->numero = $this->numero;
        $jugador->save();
        $this->clear();
    }

    public function delete($id){
        $jugador = Jugador::find($id);
        $jugador->delete();
    }
    
}
