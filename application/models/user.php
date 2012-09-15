<?php

class User extends Aware {
	
	/**
	 * Aware validation rules
	 */
	// public static $rules = array(
	// 	'username' => 'required|min:10',
	// 	'email' => 'required|email|min:6',
	// 	'another_username' => 'required|same:username',
	// );

	public static $rules = array(
		'username' => 'required|min:10',
		'email' => 'required|email|min:6',

	);



}