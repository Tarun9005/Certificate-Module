<html>
<head>
	<title>
		Certificate Module Generator
	</title>
	<style>

		/* width */
		::-webkit-scrollbar {
			width: 10px;
		}

		/* Track */
		::-webkit-scrollbar-track {
			box-shadow: inset 0 0 5px grey; 
			border-radius: 10px;
		}

		/* Handle */
		::-webkit-scrollbar-thumb {
			background: #654321; 
			border-radius: 10px;
		}

		/* Handle on hover */
		::-webkit-scrollbar-thumb:hover {
			background: #B5651D; 
		}
		

	</style>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</head>
<body>

	<nav>
		<div class="nav-wrapper #5d4037 brown darken-2">
			<a href="#" class="brand-logo center" style="font-family: 'Roboto', sans-serif;">Certificate Module Generator</a>
			

			<img src="logo2.png" style="margin-left: 450px; max-height: 80px;max-height: 60px; margin-top: 5px;">
			<img src="logo2.png" style="margin-left: 490px; max-height: 80px;max-height: 60px; margin-top: 5px;">
			
		</div>
	</nav>

	<div class="container" >

		<div class="row">
			<br>

			<h4 class="col s3">Enter the name:</h4>
			<div class="input-field col s6">
				<input id="name" type="text" name="name" class="validate">
				
			</div>
		</div>
		<!-- for branch input -->
		<div class="row">


			<h4 class="col s3">Enter branch:</h4>
			<div class="input-field col s6">
				<input id="branch" type="text" name="branch" class="validate">
				
			</div>
		</div>

		<!-- for button -->

		<div class="row">
			<br>

			<button class="btn waves-effect waves-light col s2 offset-s5 #6d4c41 brown darken-1" onclick="myFunction('no','no')" style="font-family: 'Roboto', sans-serif;" id="seed">Generate Image</button>
		</div>



		<div class="row">
			<div class="col s1" style="margin-top: 200px;">

				<button class="#6d4c41 brown darken-1" onclick="myFunction('yes','no')" id="square" style="display: none;"><i class="medium material-icons">arrow_back</i></button>
			</div>

			<img src="ipimage.jpg" class="col s10" id="demo" width="880" height="593">

			<div class="col s1" style="margin-top: 200px;">
				<button class="#6d4c41 brown darken-1" onclick="myFunction('no','yes')" id="rectangle" style="display: none;"><i class="medium material-icons">arrow_forward</i></button>
			</div>

			

		</div>
		<!-- for finalize image -->
		<div class="row">
			<br>

			<button class="btn waves-effect waves-light col s2 offset-s5 #6d4c41 brown darken-1" style="font-family: 'Roboto', sans-serif; display: none;" id="circle">Finalize Image</button>
		</div>

		<div class="row">
			<br>

			<h4 class="col s3" style="display: none;" id="element">Enter the email:</h4>
			<div class="input-field col s6" id="elements" style="display: none;">
				<form action="mail.php" method="GET">
				<input id="email" type="text" name="email" class="validate">
				</form>
			</div>
		</div>
		<!-- send email button -->

		<div class="row">
			<br>

			<button class="btn waves-effect waves-light col s2 offset-s5 #6d4c41 brown darken-1" style="font-family: 'Roboto', sans-serif; display: none;" id="elementss">Send Email</button>
		</div>



		

	</div>
	<script type="text/javascript">
		var str2="no";



		document.getElementById("circle").onclick = function() { 

			document.getElementById("circle").style.display = "none"; 
			document.getElementById("square").style.display = "none";
			document.getElementById("rectangle").style.display = "none";
			document.getElementById("element").style.display = "block";
			document.getElementById("elements").style.display = "block";
			document.getElementById("elementss").style.display = "block";

		} 
		






		var xhttp = new XMLHttpRequest();
		function myFunction(l,r) 

		{
			if(str2==l && str2==r) {

				document.getElementById("seed").style.display = "none";
				document.getElementById("square").style.display = "block";
				document.getElementById("rectangle").style.display = "block";
				document.getElementById("circle").style.display = "block";
			// body...
		}




		var namee=document.getElementById("name").value;
		var branchh=document.getElementById("branch").value;

		xhttp.onreadystatechange = function() 
		{
			if (this.readyState == 4 && this.status == 200) 
			{
				document.getElementById("demo").src ="opimage.jpg?t=" + new Date().getTime();
			}
		};
		xhttp.open("GET", "run.php?name="+namee+"&branch="+branchh+"&left="+l+"&right="+r, true);
		xhttp.send();
	}
</script>
</body>

</html>