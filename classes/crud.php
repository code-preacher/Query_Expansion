<?php
include_once "config.php";

class Crud extends Config
{

	function __construct()
	{
		parent::__construct();
	}


//Display All
	public function displayAll($table)
	{
		$query = "SELECT * FROM {$table}";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return 0;
		}
	}



	public function displayAllWithOr($user_id)
	{
		$query = "SELECT * FROM chat where sender='$user_id' or reciever='$user_id ' order by id desc";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return 0;
		}
	}



	//Display with Order


	public function displayAllWithOrder($table,$orderValue,$orderType)
	{
		$query = "SELECT * FROM {$table} ORDER BY {$orderValue} {$orderType}";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return 0;
		}
	}

		public function displayAllSpecific($table,$value,$item)
	{
		$query = "SELECT * FROM {$table} WHERE $value='$item' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return 0;
		}
	}



		public function displayAllSpecific2($table,$value,$item)
	{
		$query = "SELECT * FROM {$table} WHERE $value='$item' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return 0;
		}
	}


		public function displayAllSpecificWithOrder($table,$value,$item,$orderValue,$orderType)
	{
		$query = "SELECT * FROM {$table} WHERE $value='$item' ORDER BY {$orderValue} {$orderType}";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return 0;
		}
	}


			public function displayAllSpecificWithOrderAndLike($table,$value,$item,$orderValue,$orderType)
	{
		$query = "SELECT * FROM {$table} WHERE $value LIKE '%$item%' ORDER BY {$orderValue} {$orderType}";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return 0;
		}
	}



	public function displayAllWithOrder2($table,$user,$orderValue,$orderType)
	{
		$query = "SELECT * FROM {$table} WHERE user_id='$user' ORDER BY {$orderValue} {$orderType}";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return 0;
		}
	}



		public function displayAllWithOrder3($table,$user,$orderValue,$orderType)
	{
		$query = "SELECT * FROM {$table} WHERE user_id='$user' ORDER BY {$orderValue} {$orderType}";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return 0;
		}
	}



	public function displayUser2($v1,$v2)
	{
		
		$query = "SELECT * FROM user where id='$v1' or id='$v2' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return 0;
		}
	}





	//Display with Limit
	public function displayWithLimit($table,$limit)
	{
		$query = "SELECT * FROM {table} limit {$limit}";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return 0;
		}
	}


	//Display Specific
	public function displayOne($table,$value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM $table where id='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return 0;
		}
	}


	public function displayUser($value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM user where email='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return 0;
		}
	}


	public function displayUser3($value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM user where id='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return 0;
		}
	}




	public function displayLoginUser($value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM login where email='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return 0;
		}
	}

	public function displayWasteTypeById($table,$value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM {$table} where id='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row['waste_type'];
		}else{
			return 0;
		}
	}


		public function displayChargeById($table,$value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM {$table} where id='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row['charge'];
		}else{
			return 0;
		}
	}


	public function displayNameById($table,$value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM {$table} where id='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row['name'];
		}else{
			return 0;
		}
	}


		public function displayCatByEmail($table,$value)
	{
		$email = $this->cleanse($value);
		$query = "SELECT * FROM {$table} where email='$email' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row['category_id'];
		}else{
			return 0;
		}
	}




	
//Counting All
	public function countAll($table)
	{
		$q=$this->con->query("SELECT id FROM $table");
		return $q->num_rows;
	}


	public function countAllById($table,$id)
	{
		$q=$this->con->query("SELECT id FROM $table where sender='$id' or reciever='$id' ");
		return $q->num_rows;
	}

	public function countAllById2($table,$id)
	{
		$q=$this->con->query("SELECT id FROM $table where (sender='$id' or reciever='$id') AND status='0' ");
		return $q->num_rows;
	}

	public function countAllById3($table,$item,$value)
	{
		$q=$this->con->query("SELECT id FROM $table where $item='$value'");
		return $q->num_rows;
	}


	public function countAllWasteUser($table,$id)
	{
		$q=$this->con->query("SELECT user_id FROM $table where user_id='$id' ");
		return $q->num_rows;
	}



	public function countAllComplain($table,$id)
	{
		$q=$this->con->query("SELECT sender FROM $table where sender='$id' ");
		return $q->num_rows;
	}





	public function insertNewUser($post)
	{
		$name=$this->cleanse($post['name']);
		$address=$this->cleanse($post['address']);
		$gender=$this->cleanse($post['gender']);
		$phone=$this->cleanse($post['phone']);
		$email=$this->cleanse($post['email']);
		$password=$this->cleanse($post['password']);
		$category_id=$this->cleanse($post['category_id']);
		$date=date("d-m-y @ g:i A");
		$query="insert into user(fullname,address,gender,phone,email,password,category_id,date_created) values('$name','$address','$gender','$phone','$email','$password','$category_id','$date')";
		$query2="insert into login(name,email,password,role) values('$name','$email','$password',3)";
		$sql = $this->con->query($query);
		if ($sql==true) {
			header("Location:login.php?msg=User account was created successfully, Please login...&type=success");
			$this->con->query($query2);
		}else{
			header("Location:login.php?msg=Error adding data try again!&type=error");
		}
	}



	public function insertQuery($post)
	{
		$name=$this->cleanse($post['name']);
		$info=$this->cleanse($post['info']);
		$category_id=$this->cleanse($post['category_id']);

		$query="insert into query_info(name,info,category_id) values('$name','$info','$category_id')";
		$sql = $this->con->query($query);
		if ($sql==true) {
			header("Location:view-query.php?msg=Data was created successfully&type=success");
		}else{
			header("Location:view-query.php?msg=Error adding data try again!&type=error");
		}
	}


	public function insertCategory($post)
	{
		$name=$this->cleanse($post['name']);
		$query="insert into category(name) values('$name')";
		$sql = $this->con->query($query);
		if ($sql==true) {
			header("Location:view-category.php?msg=Data was created successfully&type=success");
		}else{
			header("Location:view-category.php?msg=Error adding data try again!&type=error");
		}
	}







