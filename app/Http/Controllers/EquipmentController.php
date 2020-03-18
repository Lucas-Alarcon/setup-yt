<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipment;

class EquipmentController extends Controller
{
        public function getEquipment ($id) {

        $equipment = Equipment::findOrFail($id);

        return view('equipment',
            [
                'equipment' => $equipment,
            ]
        );
        
    }
}
