<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;

class GeneradorController extends Controller
{
    public function imprimir(){
        $clients = $this->getClients();
        $today = Carbon::now()->format('d/m/Y');
        $pdf = \PDF::loadView('imprimir', compact(['today', 'clients']));
        return $pdf->download('ejemplo.pdf');
    }

    public function getClients() {
        return Cliente::all();
    }
}
