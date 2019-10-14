<?php
$subject="Reminder for the Upcoming Event";
$message = "<head>
<link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro\" rel=\"stylesheet\"> 
</head>
<center>
<div style=\"width:100%;border-radius:7px;font-family: \'Source Sans Pro\', sans-serif;color:rgb(70,70,70);background-size: auto;background-position: center;background-image:url(http://www.seedjss.ml/images/logo_light.jpg);background-repeat: no-repeat;font-size: 16px;\">
	<div style=\"float: left;\">
		<img style=\"border-radius: 100%;height: 90px;width: 90px;margin:8px 0 0 15px;\" src=\"https://www.seedjss.ml/images/logo.jpeg\">
	</div>
	<b>S.E.E.D<br>
	Society of Electrical and Electronics Department<br>
	JSS , Noida</b>
	<hr size=\"1\">
	<div style=\"padding:10px 20px 20px 20px\">
	This is a friendly reminder  about the upcoming event of <span style=\"color:rgb(110,110,255);font-weight: bolder;\">CAREER COUNSELLING SESSION &amp; Introductory Workshop on Home Automation</span>&nbsp; with guest speaker as <span style=\"color:rgb(255,60,60);font-weight: bolder;\">Mr. Vishal Soni (25<sup>th</sup> Rank - ESE 2015)</span> in association with <span style=\"color:rgb(110,110,255);font-weight: bolder;\">IES Masters</span> and hosted by <span style=\"color:rgb(110,110,255);font-weight: bolder;\">S.E.E.D</span>&nbsp;.You have been registered for this event.<br><br>
	<span style=\"color:rgb(255,60,60);font-weight: bolder;\">Venue:</span><span style=\"color:rgb(110,110,255);font-weight: bolder;\">&nbsp;AB-III , Room No: 213 Seminar Hall</span><br>
	<span style=\"color:rgb(255,60,60);font-weight: bolder;\">Date:</span><span style=\"color:rgb(110,110,255);font-weight: bolder;\">&nbsp;6<sup>th</sup> November,2017</span><br>
	<span style=\"color:rgb(255,60,60);font-weight: bolder;\">Timing:</span><span style=\"color:rgb(110,110,255);font-weight: bolder;\">&nbsp;3:45pm to 4:45pm</span><br><br>
	Please do come and be a part of this auspicious moment.
</div>
</div>
</center>";

$headers = "From: androcar@seedjss.ml\r\n"."Reply-To:electrino@jssaten.ac.in\r\n"."MIME-Version: 1.0\r\n"."Content-Type: text/html;charset=UTF-8\r\n"."X-Mailer: PHP/" . phpversion();



$email='kunwarpadmesh@yahoo.com';
$mailing=mail($email, $subject, $message, $headers);

echo "Mail sent successfully";

?>