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

.insertPopup {
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
			<option value="=">administered_to</option>
			<option value="=">advertiser</option>
			<option value="=">blood</option>
			<option value="=">blood_bank</option>
			<option value="=">blood_bank_employee</option>
			<option value="=">blood_tester</option>
			<option value="=">delivered_blood_to</option>
			<option value="=">distributor</option>
			<option value="=">doctor</option>
			<option value="=">donates_to</option>
			<option value="=">donor</option>
			<option value="=">donor_addresses</option>
			<option value="=">donor_phones</option>
			<option value="=">donor_technician</option>
			<option value="=">hospital</option>
			<option value="=">hospital_employee</option>
			<option value="=">nurse</option>
			<option value="=">past_employer_bloodbank</option>
			<option value="=">past_employer_hospital</option>
			<option value="=">receptionist</option>
			<option value="=">recipient</option>
			<option value="=">recipient_addresses</option>
			<option value="=">recipient_phones</option>
			<option value="=">sends_results</option>
			<option value="=">stored_by</option>
			<option value="=">transferred_blood_to_bank</option>
			<option value="=">transferred_blood_to_distributor</option>
		</select>
	</div>

	<div class="middle">
		<label id="chooseAttribute" >Choose an Attribute</label>
		<br></br>
		<br></br>
		<br></br>
		<br></br>
		<select id="attribute">
			//Once a value is selected - always included
			<option value="=">-Select an Attribute-</option>
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
		<button type="button" onclick="prevTable()">Previous Table</button>
		<button type="button" onclick="searchCols()">Search</button>
		<button type="button" onclick="nextTable()">Next Table</button>
	</div>
	
	<div class="loginButton">
		<button type="button" onclick="openLoginPopup()" >Login</button>
		<button type="button" onclick="hideEdit()" >Logout</button>
	</div>
	
	<div class="editButton" id="editbtn">
		<button type="button" onclick="openEditPopup()">Edit</button>
		<button type="button" onclick="openInsertPopup()">Insert</button>
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
	
	<div class="insertPopup" id="insertForm">
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
	var insertFields = [];
	const editForm = document.getElementById("editForm");
	const insertForm = document.getElementById("insertForm");

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
// This method is to show a popup to insert into a particular table.
//------------------------- Code -------------------------------------//
	function buildInsertPopup(){
		var insertInner = ' ';
		insertInner += "<form action=\"/action_page.php\" class=\"insert-container\" style=\"padding: 10px; max-width: 400px; background-color: #1c2e4a;\">";
		insertInner += "<h1><font color=white>Insert Into " + currentTable + "<font color=white></h1>";
		for(let q = 0; q < currentColumns.length; q++){	
			insertInner += "<label for=\"CellName\"><b>"+currentColumns[q]+"</b></label>";
			insertInner += 	"<br></br>";
			var tmpId = "insertField"+q;
			insertInner += "<input type=\"text\" name=\"insertValue\" id=\"" + tmpId + "\" style=\"width: 100%; padding: 5px; margin: 5px 0px 20px 0px; background-color:powerblue;\">";
			insertFields[q] = tmpId;
		}
		insertInner += "<button type=\"button\" class=\"btn\" style=\"background-color:powderblue; color: black; padding: 15px; width: 100%; margin-bottom:10px;\" onclick=\"pushInsert()\">Insert</button>";
		insertInner += "<button type=\"button\" class=\"btn close\" onclick=\"closeInsertPopup()\" style=\"background-color: darkred; color: black; padding: 15px; width: 100%; margin-bottom:10px;\">Close</button>";
		insertInner += "</form>";
		insertForm.innerHTML = insertInner;
	}	
	
	function openInsertPopup(){
		insertForm.style.display = "block";
	}

	function closeInsertPopup(){
		insertForm.style.display = "none";
	}
	
	function pushInsert(){
		var insertInp = [];
		for(let m = 0; m < insertFields.length; m++){
			insertInp[m] = document.getElementById(insertFields[m]).value;
		}
		$.ajax({
			method: 'POST',
			url: 'runInsert.php',
			data: { par1: currentTable, par2: insertInp },
			success: function(data){
				if(data != "Successful")
					alert(data);
				else{
					closeInsertPopup();
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
	const attrDiv = document.getElementById('attribute');
	var allTables = [];
	var currentTableId = 0;
	// This function will build the attribute selection dropdown based on the
	// columns in the table selected.
	function buildAttributeSelection(){
		var attrDivInner = ' ';
		attrDivInner += "<option value=\"=\">-Select an Attribute-</option>";
		for(let p = 0; p < currentColumns.length; p++){
			attrDivInner += "<option value=\"=\">"+currentColumns[p]+"</option>";
		}
		attrDiv.innerHTML = attrDivInner;
	}
	// This function will put the column names, even if the search returns
	// no results.
	function createColumnHeaders(colArray){
		currentColumns = [];
		colInner = ' ';
		colInner += "<table>";
		colInner += "<tr>";
		for(let n = 0; n < colArray.length; n++){
			colInner += "<td>";
			colInner += colArray[n][0];
			currentColumns[n] = colArray[n][0];
			colInner += "</td>";
		}
		colInner += "</tr>";
		colInner += "</table>";
		buildAttributeSelection();
	}
	
	// This function will make a new table from the search results.
	// Search results will be a 2d array.
	function createTable(searchResults,id,flag){
		if(flag){
			tableInner = ' ';
		}
		tableInner += "<table id=\""+id+"\" style=\"display: none\">";
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
			}
			tableInner += "</tr>";
		}
		tableInner += "</table>";
		tableDiv.innerHTML = tableInner;
		tableColDiv.innerHTML = colInner;
		currentTable = entitySelection;
		buildInsertPopup();
		addTableEvents();
	}
//------------------------- Desc -------------------------------------//
// This method is to search the database. I will only be implementing test
// values for now. Somebody else should implement an sql SELECT to search for the
// actual DB results.
//------------------------- Code -------------------------------------//
	function searchCols(){
		$.ajax({
			method: 'POST',
			url: 'runSelectCols.php',
			data: { par1: entitySelection },
			success: function(data){
				createColumnHeaders(data);
				search();
			},
			dataType:"json"
		});	
	}
	
	function search(){	
		$.ajax({
			method: 'POST',
			url: 'runSelect.php',
			data: { par1: entitySelection, par2: attributeSelection, par3: attributeEntry },
			success: function(data){
				var id = "table";
				var lowerBound = 0;
				var upperBound = 5;
				var isFirst = true;
				if(data.length <= 5){
					createTable(data,"onlyTable",isFirst);
					document.getElementById("onlyTable").style.display = "table";
				}
				else{
					var idNum = 0;
					while(lowerBound <= data.length-1){
						if(upperBound > data.length -1){
							upperBound = data.length;
						}
						var newTable = data.slice(lowerBound,upperBound);
						var tmpId = id + "" + idNum;
						createTable(newTable,tmpId,isFirst);
						allTables[idNum] = tmpId;
						lowerBound += 5;
						upperBound += 5;
						idNum++;
						isFirst = false;
					}
					document.getElementById(allTables[0]).style.display = "table";
					currentTableId = 0;
				}
			},
			dataType:"json"
		});	
	}
	
	function nextTable(){
		if(currentTableId == allTables.length - 1){
			return;
		}
		else{
			document.getElementById(allTables[currentTableId]).style.display = "none";
			currentTableId++;
			document.getElementById(allTables[currentTableId]).style.display = "table";
		}
	}
	
	function prevTable(){
		if(currentTableId == 0){
			return;
		}
		else{
			document.getElementById(allTables[currentTableId]).style.display = "none";
			currentTableId--;
			document.getElementById(allTables[currentTableId]).style.display = "table";
		}
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
			attributeSelection = null;
			attributeEntry = null;
			if(entitySelection == "-Select an Entity Type-"){
				entitySelection = null;
			}
			searchCols();
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