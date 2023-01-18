<?php
class Database{
	private $hostname = "localhost";
	private $username = "root";
	private $password = "";
	private $dbname = "warung";
	public $conn;

	public function connection()
	{
		$this->conn = null;
		try{
			$this->conn = new PDO("mysql:host=" . $this->hostname . ";dbname=" . $this->dbname, $this->username, $this->password);
			// $cek = "Koneksi Berhasil!";
			// echo $cek;
		}catch(PDOException $x){
			echo "Connection error : " . $x->getMessage();
		}
		return $this->conn;
	}
}
// $hasil = new Database();
// $hasil->connection();