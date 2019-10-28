<?php
include "db.php";

$query = "select u.*,e.*,m.* from users u left join  movies m on m.userid= u.id left join events e on e.userid= u.id order by u.id ";
			$sth = $DBH->query($query);
			$result = $sth->fetchAll();
			// echo "<pre>";

		// print_r($result);
			
?>
<html>
<head>
<title>  santosh</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style type="text/css">
	
.hide{ display:none; }

.fields {margin:10px;}
.btn {margin:10px;}
.errormsg {color:red;}
.succmsg {color:green;}
</style>
</head>
<body>
	<div class="container">
		<div class="col-md-12">
			
			<table class="table table-striped">
				<thead>
					 <tr>
				        <th>Username</th>
				        <th>mobileno</th>
				        <th>event/Movie name</th>
				        <th>Theater name</th>
				        <th>totalcost</th>
				      </tr>
				</thead>
				<tbody>
					<?php 
					if(!empty($result)){
						foreach ($result as $rkey => $rvalue) {
							print "<tr>";
							print "<td>".$rvalue['name']."</td>";
							print "<td>".$rvalue['mobileno']."</td>";
							print "<td>".$rvalue['eventname'].$rvalue['moviename']." </td>";
							print "<td>".$rvalue['eventpalce'].$rvalue['theatername'] ."</td>";
							print "<td>".$rvalue['totalcost']." </td>";

							print "</tr>";
						}
					}
					?>
					<tr>
						
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>