<?php

class Redis 
{
	private static $redisObj;

	private  function __construct(){

	}

	private  function __clone(){

	}

	public static function getRedis() {

		 
		if (!self::$redisObj instanceof self) {
			self::$redisObj = new self();
		}

		return self::$redisObj;
	}	
}

