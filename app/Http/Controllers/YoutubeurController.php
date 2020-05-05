<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Youtubeur;

class YoutubeurController extends Controller
{
	public function getYoutubeurs () {

		$youtubeurs = Youtubeur::all();
		

		return view('youtubeur',
			[
				'youtubeurs' => $youtubeurs,
			]
		);
		
	}

	public function insertYoutubeur (Request $request) {

		$request->validate([
			'name' => 'required',
			'image' => 'required',
		]);

		$name = $request->input('name');
		$description = $request->input('description', '');
		if ($request->file('image')->isValid()) {
			$extension = $request->image->extension();
			$request->file('image')->move('img/youtubeur', $name.'.jpg');
		}

		$youtubeur = new Youtubeur;
		$youtubeur->name = $name;
		$youtubeur->description = $description;
		$youtubeur->save();

		return view('addYoutubeur');
		
	}
}
