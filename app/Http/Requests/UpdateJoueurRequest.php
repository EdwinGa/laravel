<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateJoueurRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
            'pseudonyme' => 'required|unique:joueur,pseudonyme,'.$this->joueur, 
            'email' => 'required', 
            'prenom' => 'required', 
            'nom' => 'required', 
            'sexe' => 'required', 
            'date_naissance' => 'required', 
            'argent' => 'numeric', 
            
		];
	}
}
