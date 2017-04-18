@extends('layouts.default')

@section('content')
      <div class="jumbotron">
        <h1>Welcome to Larabook!</h1>
          <p>Welcome to the Premier place to talk about Laravel with others.
              Why dont you sign up to see what the fuss is all about</p>

        @if (! $currentUser)
        <p>
        	{{ link_to_route('register_path', 'Sign Up', null, ['class' => 'btn btn-lg btn-primary'] )}}
        </p>

        @endif
      </div>

@stop