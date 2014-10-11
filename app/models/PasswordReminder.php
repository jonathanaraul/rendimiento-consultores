<?php

class PasswordReminder extends \Eloquent {
	protected $fillable = [];
	public $timestamp = false;
	protected $table = 'password_reminders';
}