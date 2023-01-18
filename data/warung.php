<?php
class Warung
{
	public $id_barang;
	public $nama_barang;
	public $jumlah_barang;
	public $harga_barang;

	private $conn;
	private $table = "data_barang";

	public function __construct($conn)
	{
		$this->conn = $conn;
	}

	function fetch(){
		$query = "SELECT * FROM " . $this->table;
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		return $stmt;
	}
    
    //LibraryGet
    function get()
    {
        $query = "SELECT * FROM " . $this->table . " p          
                WHERE
                    p.id_barang = ?
                LIMIT
                    0,1";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id_barang);

        $stmt->execute();

        $product = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->id_barang = $product['id_barang'];
        $this->nama_barang = $product['nama_barang'];
        $this->jumlah_barang = $product['jumlah_barang'];
        $this->harga_barang = $product['harga_barang'];
    }

    //LibraryAdd
    function add()
    {
        $query = "INSERT INTO
                " . $this->table . "
            SET
               id_barang=:id_barang, nama_barang=:nama_barang, jumlah_barang=:jumlah_barang, harga_barang=:harga_barang";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam('id_barang', $this->id_barang);
        $stmt->bindParam('nama_barang', $this->nama_barang);
        $stmt->bindParam('jumlah_barang', $this->jumlah_barang);
        $stmt->bindParam('harga_barang', $this->harga_barang);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    //LibraryUpdate
    function update()
    {
        $query = "UPDATE
                " . $this->table . "
            SET
                nama_barang = :nama_barang,
                jumlah_barang = :jumlah_barang,
                harga_barang = :harga_barang
            WHERE
                id_barang = :id_barang";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam('id_barang', $this->id_barang);
        $stmt->bindParam('nama_barang', $this->nama_barang);
        $stmt->bindParam('jumlah_barang', $this->jumlah_barang);
        $stmt->bindParam('harga_barang', $this->harga_barang);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }


    //LibraryDelete
    function delete()
    {
        $query = "DELETE FROM " . $this->table . " WHERE id_barang = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id_barang);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }


}
