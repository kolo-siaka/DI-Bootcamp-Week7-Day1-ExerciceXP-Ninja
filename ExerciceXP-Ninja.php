<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 
        
        class User 
        {
        	public $firstname;
        	
        	public function hello()
        	{
        		return  'hello '.$this->firstname ;
        	}
        	public function register()
        	{
        		return'>> registered';
        	}
        	public function mail()
        	{
        		return '>> email sent';
        	}
         
        }

	 ?>



</body>
</html>