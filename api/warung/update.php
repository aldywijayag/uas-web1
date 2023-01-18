<?php
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: X-Requested-With');
header("Content-Type: application/json; charset=UTF-8");

include_once "../../config/database.php";
include_once "../../data/warung.php";

$request = $_SERVER['REQUEST_METHOD'];

$db = new Database();
$conn = $db->connection();

$warung = new Warung($conn);

$data = json_decode(file_get_contents("php://input"));

$warung->id_barang = $data->id_barang;

$response = [];

if ($request == 'PUT') {
    if (
        !empty($data->id_barang) &&
        !empty($data->nama_barang) &&
        !empty($data->harga_barang) &&
        !empty($data->jumlah_barang)
    ) {
        $warung->id_barang = $data->id_barang;
        $warung->nama_barang = $data->nama_barang;
        $warung->jumlah_barang = $data->jumlah_barang;
        $warung->harga_barang = $data->harga_barang;

        $data = array(
            'id_barang' => $warung->id_barang,
            'nama_barang' => $warung->nama_barang,
            'jumlah_barang' => $warung->jumlah_barang,
            'harga_barang' => $warung->harga_barang,
        );

        if ($warung->update()) {
            $response = array(
                'status' =>  array(
                    'messsage' => 'Success', 'code' => (http_response_code(200))
                ), 'data' => $data
            );
        } else {
            http_response_code(400);
            $response = array(
                'messsage' => 'Update Failed',
                'code' => http_response_code()
            );
        }
    } else {
        http_response_code(400);
        $response = array(
            'status' =>  array(
                'messsage' => 'Update Failed - Wrong Parameter', 'code' => http_response_code()
            )
        );
    }
} else {
    http_response_code(405);
    $response = array(
        'status' =>  array(
            'messsage' => 'Method Not Allowed', 'code' => http_response_code()
        )
    );
}

echo json_encode($response);