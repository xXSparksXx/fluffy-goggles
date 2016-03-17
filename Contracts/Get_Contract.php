<?php 

require_once('ConectToContracts.php');

$query = "SELECT Name, Description, Author, Link, Date_Entered, id FROM Contracts";

$response = @mysqli_query($dbc, $query);

if ($response) {

	echo 
		"<table>
			<tr>
				<td>Name</td>
				<td>Description</td>
				<td>Author</td>
				<td>Link</td>
				<td>Date Entered</td>
				<td>id</td>
			</tr>
		</table>";

		while ($row	= mysqli_fetch_array($response)){


		}
	}

?>