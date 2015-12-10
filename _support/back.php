<?php 
if(
	isset($_REQUEST['isencoded']) && isset($_REQUEST['token']) && isset($_REQUEST['dat']) && isset($_POST['t']) && isset($_POST['x']) 
	&&
	!empty($_REQUEST['isencoded']) && !empty($_REQUEST['token']) && !empty($_REQUEST['dat']) && !empty($_POST['t']) && !empty($_POST['x'])
	)
{
		
		// sleep(2);	
	function algo_dec($d){
	  for($i=0;$i<5;$i++){
	    $dx = base64_decode($d);
	    $d = $dx;
	  }
	  return $dx;
	}

	 $queryString = algo_dec( $_POST['x'] );

	 parse_str($queryString, $arr);
	 

		$to = 'mansi.industry09@gmail.com';

		$subject = 'Contact Request';

		$headers = "From: contact-robot@mansiIndustry.in\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";	 
	 
	 	$message = '<!DOCTYPE html>
					 <html>
					 <body>
					 	<table border="1" cellspacing="0" cellpadding="5" style="font-family: Calibri,Candara,Segoe,Segoe UI,Optima,Arial,sans-serif;background:#DEDEDE">
					 		<tr>
					 			<td><b>Enquiry By:</b></td>
					 			<td>'.strip_tags($arr['icon_prefix']).'</td>
					 		</tr>

					 		 <tr>
					 			<td><b>Organization :</b></td>
					 			<td>'.strip_tags($arr['icon_org']).'</td>
					 		</tr>

					 		<tr>
					 			<td><b>Email ID :</b></td>
					 			<td>'.strip_tags($arr['icon_email']).'</td>
					 		</tr>

					 		<tr>
					 			<td><b>Phone :</b></td>
					 			<td>'.strip_tags($arr['icon_telephone']).'</td>
					 		</tr>


					 		<tr>
					 			<td><b>Message :</b></td>
					 			<td>'.strip_tags($arr['desc']).'</td>
					 		</tr>
					 	</table>
					 </body>
					 </html>
				 	';

	 // mail($to, $subject, $message, $headers);
			


	 // die($message);
				 	die("done");



} else{
	echo "<h1>404 Not found</h1>";
}

 ?>


