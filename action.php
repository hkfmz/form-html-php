<?php

  if(isset($_POST['valider']))
  {
  	if(isset($_POST['user_name']) AND isset($_POST['user_email']) AND isset($_POST['user_message']))
  	{
  		if(!empty($_POST['user_name']) AND !empty($_POST['user_email']) AND !empty($_POST['user_message']))
  		{
           $name=htmlspecialchars($_POST['user_name']);
           $email=htmlspecialchars($_POST['user_email']);
           $message=htmlspecialchars($_POST['user_message']);
 
             
             echo "<h2> Bonjour <mark><b> $name </b></mark> merci pour votre email:<mark><b> $email </b></mark>, nous avons lu votre message: </br></br> $message </h2>";
  		}
  	}
  }

?>

