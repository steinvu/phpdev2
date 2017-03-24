function getData(str) {
	if (str == "") {
		document.getElementById("txtsearchresult").innerHTML = "";
		return;
	} else { 
		if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
		} else {
			// code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("txtsearchresult").innerHTML = this.responseText;
			}
		};
		xmlhttp.open("GET","php/getuserdata.php?q="+str,true);
		xmlhttp.send();
	}
}


function getDbData(str) {
	if (str == "") {
		document.getElementById("txtdbsearchresult").innerHTML = "";
		return;
	} else { 
		if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
		} else {
			// code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("txtdbsearchresult").innerHTML = this.responseText;
			}
		};
		xmlhttp.open("GET","php/getuserdata.php?qdb="+str,true);
		xmlhttp.send();
	}
}


function showUser(str) {
	if (str == "") {
		document.getElementById("txtselectionresult").innerHTML = "";
		return;
	} else { 
		if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
		} else {
			// code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("txtselectionresult").innerHTML = this.responseText;
			}
		};
		xmlhttp.open("GET","php/getuserdata.php?selection="+str,true);
		xmlhttp.send();
	}
}


/*
function populatedropdown(action) {

alert (document.getElementById("dbdropdowncontents").innerHTML);
	//alert ('welcome!');
	
	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else {
		// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("dbdropdowncontents").innerHTML = this.responseText;
		}
	};
	xmlhttp.open("GET","getuserdata.php?dbdropdown="+action,true);
	xmlhttp.send();

}
*/

/* WERKT
function populatedropdown(action){
	//alert (action);
	document.getElementById("dbuserlist").innerHTML = "<option value='1'>Peter Griffin</option><option value='2'>Lois Griffin</option>";
						
}
*/

function start(action){
	if (action== "site") {
		//alert ('nothing to do');
	}				
}


function showUserDetail(str){
alert ('handle selection TO DO');
}


 function checkAll() {
     var checkboxes = document.getElementsByTagName('input');
	 var val = null;
     for (var i = 0; i < checkboxes.length; i++) {
         if (checkboxes[i].type == 'checkbox') {
             if (val === null) val = checkboxes[i].checked;
             checkboxes[i].checked = val;
         }
     }
 }