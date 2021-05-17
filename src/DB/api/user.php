
<?php

require_once '../db/connect.php';
require_once 'restful_api.php';
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
header("Access-Control-Allow-Origin: *");
class User extends restful_api
{
	function __construct()
	{
		parent::__construct();
	}
	function users()
	{
		if ($this->method == 'GET') {
			$con = new Database();
			if (empty($this->params)) {
				$con->query("SELECT * FROM `users`");
				$data = $con->getAllData();
			} else {
				// $arr = explode('=', $this->params);
				// $id = array_pop($arr);
				// $con->query("select * from user where id='$id'");
				$data = $con->getData();
			}
			$this->response(200, $data);
		} elseif ($this->method == 'POST') {
			$data=array();

			try{

			
			if(empty($this->params)){
				$this->response(500,"Khong co thong tin");
			}
			else{
				$data['message']="Vui Long nhap du thong tin";
				if(empty($this->params['email']||empty($this->params['name']))||empty($this->params['password'])){
					$this->response(200,$data);

				}
				else{
					$email= $this->params['email'];
					$password= $this->params['password'];
					$name= $this->params['name'];
					$con =new Database;
					//check co trong database chua
					$con->query("select * from users where email ='$email'");
					$check= $con->getData();
					// select bang null co nghia la ko trung voi user nao
					if($check==null){
					$con->query("insert into users(name,email,password) values('$name','$email','$password') ");
					$this->response(201);
					}
					else{
						$data['message']="Tai khoan hoac email da duoc dang ky";
						$this->response(200,$data);
					}

					
				}
			}
		}catch(Throwable $error){
			$this->response(500);
		}
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