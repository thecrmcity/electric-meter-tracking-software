<?php

include('../config.php');

if(isset($_GET['case']))
{
	$case = $_GET['case'];
	switch($case)
	{
		case 'login':
		$femail = $_POST['femail'];
		$fpass = $_POST['fpass'];
		$table = "el_oprators";
		$cond = array(
			'el_email' => $femail,
			'el_pass' => $fpass,
			'el_status' => '1'
		);
		$logData = $obj->getOne($table,$cond);
		
		$_SESSION['email'] = $femail;
		$_SESSION['name'] = $logData['el_name'];
		if($logData == true)
		{
			header('Location:dashboard.php');
		}
		else
		{
			echo "<script>alert('Somthing Went Wrong!'); window.location.href='index.php';</script>";
		}

		break;
		case "password":
		$userpass = $_POST['userpass'];
		$confirm = $_POST['confirm'];

		if($userpass === $confirm )
		{
			$table = "el_oprators";
			$data = array(
				'el_pass' => $userpass,
			);
			$cond = array(
				'el_email'=> $email,
			);
			$obj->updateData($table,$data,$cond);
			header('Location:setting.php?msg=save');
		}
		else
		{
			header('Location:setting.php?msg=error');
		}
		
		break;
		case "smtp":
		$hostname = $_POST['hostname'];
		$port = $_POST['port'];
		$usrename = $_POST['usrename'];
		$hostpass = $_POST['hostpass'];
		$emailadd = $_POST['emailadd'];
		$toemail = $_POST['toemail'];
		$ccemail = $_POST['ccemail'];

		$table = "el_smtp";
		$cond = array(
			'in_status'=>'1',);
		$res = $obj->getOne($table,$cond);

		if($res == true)
		{
			$id = $res['in_sno'];
			if($hostname != "")
			{
				$table = "el_smtp";
				$data = array(
					'in_hostname'=>$hostname,
					'in_port' => $port,
					'in_username' => $usrename,
					'in_password' => $hostpass,
					'in_responsemail' => $emailadd,
					'in_toemails' => $toemail,
					'in_ccemails' => $ccemail,
					'in_status' => '1',

				);
				$cond = array(
					'in_sno' => $id,
				);
				$rest = $obj->updateData($table,$data,$cond);
				if($rest == true)
				{
					header('Location:setting.php?msg=set');
				}
				else
				{
					header('Location:setting.php?msg=err');
				}
				
			}
		}
		else
		{
			$table = "el_smtp";
			$data = array(
				'in_hostname'=>$hostname,
				'in_port' => $port,
				'in_username' => $usrename,
				'in_password' => $hostpass,
				'in_responsemail' => $emailadd,
				'in_toemails' => $toemail,
				'in_ccemails' => $ccemail,
				'in_status' => '1',
			);
			$rest = $obj->insertData($table,$data);
			if($rest == true)
			{
				header('Location:setting.php?msg=set');
			}
			else
			{
				header('Location:setting.php?msg=err');
			}
		}
		
		break;
		case "60029501669":
		$first_kwh = $_POST['first_kwh'];
		$last_kwh = $_POST['last_kwh'];

		
		$first_kva = $_POST['first_kva'];
		$last_kva = $_POST['last_kva'];

		break;
	}
}
?>