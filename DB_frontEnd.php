<html>

<head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<style>

:root {
	--columnWidth: 95%;
	--columnHeight: 10%;
}

#table_header table {
	border: 1px solid #000000;
	width: 100%;
	height: 100%;
	table-layout: fixed;
	color: #000000;
	background-color: #c0c0c0:
	text-align: center;
}

#table_header td {
	border: 2px solid #000000;
	height: 20%;
	text-align: center;
}

#table_header thead,th {
	height: 5%;
	border: 2px solid #000000;
	background-color: #adadad;
	color:#000000;
}

#table_header tbody {
	background-color: #ebecf0;
	table-layout: fixed;
}

#table_full table {
	border: 1px solid #000000;
	width: 100%;
	height: 100%;
	table-layout: fixed;
	color: #000000;
	background-color: #ffffff:
	text-align: center;
}

#table_full td {
	border: 2px solid #000000;
	height: 20%;
	text-align: center;
}

#table_full thead,th {
	height: 5%;
	border: 2px solid #000000;
	background-color: #adadad;
	color:#000000;
}

#table_full tbody {
	background-color: #ebecf0;
	table-layout: fixed;
}

#table_cols table {
	border: 1px solid #000000;
	width: 100%;
	height: 100%;
	table-layout: fixed;
	color: #000000;
	background-color: #d3d3d3:
	text-align: center;
}

#table_cols td {
	background-color:#d3d3d3;
	border: 2px solid #000000;
	height: 20%;
	text-align: center;
}

#header {
	display:block;
	text-align:center;
	background-color:powderblue;
	border:3px solid black;
	height:10%;
}

.container {
	border:3px solid black;
	display:grid;
	gap: 0.5%;
	padding: 0.5%;
	grid-template-columns: 33% 33% 33%;
	grid-template-rows: 20% 10% 10% 55% 5%;
	background-color:powderblue;
	height: 80%;
}

.leftSide {
	border:3px solid black;
	grid-column:1;
	grid-row 1;
	text-align: center;
	vertical-align: middle;
	line-height: var(--columnHeight);
	background-color:#1c2e4a;
	padding:10%;
}

.middle {
	border:3px solid black;
	grid-column:2;
	grid-row 1;
	text-align: center;
	vertical-align: middle;
	line-height: var(--columnHeight);
	background-color:#FFFFFF;
	padding:10%;
}

.rightSide {
	border:3px solid black;
	grid-column:3;
	grid-row 1;
	text-align: center;
	vertical-align: middle;
	line-height: var(--columnHeight);
	background-color:#1c2e4a;
	padding:10%;
}

.db_header {
	border:3px solid black;
	grid-row: 2;
	grid-column: 1/-1;
}

.db_colNames {
	background-color:#d3d3d3;
	border:3px solid black;
	grid-row: 3;
	grid-column: 1/-1;
}

.db_table {
	background-color:#ffffff;
	border:3px solid black;
	grid-row: 4;
	grid-column: 1/-1;
}

.searchButton {
	grid-row: 5;
	grid-column: 2;
	color: #1c2e4a;
	display: inline-block;
	text-align: center;
}

.loginButton {
	grid-row: 5;
	grid-column: 3;
	color: #1c2e4a;
	display: inline-block;
	text-align: center;
}

.editButton {
	display: none;
	grid-row: 5;
	grid-column: 1;
	color: #1c2e4a;
	text-align: center;
}

.loginPopup {
  display: none;
  position: fixed;
  bottom: 25%;
  left: 32.5%;
  z-index: 1;
}

.login-container {
  padding: 10px;
  max-width: 400px;
  background-color: #1c2e4a;
}

.login-container input[type=text], .login-container input[type=password] {
  width: 100%;
  padding: 5px;
  margin: 5px 0px 20px 0px;
}

.login-container input[type=text]:focus, .login-container input[type=password]:focus {
  background-color: powderblue;
}

.login-container .btn {
  background-color:powderblue;
  color: black;
  padding: 15px;
  width: 100%;
  margin-bottom:10px;
}

.login-container .close {
  background-color: darkred;
}

.login-container .btn:hover {
  opacity: 0.7;
}

.deletePopup {
  display: none;
  position: fixed;
  bottom: 25%;
  left: 32.5%;
  z-index: 1;
}

