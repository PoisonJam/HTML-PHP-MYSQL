<html>
	<head>
		<title>
			Keiser Resource System Login
		</title>
		<style>
			.column {
				float: left;
				width: 50%;
			}

			/* Button Style */
			button.submit {
				background-color: #0000A0;
				color: white;
				padding: 14px 20px;
				margin: 8px 0;
				border: none;
				align: right;
				cursor: pointer;
				width: 20%;
			}
			#attendance {
				font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
				font-size: 12px;
				border-collapse: collapse;
				width: 100%;
			}
			
			#attendance td, #attendance th {
				border: 5px solid #ddd;
				padding: 5px;
			}
			
			#attendance tr:nth-child(even){background-color: #f2f2f2;}

			#attendance tr:hover {background-color: #ddd;}
			
			#attendance tr { 
				padding-top: 5px;
				padding-bottom: 5px;
			}
			
			#attendance th {
				padding-top: 12px;
				padding-bottom: 12px;
				text-align: center;
				background-color: #0000A0;
				color: white;
			}
			
		</style>
	</head>
	<body>
		<table id="attendance"style="width:100%">
			<col align="left">
			<col align="left">
			<col align="left">
			<col align="left">
			<col align="left">
			<col align="left">
			<tr>
				<th>Assignments</th>
				<th>Percentage of Total Grade</th>
			</tr>
			<tr align="Center">
				<td id = "HW">HW :</td>
				<td>
					<input type="number" name="hw" min="0" max="100">
				</td>
			</tr>
			<tr align="Center">
				<td id = "Quizzes">Quizzes :</td>
				<td>
					<input type="number" name="quizzes" min="0" max="100">
				</td>
			</tr>
			<tr align="Center">
				<td id = "Tests">Tests :</td>
				<td>
					<input type="number" name="tests" min="0" max="100">
				</td>
			</tr>
			<tr align="Center">
				<td id = "Post Test">Post Test :</td>
				<td>
					<input type="number" name="posttest" min="0" max="100">
				</td>
			</tr>
			<tr align="Center">
				<td id = "Midterm">Midterm :</td>
				<td>
					<input type="number" name="midterm" min="0" max="100">
				</td>
			</tr>
			<tr align="Center">
				<td id = "Final">Final :</td>
				<td>
					<input type="number" name="fin" min="0" max="100">
				</td>
			</tr>
			<tr align="Center">
				<td id = "Projects">Projects :</td>
				<td>
					<input type="number" name="projects" min="0" max="100">
				</td>
			<tr align="Center">
				<td id = "Total">Total :</td>
				<td>
					<?PHP
						if (isset($_GET['num1']) && isset($_GET['num2'])) 
						{
							$hw = $_GET['hw'];
							$quiz = $_GET['quizzes'];
							$test = $_GET['tests'];
							$pt = $_GET['posttest'];
							$mt = $_GET['midterm'];
							$fin = $_GET['fin'];
							$proj = $_GET['projects'];
							$sum = $hw + $quiz + $test + $pt + $mt + $fin + $proj;
							echo $sum;
						}		
					?>
				</td>
			</tr>
		</table>
			<div>
				<button class = "submit">Submit</button>
				<button class = "submit">Edit</button>
			</div>
	</body>
</html>