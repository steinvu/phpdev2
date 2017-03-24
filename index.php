<!DOCTYPE html>	<!-- In HTML5 there is only one doctype-->

<html>
	<head>
		<meta charset="UTF-8">	<!--the charset attribute specifies the character encoding for the HTML document-->
		<link rel="stylesheet" type="text/css" href="./css/main.css">
		<script type="text/javascript" src="./js/handleinput.js"></script> <!--type : The older HTML4 standard required this attribute to be set, but HTML5 allows it to be absent-->
	</head>
	
	<body onload="start('site')">
	
		<h1 class="maintitle">Publiato flux test site</h1>

		<?php
		//check if config file exists if yes -> parse config

			if (file_exists("./config/siteconfig.ini")){
			
				echo "
						<script type=\"text/javascript\">
							//alert('siteconfig.ini file exists!');
						</script>
					";
					
				$config[]=parse_ini_file("./config/siteconfig.ini", true);
				
			} else {
				echo "config file missing";
			}
			
		//build checkboxes for all fluxes in config:
			echo '<form action="#" method="post">
				<input type="checkbox" onchange="checkAll()" name="chk[]" /><label>Select/Unselect All</label>
				<br />
				';
			
				foreach ($config[0] as $node=>$node_element){

					foreach ($node_element as $property=>$fluxvalue){
		
						if (preg_match( '/^flux.*/', $node)){	//look for node that starts with "flux"... use regex, to get all flux* nodes
							if ($property == 'code'){ //look for property "code"
								echo '<input type="checkbox" name="flux_checked_list[]" value="' . $fluxvalue . '"><label>' . $fluxvalue . '</label><br/>';
							}}}}

			echo '<input type="submit" name="submit" value="Submit"/>  
				  </form>'
				 ;
				 
		//handle submit
			if(isset($_POST['submit'])){//to run PHP script on submit
				if(!empty($_POST['flux_checked_list'])){
					// Loop to store and display values of individual checked checkbox.
					foreach($_POST['flux_checked_list'] as $selected){
						echo $selected."</br>";
					}}}			
		?>
	
	</body>
</html>