.delete-container {
  padding: 10px;
  max-width: 400px;
  background-color: #1c2e4a;
}

.delete-container .btn {
  background-color:powderblue;
  color: black;
  padding: 15px;
  width: 100%;
  margin-bottom:10px;
}

.delete-container .close {
  background-color: darkred;
}

.delete-container .btn:hover {
  opacity: 0.7;
}

.editPopup {
  display: none;
  position: fixed;
  bottom: 25%;
  left: 32.5%;
  z-index: 1;
}

#chooseEntity {
	color:#FFFFFF;
	font-size:18;
}

#entity {
	margin-left:10px;
	font-size:18;
	width: 50%;
}

#chooseAttributeInit {
	color:#000000;
	font-size:18;
}

#attributeInit {
	margin-left:10px;
	font-size:18;
	width: 50%;
}

#chooseAttribute {
	visibility:hidden;
	display:none;
	color:#000000;
	font-size:18;
}

#attribute {
	visibility:hidden;
	display:none;
	margin-left:10px;
	font-size:18;
	width: 50%;
}

#enterAttribute {
	color:#FFFFFF;
	font-size:18;
}

#enterBox {
	font-size:18;
	width: 50%;
}

</style>
<body>

<div id="header">
	<h1><font color=#880808> Blood Bank<font color=#000000> Database Management System - CPSC471 G23</h1>
</div>
	
	<br></br>

<div class="container">
	<div class="leftSide">
		<label id="chooseEntity">Choose an entity</label>
		<br></br>
		<br></br>
		<br></br>
		<br></br>
		<select id="entity">
			<option value="+">-Select an Entity Type-</option>
			<option value="=,a,b,c,d">administered_to</option>
			<option value="2">advertiser</option>
			<option value="3">blood</option>
			<option value="=,e,f,g,h">blood_bank</option>
			<option value="=,z1,z2,z3,z4,z5">blood_bank_employee</option>
			<option value="6">blood_tester</option>
			<option value="7">delivered_blood_to</option>
			<option value="8">distributor</option>
			<option value="9">doctor</option>
			<option value="10">donates_to</option>
			<option value="=,i,j,k,l,m,n,o">donor</option>
			<option value="12">donor_addresses</option>
			<option value="13">donor_phones</option>
			<option value="14">donor_technician</option>
			<option value="=,p,q,r">hospital</option>
			<option value="16">hospital_employee</option>
			<option value="17">nurse</option>
			<option value="=,x1,x2">past_employer_bloodbank</option>
			<option value="19">past_employer_hospital</option>
			<option value="20">receptionist</option>
			<option value="=,i,j,k,l,m,n,o">recipient</option>
			<option value="22">recipient_addresses</option>
			<option value="23">recipient_phones</option>
			<option value="24">sends_results</option>
			<option value="25">stored_by</option>
			<option value="26">transferred_blood_to_bank</option>
			<option value="27">transferred_blood_to_distributor</option>
		</select>
	</div>

	<div class="middle">
		<label id="chooseAttribute" >Choose an Attribute</label>
		<br></br>
		<br></br>
		<br></br>
		<br></br>
		<select id="attribute">
			//If default is for some reason re-selected
			<option value="+">-First Select an Entity-</option>
			//Once a value is selected - always included
			<option value="=">-Select an Attribute-</option>
			//AdministeredTo Attributes
			<option value="a">Donor Health ID</option>
			<option value="b">Date of Donation</option>
			<option value="c">Receipient Health ID</option>
			<option value="d">Date of Administration</option>
			//Blood Bank Attributes
			<option value="e">Name</option>
			<option value="f">StorageConditions</option>
			<option value="g">Address</option>
			<option value="h">PhoneNum</option>
			//Donor and Recipient Attributes
			<option value="i">Age</option>
			<option value="j">FName</option>
			<option value="k">HealthID</option>
			<option value="l">LName</option>
			<option value="m">MName</option>
			<option value="n">ReceptionistName</option>
			<option value="o">TechnicianName</option>
			//Hospital Attributes
			<option value="p">Name</option>
			<option value="q">PhoneNum</option>
			<option value="r">Address</option>
			//Blood Bank Employee Attributes
			<option value="z1">EmployeeID</option>
			<option value="z2">Name</option>
			<option value="z3">Address</option>
			<option value="z4">PhoneNum</option>
			<option value="z5">EmployerName</option>
			//Past Employer Bloodbank Attributes
			<option value="x1">EID</option>
			<option value="x2">PastEmployer</option>
		</select>

		<label id="chooseAttributeInit">Choose an Attribute</label>
		<br></br>
		<br></br>
		<br></br>
		<br></br>
		<select id="attributeInit">
			<option value="initialize">-First Select an Entity-</option>
		</select>
	</div>
	
	<div class="rightSide">
		<label id="enterAttribute">Enter Attribute Value</label>
		<br></br>
		<br></br>
		<br></br>
		<br></br>
		<input id="enterBox" type="text">
	</div>

	<div class="db_header" id="table_header">
		<table>
			<thead>
				<tr>
					<th colspan="11">Search Results</th>
				</tr>
			</thead>
		</table>
	</div>
	
	<div class="db_colNames" id="table_cols">
	</div>
	
	<div class="db_table" id="table_full">
	</div>
	
	<div class="searchButton">
		<button type="button" onclick="search()">Search</button>
	</div>
	
	<div class="loginButton">
		<button type="button" onclick="openLoginPopup()" >Login</button>
		<button type="button" onclick="hideEdit()" >Logout</button>
	</div>
	
	<div class="editButton" id="editbtn">
		<button type="button" onclick="openEditPopup()">Edit</button>
		<button type="button">Insert</button>
		<button type="button" onclick="openDeletePopup()">Delete</button>
	</div>

	<div class="loginPopup" id="loginForm">
  		<form action="/action_page.php" class="login-container">
	    	<h1><font color=white>Login to edit database <font color=white></h1>
	    	<label for="Username"><b>Username</b></label>
	    	<input type="text" name="Username" id="userField" required>
	    	<label for="pw"><b>Password</b></label>
	    	<input type="password" name="pw" id="passwordField" required>
	    	<button type="button" class="btn" onclick="showEdit()" >Login</button>
	    	<button type="button" class="btn close" onclick="closeLoginPopup()">Close</button>
	    </form>
	</div>
	
	<div class="editPopup" id="editForm">
	</div>
	
	<div class="deletePopup" id="deleteForm">
	  	<form action="/action_page.php" class="delete-container">
	    	<h1><font color=white>Confirm: Delete row of selected cell?<font color=white></h1>
	    	<button type="button" class="btn" onclick="pushDelete()" >Delete</button>
	    	<button type="button" class="btn close" onclick="closeDeletePopup()">Close</button>
	    </form>
	</div>
