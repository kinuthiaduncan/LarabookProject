<?php namespace Larabook\Statuses;

use Laracasts\Commander\Events\EventGenerator;
use Larabook\Statuses\Events\StatusWasPublished;
use Laracasts\Presenter\PresentableTrait;

class Status extends \Eloquent 
{

	use EventGenerator, PresentableTrait;

	protected $fillable = ['body'];

	protected $presenter = 'Larabook\Statuses\StatusPresenter';

	// late static binding
	public static function publish($body)
	{
		$status = new static(compact('body'));

		$status->raise(new StatusWasPublished($body));

		return $status;
	}

	public function user()
	{

		return $this->belongsTo('Larabook\Users\User');
	}

	public function comments()
    {
        return $this->hasMany('Larabook\Statuses\Comment');
    }

}
