function addRow(tableID) {
	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;
	if(rowCount < 5){                            // limit the user from creating fields more than your limits
		var row = table.insertRow(rowCount); //insert row
		var colCount = table.rows[0].cells.length; // count columns for table row index of zero?, length of cells
		for(var i=0; i<colCount; i++) { // min/max stuff
			var newcell = row.insertCell(i); // 
			newcell.innerHTML = table.rows[0].cells[i].innerHTML; // gets HTML content of element. so contents of cell above and increment form stuff...
		}
	}else{
		 alert("Maximum Passenger per ticket is 5");
			   
	}
}

function deleteRow(tableID) {
	var table = document.getElementById(tableID); // get element by id
	var rowCount = table.rows.length; // assign length of table to rowCount
	for(var i=0; i<rowCount; i++) {
		var row = table.rows[i];
		var chkbox = row.cells[0].childNodes[0]; // read up
		if(null != chkbox && true == chkbox.checked) {
			if(rowCount <= 1) {               // limit the user from removing all the fields
				alert("Cannot Remove all the Passenger.");
				break;
			}
			table.deleteRow(i); // delete row if checked
			rowCount--;
			i--;
		}
	}
}