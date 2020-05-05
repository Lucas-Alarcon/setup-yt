<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setup;
use App\Equipment;

class SetupController extends Controller
{
	public function getSetup ($name) {

		$setup = Setup::where('name', $name)->first();
		$equipments = array();

		foreach($setup->equipments as $equips => $equip) {
			$equipment = Equipment::findOrFail($equip);
			array_push($equipments, $equipment);
		}

		return view('setup',
			[
				'setup' => $setup,
				'equipments' => $equipments,
			]
		);
		
	}
}