//Delete Items
	public function delete($id, $table,$url) 
	{ 
		$id = $this->cleanse($id);
		$query = "DELETE FROM $table WHERE id = $id";

		$result = $this->con->query($query);

		if ($result == true) {
			header("Location:$url?msg=Data was successfully deleted&type=success");
		} else {
			header("Location:$url?msg=Error deleting data&type=error");
		}
	}


	public function deleteAll($id, $table,$url) 
	{ 
		$email= $this->cleanse($id);
		$query = "DELETE FROM $table WHERE email = '$email' ";
		$query2 = "DELETE FROM login WHERE email = '$email' ";

		$result = $this->con->query($query);

		if ($result == true) {
			$this->con->query($query2);
			header("Location:$url?msg=Data was successfully deleted&type=success");
		} else {
			header("Location:$url?msg=Error deleting data&type=error");
		}
	}


	public function deleteTopic($id,$url) 
	{ 
		$email= $this->cleanse($id);
		$query = "DELETE FROM topic WHERE id = '$id' ";
		$query2 = "DELETE FROM topic_data WHERE topic_id = '$id' ";

		$result = $this->con->query($query);

		if ($result == true) {
			$this->con->query($query2);
			header("Location:$url?msg=Data was successfully deleted&type=success");
		} else {
			header("Location:$url?msg=Error deleting data&type=error");
		}
	}






	//Delete Items
	public function deleteTwoTable($email,$table,$table2,$url) 
	{ 
		$email = $this->cleanse($email);
		$query = "DELETE FROM {$table} WHERE email= '$email'";
		$query2 = "DELETE FROM {$table2} WHERE email= '$email'";

		$result = $this->con->query($query);

		if ($result == true) {
			header("Location:$url?msg=Data was successfully deleted&type=success");
			$this->con->query($query2);
		} else {
			header("Location:$url?msg=Error deleting Data&type=error");
		}
	}


	public function updateAdmin($post)
	{
		
		$email=$this->cleanse($post['email']);
		$password=$this->cleanse($post['password']);
		$query="UPDATE login SET password='$password' WHERE email='$email' ";
		$sql=$this->con->query($query);
		if ($sql==true) {
			header("Location:profile.php?msg=Account was updated successfully&type=success");
		}else{
			header("Location:profile.php?msg=Error updating account try again!&type=error");
		}
	}


	public function updateUser($post)
	{
		
		$email=$this->cleanse($post['email']);
		$password=$this->cleanse($post['password']);
		$query="UPDATE login SET password='$password' WHERE email='$email' ";
		$query2="UPDATE user SET password='$password' WHERE email='$email' ";
		$sql=$this->con->query($query);
		if ($sql==true) {
			$this->con->query($query2);
			header("Location:profile.php?msg=Account was updated successfully&type=success");
		}else{
			header("Location:profile.php?msg=Error updating account try again!&type=error");
		}
	}



	public function updateStatus($id)
	{
		$q=$this->con->query("UPDATE chat SET status='1' WHERE sender='$id' or reciever='$id' ");
	}


	//Search
	public function displaySearch($value,$cat)
	{
	//Search box value assigning to $Name variable.
		$Name = $this->cleanse($value);
		$query = "SELECT * FROM query_info WHERE name LIKE '%$Name%' AND category_id='$cat'";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			header("Location:result.php?msg=Search Result&type=success&name=$Name");
		}else{
			header("Location:result2.php?msg=No Search Result!&type=error");
		}
	}


//Mailing Function
	public function mailing($post)
	{
		$name=$this->cleanse($post['name']);
		$email=$this->cleanse($post['email']);
		$phone=$this->cleanse($post['phone']);
		$subject=$this->cleanse($post['subject']);
		$text=$this->cleanse($post['message']);

		$headers = 'MIME-Version: 1.0' . "\r\n";
		$headers .= "From: " . $email . "\r\n"; // Sender's E-mail  ---charset=iso-8859-1
		$headers .= 'Content-type: text/html; charset=utf8_encode' . "\r\n";

		$message ='<table style="width:100%">
		<tr>
		<td>'.$name.'  '.$subject.'</td>
		</tr>
		<tr><td>Email: '.$email.'</td></tr>
		<tr><td>phone: '.$subject.'</td></tr>
		<tr><td>Text: '.$text.'</td></tr>

		</table>';
		$to='support@dilproperty.com';

		if (@mail($to, $subject, $message, $headers))
		{
			header("Location:contact.php?msg=Your message has been sent, we will contact you in a moment&type=success");
		}else{
			header("Location:contact.php?msg=message failed sending, please try again later!&type=error");
		}

	}



	public function cleanse($str)
	{
   #$Data = preg_replace('/[^A-Za-z0-9_-]/', '', $Data); /** Allow Letters/Numbers and _ and - Only */
		$str = htmlentities($str, ENT_QUOTES, 'UTF-8'); /** Add Html Protection */
		$str = stripslashes($str); /** Add Strip Slashes Protection */
		if($str!=''){
			$str=trim($str);
			return mysqli_real_escape_string($this->con,$str);
		}
	}


}

?>