</div>
<script>
//------------------------- Desc -------------------------------------//
// This method is to add events to the table after it has been made, and to
// assign selection to fields.
//------------------------- Code -------------------------------------//
	var currentTable = null;
	var currentColumns = [];
	var selectedColumn = null;
	var selectedCell = null;
	var prevCell = null;
	var selectedRow = null;
	var rowValues = [];
	const editForm = document.getElementById("editForm");

	function addTableEvents(){
		const fullTbody = document.querySelector('#table_full tbody');
		fullTbody.addEventListener(
			'click',
			(e) => {
				const div = document.getElementById('table_full');
				selectedCell = e.target.closest('td');
				if(prevCell != null){
					prevCell.style.backgroundColor = '#ebecf0';
				}
				prevCell = selectedCell;
				if(!selectedCell) {return;}
				selectedCell.style.backgroundColor='#636363';
				selectedRow = selectedCell.parentElement;
				var rowArray = selectedRow.getElementsByTagName("td");
				for(let i = 0; i < rowArray.length; i++){
					rowValues[i] = rowArray[i].innerHTML;
				}
				buildEditPopup(selectedCell.cellIndex);
			}
		)
	}

//------------------------- Desc -------------------------------------//
// This method is to show a popup to edit a particular cell, allowing for a
// particular attribute to be edited.
//------------------------- Code -------------------------------------//
	function buildEditPopup(colIndex){
		selectedColumn = currentColumns[colIndex];
		var editInner = ' '
		editInner += "<form action=\"/action_page.php\" class=\"edit-container\" style=\"padding: 10px; max-width: 400px; background-color: #1c2e4a;\">";
		editInner += "<h1><font color=white>Edit cell <font color=white></h1>";
		editInner += "<label for=\"CellName\"><b>"+selectedColumn+"</b></label>";
		editInner += "<input type=\"text\" name=\"editTo\" id=\"editField\" style=\"width: 100%; padding: 5px; margin: 5px 0px 20px 0px; background-color:powerblue;\">";
		// Adding buttons to confirm edit or close the popup
		editInner += "<button type=\"button\" class=\"btn\" style=\"background-color:powderblue; color: black; padding: 15px; width: 100%; margin-bottom:10px;\" onclick=\"pushEdit()\">Edit</button>";
		editInner += "<button type=\"button\" class=\"btn close\" onclick=\"closeEditPopup()\" style=\"background-color: darkred; color: black; padding: 15px; width: 100%; margin-bottom:10px;\">Close</button>";
		editInner += "</form>";
		editForm.innerHTML = editInner;
	}	

	function openEditPopup(){
		if(selectedCell == null){
			return;
		}
		editForm.style.display = "block";
	}
	
	function closeEditPopup(){
		selectedCell.style.backgroundColor='#ebecf0';
		selectedCell = null;
		document.getElementById("editForm").style.display = "none";
	}
	
	function pushEdit(){
		var editInp = document.getElementById("editField");
		var editEntr = editInp.value;
		$.ajax({
			method: 'POST',
			url: 'runEdit.php',
			data: { par1: currentTable, par2: selectedColumn, par3: editEntr, par4: currentColumns, par5: rowValues },
			success: function(data){
				if(data != "Successful")
					alert(data);
				else{
					closeEditPopup();
					// Search for the same table again to reveal the change.
					entitySelection = currentTable;
					attributeSelection = null;
					attributeEntry = null;
					search();
				}
			}
		});
	}
	
