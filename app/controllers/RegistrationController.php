<?php

use Larabook\Forms\RegistrationForm;
use Larabook\Registration\RegisterUserCommand;

class RegistrationController extends \BaseController {




	private $registrationForm;

	function __construct(RegistrationForm $registrationForm)
	{
		$this->registrationForm = $registrationForm;
		$this->beforeFilter('guest');

	}
	// Show a form to register the user
	public function create()
	{
		return View::make('registration.create');
	}

	// Create new user
	public function store()
	{
		$this->registrationForm->validate(Input::all());

		$user = $this->execute(RegisterUserCommand::class);

		Auth::login($user);

		Flash::message('Glad to have you as a new Larabook member!');

		return Redirect::home();
	}


}
