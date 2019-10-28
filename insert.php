<?php  
set_time_limit(0);
include "db.php";
// echo '<pre>';
// print_r($_POST);die();
$data= $_POST;
if(!empty($data)){
	$username = $data['username'];
	$password = $data['password'];
	$mobileno = $data['mobileno'];
	$bookingtype = $data['bookingtype'];
	$scnname = $data['scnname'];
	$seatclass = $data['seatclass'];
	$seatno = $data['seatno'];
	$theatername = $data['theatername'];
	$moviename = $data['moviename'];
	$evtname = $data['evtname'];
	$eventplace = $data['eventplace'];
	$var = $data['showdate'];
	
$showdate =  date("Y-m-d", strtotime($var));
	$showtime = $data['showtime'];
	$total = $data['total'];
	$servicefee = $data['servicefee'];
	$cpt = $data['cpt'];
	$createdate = date('Y-m-d');
//User Registation

	$stmt = $DBH->prepare("INSERT INTO users(name,password,mobileno,bookingtype, createdAt) VALUES (?, ?, ?,?,?)");
			
			$stmt->bindParam(1, $username);
			$stmt->bindParam(2, $password);
			$stmt->bindParam(3, $mobileno);
			$stmt->bindParam(4, $bookingtype);
			$stmt->bindParam(5, $createdate);
			$stmt->execute();
			$query = "select max(id) as userid from users ";
			$sth = $DBH->query($query);
			$result = $sth->fetchAll();
		
			$userid=$result[0]['userid'];
			
		

			if($bookingtype=='E'){
			$estmt = $DBH->prepare("INSERT INTO events(eventname,eventplace,eventtime,eventdate,totalcost,servicefee,costperticket,userid,createdAt) VALUES (?, ?, ?,?, ?, ?,?, ?,?)");
			
			$estmt->bindParam(1, $evtname);
			$estmt->bindParam(2, $eventplace);
			$estmt->bindParam(3, $showtime);
			$estmt->bindParam(4, $showdate);
			$estmt->bindParam(5, $total);
			$estmt->bindParam(6, $servicefee);
			$estmt->bindParam(7, $cpt);
			$estmt->bindParam(8, $userid);
			$estmt->bindParam(9, $createdate);
			$estmt->execute();
		}else{
			$mstmt = $DBH->prepare("INSERT INTO movies(screenname,moviename,seatclass,seatno,showtime,showdate,theatername,totalcost,servicefee,costperticket,userid,createdAt) VALUES (?, ?, ?,?, ?, ?,?, ?, ?,?,?,?)");
			
			$mstmt->bindParam(1, $scnname);
			$mstmt->bindParam(2, $password);
			$mstmt->bindParam(3, $seatclass);
			$mstmt->bindParam(4, $seatno);
			$mstmt->bindParam(5, $showtime);
			$mstmt->bindParam(6, $showdate);
			$mstmt->bindParam(7, $theatername);
			$mstmt->bindParam(8, $total);
			$mstmt->bindParam(9, $servicefee);
			$mstmt->bindParam(10, $cpt);
			$mstmt->bindParam(11, $userid);
			$mstmt->bindParam(12, $createdAt);
			$mstmt->execute();	
		}

			
		echo "1";
			
}else{
	return false;
}


?>