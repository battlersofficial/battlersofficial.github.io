<?php
	if(isset($_POST['submit'])){
		$team=$_POST['team'];
		$name1=$_POST['name1'];
		$name2=$_POST['name2'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$msg=$_POST['msg'];
		$name='kar-98';
		
		

		$to='battlergaming.official@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='xBATTLERx Registration';
		$message="Email ID :".$email."\n"."Team Name :".$team."\n"."Player1 :".$name1."\n"."Player2 :".$name2."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$name;

		if(mail($to, $subject, $message, $headers))
		{
			echo '<h1>Registered! Your ROOM ID And Password will Be sent through whatsapp! Join This Group To get room ID Password Fixtures and more.... </h1>
			<a href="https://chat.whatsapp.com/BDSknuhMOjqHMMqs8BQ4cY">Join Here</a>
			 <h2>For More Info 
			Contact : 9790762913</h2>';
			
		}
		else{
			echo "Something went wrong!";
		}
	}
?>
