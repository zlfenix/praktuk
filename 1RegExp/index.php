<body>
<?php
include "mail.html";
    if($_POST)
    {
        if(preg_match("/^[0-9a-zA-Z]+[_\.\-\]+@[a-zA-Z0-9\-]+\.[a-z]{2,3}+$/", $_POST['email']))
			{        
				$message = "Це справді Email";
			}
        else 
			{
				$message = "Некоректна Email адреса";
			}
    }       
		else 
			{
				$message = 'Email не вказано!';
			}

	echo ($message);
?>
</body>



 
    
 
