    <?php
    header("Access-Control-Allow-Origin: *");
    header('Access-Control-Allow-Methods: GET');
    header('Access-Control-Allow-Headers: X-Requested-With');
    header("Content-Type: application/json; charset=UTF-8");

    include_once "../../config/database.php";
    include_once "../../data/warung.php";

    $request = $_SERVER['REQUEST_METHOD'];

    $db = new Database();
    $conn = $db->connection();

    $warung = new Warung($conn);

    $warung->id_barang = isset($_GET['id_barang']) ? $_GET['id_barang'] : die();

    $warung->get();

    $response = [];

    if ($request == 'GET') {
        if ($warung->id_barang != null) {
            $data = array(
                'id_barang' => $warung->id_barang,
                'nama_barang' => $warung->nama_barang,
                'jumlah_barang' => $warung->jumlah_barang,
                'harga_barang' => $warung->harga_barang,
            );
            $response = array(
                'status' =>  array(
                    'messsage' => 'Success', 'code' => (http_response_code(200))
                ), 'data' => $data
            );
        } else {
            http_response_code(404);
            $response = array(
                'status' =>  array(
                    'messsage' => 'No Data Found', 'code' => http_response_code()
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
