<?php namespace Larabook\Forms;

use Laracasts\Validation\FormValidator;

class SignInForm extends FormValidator
{
	// validation rules for registrationform
	protected $rules =[

		'email'		=> 'required',
		'password'	=> 'required'
	];


}