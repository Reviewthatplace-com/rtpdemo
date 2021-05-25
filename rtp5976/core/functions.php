<?php 

	function php_slug($string)  
	{  
	    $slug = preg_replace('/[^a-z0-9-]+/', '-', trim(strtolower($string)));  
	    return $slug;  
	}

?>