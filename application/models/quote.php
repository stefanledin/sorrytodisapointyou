<?php

class Quote extends Eloquent
{
	/**
	 * Validation
	 */
	public static $rules = array(
		'name' => 'required',
		'device' => 'required',
		'disarmed' => 'required'
	);

	public static function validate($input)
	{
		$v = Validator::make($input, static::$rules);
		return $v->fails() ? $v : true;
	}
}