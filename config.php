<?php


class config
{
	public static function connect()
	{
		//declare localhost information here
		$host = "localhost";
		$username = "root";
		$password = "";
		$dbname = "finalphp";
		
		try
		{
			//database connection
		$con = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
			//set attribute error here
		$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
		}catch(PDOException $e)
			{
				echo "Connection failed" . $e->getMessage();
			}

		return $con;
	}
		

	
}

?>