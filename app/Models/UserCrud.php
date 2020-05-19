<?php namespace App\Models;

use CodeIgniter\Model;

class UserCrud extends Model
{

	public function create(){
		$db = \Config\Database::connect();

		//Standard Insert
		$sql = "INSERT INTO user (email, password, username) VALUES (".$db->escape($email).", ".$db->escape($password).",".$db->escape($username).")";
		$db->query($sql);
		echo $db->affectedRows();

		//Query Builder Insert
		$datadb = [
        	'email' => $email,
        	'password'  => $password,
        	'username'  => $username
		];
		$db->table('user')->insert($datadb);  // Produces: INSERT INTO user (email, password, password) VALUES ('{$email}', '{$password}', '{$username}')

		$db->close();
	}

	public function read(){
		$db = db_connect();

		//Standard Query With Multiple Results (Object Version)
		$query = $db->query('SELECT username, email FROM user');
		$results = $query->getResult();
		foreach ($results as $row)
		{
        	echo $row->username;
        	echo $row->email;
		}
		echo 'Total Results: ' . count($results);

		//Standard Query With Multiple Results (Array Version)
		$query   = $db->query('SELECT name, title, email FROM my_table');
		$results = $query->getResultArray();
		foreach ($results as $row)
		{
        	echo $row['title'];
        	echo $row['name'];
        	echo $row['email'];
		}

		//Standard Query With Single Result
		$query = $db->query('SELECT name FROM my_table LIMIT 1');
		$row   = $query->getRow();
		echo $row->name;

		//Query Builder Query
		$query = $db->table('table_name')->get();
		foreach ($query->getResult() as $row)
		{
        	echo $row->title;
		}

		$db->close();
		
	}

	public function update(){
		
	}

	public function delete(){
		
	}

}