<?php
	function ft_split ($str)
    {
	    $str = trim($str);
        if ($str == '')
            return (NULL);
		$str = explode (' ', preg_replace('/\s+/',' ', $str));
		sort($str);
		return $str;
	}
?>
