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
							}
						}
					}
				}

			echo '<input type="submit" name="submit" value="Submit"/>  
				  </form>'
				 ;
				 
		//handle submit
			if(isset($_POST['submit'])){//to run PHP script on submit
				if(!empty($_POST['flux_checked_list'])){
					// Loop to store and display values of individual checked checkbox.
					foreach($_POST['flux_checked_list'] as $selected){
						echo $selected."</br>";
					}
				}
			}			
			
		?>
		
			
		<!--
			
			foreach ($config[0] as $node=>$node_element){
		
				foreach ($node_element as $property=>$value){
	
					echo $node . " : " . $property . " " . $value . "<br />";
				}
			}
			
			echo "<br />";
	
//if ($order_info=='Quatro*') 
//use
//if( preg_match( '/^Quatro.*/', $order_info))
	
			foreach ($config[0] as $node=>$node_element){
		
				foreach ($node_element as $property=>$value){
	
					if (preg_match( '/^flux.*/', $node)){	//look for node that starts with "flux"... use regex
						echo $property . ": " . $value . "<br />";
					}
				}
			}		
	
		
		Zoek tekst:
		<p class="indent">
			<input id="txtsearch" type="text" onkeyup="getData(this.value)" placeholder="Search text">
		</p>
		
		<br />
		
		<div id="txtsearchresult" class="response" >
			Info will be listed here...
		</div>
		
		<br />
		
		Zoek in Database:
		<p class="indent">
			<input id="txtsearchdb" type="text" onkeyup="getDbData(this.value)" placeholder="Search DB for lastname">
		</p>
		
		<br>
		
		<div id="txtdbsearchresult" class="response">
			DB info will be listed here...
		</div>

		
		<h1 id="special1">Select from dropdowns:</h1>
		
		<p class="customtxt">Predefined list:</p>
		<form>
			<select id="userlist" onchange="showUser(this.value)">
				<option value="">Select a person:</option>
				<option value="1">Peter Griffin</option>
				<option value="2">Lois Griffin</option>
				<option value="3">Joseph Swanson</option>
				<option value="4">Glenn Quagmire</option>
			</select>
		</form>
		
		<div id="txtselectionresult" class="response">
			Selection info will be listed here...
		</div>
		
		<br/><br/>
		
		<p class="customtxt">DB list:</p>
		<form>
			<select id="dbuserlist" onchange="showUserDetail(this.value)">	
			</select>
		</form>
		
		<div id="txtselectionresult" class="response">
			Selection info will be listed here...
		</div>		
		
	<div>
			<select multiple id="multilist1">
			  <option value="1: volvo">Volvo</option>
			  <option value="2: saab">Saab</option>
			  <option value="3: opel">Opel</option>
			  <option value="4: audi">Audi</option>
			</select> 
			
				<button onclick="func()">Try it</button>

				<script>
				function func() {
					//alert("I am an alert box!");
					alert(document.getElementById("multilist1").value);
				}
				</script>
			
		</div>
		-->
			
	
	</body>
</html>