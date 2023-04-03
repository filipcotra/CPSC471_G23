<html>

<head>
<style>

:root {
	--columnWidth: 95%;
	--columnHeight: 10%;
}

table {
	border: 1px solid #000000;
	width: 100%;
	height: 100%;
	table-layout: fixed;
	color: #000000;
	background-color: #c0c0c0:
	text-align: center;
}

td {
	border: 2px solid #000000;
	height: 20%;
	text-align: center;
}

thead,th {
	height: 5%;
	border: 2px solid #000000;
	background-color: #adadad;
	color:#000000;
}

tbody {
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
	grid-template-rows: 20% 75%;
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

.db_table {
	border:3px solid black;
	grid-row: 2;
	grid-column: 1/-1;
}

.searchButton {
	grid-row: 3;
	grid-column: 2;
	color: #1c2e4a;
	display: inline-block;
	text-align: center;
}

.loginButton {
	grid-row: 3;
	grid-column: 3;
	color: #1c2e4a;
	display: inline-block;
	text-align: center;
}

.editButton {
	display: none;
	grid-row: 3;
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

	<div class="db_table">
		<table>
			<thead>
				<tr>
					<th colspan="11">Table Header</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Name 1</td>
					<td>Name 2</td>
					<td>Name 3</td>
					<td>Name 4</td>
					<td>Name 5</td>
					<td>Name 6</td>
					<td>Name 7	</td>
					<td>Name 8</td>
					<td>Name 9</td>
					<td>Name 10</td>
					<td>Name 11</td>
				</tr>
				<tr>
					<td>Column 1</td>
					<td>Column 2</td>
					<td>Column 3</td>
					<td>Column 4</td>
					<td>Column 5</td>
					<td>Column 6</td>
					<td>Column 7</td>
					<td>Column 8</td>
					<td>Column 9</td>
					<td>Column 10</td>
					<td>Column 11</td>
				</tr>
				<tr>
					<td>Column 1</td>
					<td>Column 2</td>
					<td>Column 3</td>
					<td>Column 4</td>
					<td>Column 5</td>
					<td>Column 6</td>
					<td>Column 7</td>
					<td>Column 8</td>
					<td>Column 9</td>
					<td>Column 10</td>
					<td>Column 11</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="searchButton">
		<button type="button">Search</button>
	</div>
	<div class="loginButton">
		<button type="button" onclick="openLoginPopup()" >Login</button>
	</div>
	<div class="editButton" id="editbtn">
		<button type="button">Edit</button>
	</div>


	<div class="loginPopup" id="loginForm">
  		<form action="/action_page.php" class="login-container">
	    	<h1><font color=white>Login to edit database <font color=white></h1>
	    	<label for="Username"><b>Username</b></label>
	    	<input type="text" name="Username" required>
	    	<label for="pw"><b>Password</b></label>
	    	<input type="password" name="pw" required>
	    	<button type="button" class="btn" onclick="showEdit()" >Login</button>
	    	<button type="button" class="btn close" onclick="closeLoginPopup()">Close</button>
	    </form>
	</div>

<script>
	//script for handling login button
	//change to type="submit" for php for Login
	function openLoginPopup() {
	  document.getElementById("loginForm").style.display = "block";
	}

	function closeLoginPopup() {
	  document.getElementById("loginForm").style.display = "none";
	}

	function showEdit() {
		closeLoginPopup();
		document.getElementById("editbtn").style.display="inline-block";
	}
</script>

</div>

<script>
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

	document.openLoginPage().addEventListener(
		)
</script>


</body>
</html>