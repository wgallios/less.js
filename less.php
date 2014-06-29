<?php

class less
{
	function __construct()
	{
		
	}
	
	public static function compile ($file)
	{
		$absoluteFile = $_SERVER['DOCUMENT_ROOT'] . $file;
		
		system("lessc {$absoluteFile}");
	}
}

less::compile(urldecode($_GET['f']));