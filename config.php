<?php
session_start();
if(isset($_SESSION['email']))
{
	$email = $_SESSION['email'];
}
class Dbconnect
{
	protected $host = "localhost";
	protected $user = "root";
	protected $pass = "";
	protected $dbname = "meter";

	private $keycol = "";
	protected $valcol = "";
	protected $keyinst = "";
	protected $valinst = "";

	

	public $conn = "";

	public function __construct()
	{

		$sql = mysqli_connect($this->host,$this->user,$this->pass,$this->dbname);
		return $this->conn = $sql;

	}

	public function getOne($table,$cond)
	{
		foreach($cond as $key => $val)
		{
			$this->keycol .="$key='$val' AND "; 
		}
		$keydata = rtrim($this->keycol,' AND ');
		
		$sql = "SELECT * FROM $table WHERE $keydata";
		$res = mysqli_query($this->conn,$sql);
		if(mysqli_num_rows($res) > 0)
		{
			$row = mysqli_fetch_assoc($res);
			return $row;
		}
		
	}
	public function getVal($table,$val)
	{
		$sql = "SELECT * FROM $table WHERE st_entrydate='$val'";
		$res = mysqli_query($this->conn,$sql);
		if(mysqli_num_rows($res) > 0)
		{
			while($row = mysqli_fetch_assoc($res))
			{
				$rowlist[] = $row;
			}
			return $rowlist;
			exit();
		}
		
	}
	
	public function getData($table,$cond)
	{
		foreach($cond as $key => $val)
		{
			$this->keycol .="$key='$val' AND "; 
		}
		$keydata = rtrim($this->keycol,' AND ');
		
		$sql = "SELECT * FROM $table WHERE $keydata";
		$res = mysqli_query($this->conn,$sql);
		if(mysqli_num_rows($res) > 0)
		{
			while($row = mysqli_fetch_assoc($res))
			{
				$rowlist[] = $row;
			}
			return $rowlist;
			exit();
		}
		
	}
	public function getWcond($table)
	{
		$sql = "SELECT * FROM $table";
		$res = mysqli_query($this->conn,$sql);
		if(mysqli_num_rows($res) > 0)
		{
			while($row = mysqli_fetch_assoc($res))
			{
				$rowlist[] = $row;
			}
			return $rowlist;
		}

	}
	public function insertData($table,$data)
	{

		foreach($data as $key => $val)
		{
			$this->keyinst .="`$key`, ";
			$this->valinst .="'$val', ";
		}
		$keydata = rtrim($this->keyinst,', ');
		$valdata = rtrim($this->valinst,', ');

		$sql = "INSERT INTO $table ($keydata) VALUES($valdata)";
		$res = mysqli_query($this->conn,$sql);
		return $res;
	}
	public function updateData($table,$data,$cond)
	{
		foreach($data as $key => $val)
		{
			$this->keycol .= "`$key`='$val', ";
		}
		foreach($cond as $ckey => $cval)
		{
			$this->valcol .= "`$ckey`='$cval' AND ";
		}
		$keydata = rtrim($this->keycol,', ');
		$valdata = rtrim($this->valcol,'AND ');

		$sql = "UPDATE $table SET $keydata WHERE $valdata";
		
		$res = mysqli_query($this->conn,$sql);
		return $res;
	}
	public function deleteData($table,$data,$cond)
	{
		foreach($data as $key => $val)
		{
			$this->keycol .= "`$key`='$val', ";
		}
		foreach($cond as $ckey => $cval)
		{
			$this->valcol .= "`$ckey`='$cval' AND ";
		}
		$keydata = rtrim($this->keycol,', ');
		$valdata = rtrim($this->valcol,'AND ');

		$sql = "UPDATE $table SET $keydata WHERE $valdata";
		$res = mysqli_query($this->conn,$sql);
		return $res;
	}
}
$obj = new Dbconnect();

?>