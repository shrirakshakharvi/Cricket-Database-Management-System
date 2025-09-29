<!DOCTYPE html>
<html>
<style >
	table{
		border: 1px solid white;
	}
	tr{
		border: 1px solid white;
	}
	th{
		border: 1px solid white;
	}
</style>
<head>
	<title>RANKS</title>
</head>
<body>
<body style="background-color:#47ED1D">
	<button style="background-color: "><a href="admin1st.html" style="color:">Back</a></button>
	 <div style="margin-top:225px; style : center" >
	<table align="center">
		<tr>
			<th>Stadium Name</th>
			<th>Capacity</th>
			<th>DOI</th>
			<th>Board Name</th>
			<th>Team's Stadium</th>
		</tr>
		<?php
		$con=mysqli_connect("localhost","root","","cricket");
		$query="call stadium()";
		$result=mysqli_query($con,$query);
		if(mysqli_num_rows($result)>0)
		{
			while ($row=mysqli_fetch_assoc($result)) {
			echo "<tr><th>".$row["stadium_name"]."</th>"."<th>".
			$row["capacity"]."</th><th>".
			$row["DOI"]."</th><th>".
			$row["board_name"]."</th><th>".
			$row["team"]."</th></tr>";
			}
		}
		mysqli_close($con);
		?>
	</table>
</body>
</html>