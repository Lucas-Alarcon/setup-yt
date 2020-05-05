<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipment;
use App\Categories;

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

	public function addEquipment ()
	{
		$categories = Categories::all();

		return view('addEquipment',
			[
				'categories' => $categories,
			]
		);
	}

	public function insertEquipment (Request $request) {

		$request->validate([
			'name' => 'required',
			'description' => 'required',
			'categorie' => 'required',
			'url' => 'required',
			'image' => 'required',
		]);

		$name = $request->input('name');
		$description = $request->input('description');
		$categorie = $request->input('categorie');
		$url = $request->input('url');
		if ($request->file('image')->isValid()) {
			$extension = $request->image->extension();
			$request->file('image')->move('img/equipment', $name.'.jpg');
		}

		$equipment = new Equipment;
		$equipment->name = $name;
		$equipment->description = $description;
		$equipment->categorie_id = $categorie;
		$equipment->url = $url;
		$equipment->img = $name;

		$equipment->save();

		return redirect()->route('addEquipment');

	}
}
