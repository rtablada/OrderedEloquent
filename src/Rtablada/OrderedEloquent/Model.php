<?php namespace Rtablada\OrderedEloquent;

use Illuminate\Database\Eloquent\Model as Eloquent;

abstract class Model extends Eloquent
{
	protected $orderBy;
	protected $sortDir = 'ASC';

	/**
	 * Handle dynamic method calls into the method.
	 * Checks if
	 *
	 * @param  string  $method
	 * @param  array   $parameters
	 * @return mixed
	 */
	public function __call($method, $parameters)
	{
		if ($this->orderby && !in_array($method, array('increment', 'decrement'))) {
			$query = $this->newQuery();
			$query = call_user_func(array($query, 'orderBy'), array($this->orderBy, $this->sortDir));
			return call_user_func_array(array($query, $method), $parameters);
		} else {
			return parent::__call($method, $parameters);
		}
	}
}
