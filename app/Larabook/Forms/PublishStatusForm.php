<?php namespace Larabook\Forms;

use Laracasts\Validation\FormValidator;

class PublishStatusForm extends FormValidator
{
	// validation rules for registrationform
	protected $rules =[

		'body' 	=> 'required'
	];


}