//------------------------- Desc -------------------------------------//
// This method is to handle deletion of rows from the database.
//------------------------- Code -------------------------------------//
	function openDeletePopup(){
		if(selectedCell == null){
			return;
		}
		document.getElementById("deleteForm").style.display="inline-block";
	}	
	
	function closeDeletePopup(){
		document.getElementById("deleteForm").style.display="none";
	}	
	
	function pushDelete(){
		$.ajax({
			method: 'POST',
			url: 'runDelete.php',
			data: { par1: currentTable, par2: currentColumns, par3: rowValues },
			success: function(data){
				if(data != "Successful")
					alert(data);
				else{
					closeDeletePopup();
					// Search for the same table again to reveal the change.
					entitySelection = currentTable;
					attributeSelection = null;
					attributeEntry = null;
					search();
				}
			}
		});	
	}
	
//------------------------- Desc -------------------------------------//
// This method is to handle login button and display the edit button
// if login is correct. Also to remove the button if logging out.
//------------------------- Code -------------------------------------//
	//script for handling login button
	//change to type="submit" for php for Login
	const passwordInp = document.getElementById('passwordField');
	const userInp = document.getElementById('userField');
	var username = null;
	var password = null;
	
	function openLoginPopup() {
	  document.getElementById("loginForm").style.display = "block";
	}

	function closeLoginPopup() {
	  document.getElementById("loginForm").style.display = "none";
	}

	function showEdit() {
		$.ajax({
			method: 'POST',
			url: 'runSelect.php',
			data: { par1: 'authorizedlogins', par2: username, par3: password },
			success: function(data){
				if(data.length > 0){
					closeLoginPopup();
					document.getElementById("editbtn").style.display="inline-block";
				}
				else{
					alert("Username or password not found.");
				}
			},
			dataType:"json"
		});	
	}
	
	function hideEdit() {
		document.getElementById("editbtn").style.display = "none";
	}
