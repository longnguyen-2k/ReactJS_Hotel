
<?php

require_once '../db/connect.php';
require_once 'restful_api.php';
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
header("Access-Control-Allow-Origin: *");
header('Content-type: application/json; charset=utf-8');
class Basket extends restful_api
{
	function __construct()
	{
		parent::__construct();
	}
	function baskets()
	{

		//Lay query tu axios nha mn
		if ($this->method == 'GET') {
			$con = new Database();
			if (empty($this->params)) {
				$con->query("SELECT * FROM `basket`");
				$data = $con->getAllData();
				//Lay tat ca cac thong tin gio hang
			} else {

				$basket_id = $this->params['basket_id'];
				$user_id = $this->params['user_id'];
				$room_id = $this->params['room_id'];
				$con->query("select * from basket where id='$user_id'");
				// Lay tat cac thong tin basket tai user_id 
				$data = $con->getData();
			}
			$this->response(200, $data);
		} elseif ($this->method == 'POST') {
			//Lay data tu $_POST


		} elseif ($this->method == 'PUT') {
			if (empty($id = $this->params['id'])) {
				$this->response(404, "Khong tim thay id");
			} else {
				$con = new Database;


				// Tien hanh update ne Sen 

				// $con->query("update basket set name='$name',quantity='$quantity',
				// subtitle='$subtitle',summary='$summary',
				// type='$type',price='$price',discount='$discount'
				// where id='$id'"); 



				$con->close();
				$this->response(200);
			}
		} elseif ($this->method == 'DELETE') {

			$id = $this->params['id'];
			if (empty($id)) {
				$this->response(404, "Khong tim thay id");
			} else {
				//........
				$con = new Database;
				$con->query("select * from user where id='$id'");
				$data = $con->getData();
				if ($data['status'] == 1)
					$status = 0; // 0 tuc la bi block

				else
					$status = 1; // 1 tuc la van con hoat dong		
				$con->query("update user set status='$status' where id='$id'");
				$this->response(200);
			}
		}
	}
}
?>