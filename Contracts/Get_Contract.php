<?php 

require_once('ConectToContracts.php');

$query = "SELECT Name, Description, Author, Link, Date_Entered, id FROM Contracts";

$response = @mysqli_query($dbc, $query);

if ($response) {

	echo 
		"<table style=\"width:400mm\" border=\"1\">
			<tr>
				<td>Name</td>
				<td>Description</td>
				<td>Author</td>
				<td>Link</td>
				<td>Date Entered</td>
				<td>id</td>
			</tr>";

		while ($row	= mysqli_fetch_array($response)){
			echo "<tr><td>" .
			$row["Name"] . "</td><td>" .
			$row["Description"] . "</td><td>" .
			$row["Author"] . "</td><td>" .
			$row["Link"] . "</td><td>" .
			$row["Date_Entered"] . "</td><td>" .
			$row["id"] . "</td><td>";

				echo "</tr></table>";
		};
	}

mysqli_close($dbc);
?>