//------------------------- Desc -------------------------------------//
// This method is to update the display table based on a search result.
// It will do so by updating the db_table div.
//------------------------- Code -------------------------------------//
	// Setting fields to hold dropdown menu information
	var entitySelection = null;
	var attributeSelection = null;
	var attributeEntry = null;
	var queryResult = null;
	// Getting the db_table div so that it can be updated. Also setting
	// a variable to track the new innerHTML to be inserted.
	var first = true;
	const tableDiv = document.getElementById('table_full');
	var tableInner = ' ';
	const tableColDiv = document.getElementById('table_cols');
	var colInner = ' ';
	// This function will make a new table from the search results.
	// Search results will be a 2d array.
	function createTable(searchResults){
		currentColumns = [];
		first = true;
		tableInner = ' ';
		colInner = ' ';
		tableInner += "<table>";
		colInner += "<table>";
		colInner += "<tr>";
		// Making rows based on searchResults length.
		for(let i = 0; i < searchResults.length; i++){
			tableInner += "<tr>";
			// Making columns based on length of each searchResults
			// result. These should be constant.
			for(let j = 0; j < Object.keys(searchResults[i]).length/2; j++){
				// Adding a column containing the search result attribute.
				tableInner += "<td>";
				tableInner += searchResults[i][j];
				tableInner += "</td>";
				// Adding the key to the header.
				if(first){
					colInner += "<td>";
					colInner += Object.keys(searchResults[i])[j + Object.keys(searchResults[i]).length/2];
					colInner += "</td>";
					currentColumns[j] = Object.keys(searchResults[i])[j + Object.keys(searchResults[i]).length/2];
				}
			}
			first = false;
			tableInner += "</tr>";
		}
		tableInner += "</table>";
		colInner += "</tr>";
		colInner += "</table>";
		tableDiv.innerHTML = tableInner;
		tableColDiv.innerHTML = colInner;
		currentTable = entitySelection;
		addTableEvents();
	}
//------------------------- Desc -------------------------------------//
// This method is to search the database. I will only be implementing test
// values for now. Somebody else should implement an sql SELECT to search for the
// actual DB results.
//------------------------- Code -------------------------------------//
	// Test value
	function search(){	
		$.ajax({
			method: 'POST',
			url: 'runSelect.php',
			data: { par1: entitySelection, par2: attributeSelection, par3: attributeEntry },
			success: function(data){
				createTable(data);
			},
			dataType:"json"
		});	
	}
//------------------------- Desc -------------------------------------//
// This method is to update the drop down menus so that they will only 
// show the appropriate attributes after an entity type is selected.
//------------------------- Code -------------------------------------//
	// Setting boolean flag, as the first part of event handler below
	// should only occur once
	var isFirst = true;

	// Gathering element info
	const attr = document.getElementById('attribute');
	const attrOptions = [...attr.children];
	const attrLabel = document.getElementById('chooseAttribute');
	const entityDropdown = document.getElementById('entity');
	const enterAttr = document.getElementById('enterBox');

	const attr2 = document.getElementById('attributeInit');
	const attr2Label = document.getElementById('chooseAttributeInit');

	// Adding event handler to dynamically update the dropdown menus
	entityDropdown.addEventListener(
  		'change',
  		(e) => {
			if (isFirst){
				// Hide initial attribute dropdown and label
    			attr2.style.visibility = 'hidden';
				attr2.style.display = 'none';
				attr2Label.style.visibility = 'hidden';
				attr2Label.style.display = 'none';
				// Show and position new attribute dropdown and label
				attr.style.visibility = 'visible';
				attr.style.display = 'inline';
				attrLabel.style.visibility = 'visible';
				attrLabel.style.display = 'inline';
				// Set flag to false so this won't happen again
				isDone = false;
			}
			entitySelection = entity.options[entity.selectedIndex].text;
			if(entitySelection == "-Select an Entity Type-"){
				entitySelection = null;
			}
			//Update dropdown elements
			attr.innerHTML = attrOptions.filter(
      			option => event.target.value.includes(option.value)
    			).map(option => option.outerHTML).join('');
  		}
	)
	// Adding event handlers to collect other info
	attr.addEventListener(
		'change',
		(e) => {
			attributeSelection = attr.options[attr.selectedIndex].text;
			if(attributeSelection == "-Select an Attribute-"){
				attributeSelection = null;
			}
		}
	)
	enterAttr.addEventListener(
		'input',
		(e) => {
			attributeEntry = enterAttr.value;
		}
	)
	
	userInp.addEventListener(
		'input',
		(e) => {
			username = userInp.value;
		}
	)
	
	passwordInp.addEventListener(
		'input',
		(e) => {
			password = passwordInp.value;
		}
	)
</script>

</body>
</html>