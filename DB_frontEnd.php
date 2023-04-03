<html>

<head>
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
	background-color: #c0c0c0:
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
	grid-template-rows: 20% 10% 65% 5%;
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

.db_table {
	border:3px solid black;
	grid-row: 3;
	grid-column: 1/-1;
}

.searchButton {
	grid-row: 4;
	grid-column: 2;
	color: #1c2e4a;
	display: inline-block;
	text-align: center;
}

.loginButton {
	grid-row: 4;
	grid-column: 3;
	color: #1c2e4a;
	display: inline-block;
	text-align: center;
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
	<h1>CPSC471 Final Project - G23<font color=#880808> Blood Bank<font color=#000000> Database Management System</h1>
</div>
	
	<br></br>

<div class="container">
	<div class="leftSide">
		<label id="chooseEntity">Choose an entity:</label>
		<select id="entity">
			<option value="+">-Select an Entity Type-</option>
			<option value="a,b,c,d">Administration of Blood</option>
			<option value="2">Advertiser</option>
			<option value="3">Blood</option>
			<option value="4">Blood Bank</option>
			<option value="5">Blood Bank Employees</option>
			<option value="6">Blood Bank Receptionist</option>
			<option value="7">Blood Tester</option>
			<option value="8">Blood Storage</option>
			<option value="9">Distributor</option>
			<option value="10">Delivery of Blood</option>
			<option value="11">Doctor</option>
			<option value="12">Donation</option>
			<option value="13">Donation Technician</option>
			<option value="e,f,g,h,i,j,k">Donor</option>
			<option value="15">Donor Addresses</option>
			<option value="16">Donor Contact Information</option>
			<option value="17">Hospital</option>
			<option value="18">Hospital Employees</option>
			<option value="19">Nurse</option>
			<option value="20">Past Employers of Blood Bank Employees</option>
			<option value="21">Past Employers of Hospital Employees</option>
			<option value="e,f,g,h,i,j,k">Recipient</option>
			<option value="23">Recipient Addresses</option>
			<option value="24">Recipient Contact Information</option>
		</select>
	</div>

	<div class="middle">
		<label id="chooseAttribute" >Choose an Attribute:</label>
		<select id="attribute">
			//If default is for some reason re-selected
			<option value="+">-First Select an Entity-</option>
			//AdministeredTo Attributes
			<option value="a">Donor Health ID</option>
			<option value="b">Date of Donation</option>
			<option value="c">Receipient Health ID</option>
			<option value="d">Date of Administration</option>
			//Donor and Recipient Attributes
			<option value="e">Age</option>
			<option value="f">FName</option>
			<option value="g">HealthID</option>
			<option value="h">LName</option>
			<option value="i">MName</option>
			<option value="j">ReceptionistName</option>
			<option value="k">TechnicianName</option>
		</select>

		<label id="chooseAttributeInit">Choose an Attribute:</label>
		<select id="attributeInit">
			<option value="initialize">-First Select an Entity-</option>
		</select>
	</div>
	
	<div class="rightSide">
		<label id="enterAttribute">Enter Attribute Value:</label>
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
	
	<div class="db_table" id="table_full">
	</div>
	
	<div class="searchButton">
		<button type="button" onclick="search()">Search</button>
	</div>
	
	<div class="loginButton">
		<button type="button">Login</button>
	</div>
</div>

<script>
//------------------------- Desc -------------------------------------//
// This method is to update the display table based on a search result.
// It will do so by updating the db_table div.
//------------------------- Code -------------------------------------//
	// Getting the db_table div so that it can be updated. Also setting
	// a variable to track the new innerHTML to be inserted.
	const tableDiv = document.getElementById('table_full');
	var tableInner = ' ';
	// This function will make a new table from the search results.
	// Search results will be a 2d array.
	function createTable(searchResults){
		window.alert("1");
		tableInner += "<table>";
		// Making rows based on searchResults length.
		for(let i = 0; i < searchResults.length; i++){
			tableInner += "<tr>";
			// Making columns based on length of each searchResults
			// result. These should be constant.
			for(let j = 0; j < searchResults[i].length; j++){
				// Adding a column containing the search result attribute.
				tableInner += "<td>";
				tableInner += searchResults[i][j];
				tableInner += "</td>";
			}
			tableInner += "</tr>";
		}
		tableInner += "</table>";
		tableDiv.innerHTML = tableInner;
	}
//------------------------- Desc -------------------------------------//
// This method is to search the database. I will only be implementing test
// values for now. Somebody else should implement an sql SELECT to search for the
// actual DB results.
//------------------------- Code -------------------------------------//
	// Test value
	var res = [["1.1", "1.2", "1.3", "1.4"],["2.1", "2.2", "2.3", "2.4"]];
	function search(){
		try{	
			createTable(res);
		}catch(error){
			window.alert(error);
		}
	}
</script>

<script>
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

	const attr2 = document.getElementById('attributeInit');
	const attr2Label = document.getElementById('chooseAttributeInit');

	// Adding event handler to dynamically update the dropdown menus
	document.getElementById('entity').addEventListener(
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
			//Update dropdown elements
			attr.innerHTML = attrOptions.filter(
      			option => event.target.value.includes(option.value)
    			).map(option => option.outerHTML).join('');
  		})
</script>

</body>
</html>