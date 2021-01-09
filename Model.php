<?php 
include 'config.php';

class Model{
 
	const _MYSQL_HOST = HOST;
	const _MYSQL_USER = USER;
	const _MYSQL_PASS = PASSWORD;
    const _MYSQL_DB = DATABASE;
    
    private $connection = null;
    private static $instance;

    public static function getInstance() {
		if(!self::$instance) {
			self::$instance = new self();
		}
		return self::$instance;
	}


	public function getConnection(){
		$this->connection = mysqli_connect(self::_MYSQL_HOST, self::_MYSQL_USER, self::_MYSQL_PASS, self::_MYSQL_DB);
        return $this->connection;
	}

    function get(){
		$result = self::getInstance()->getConnection()->query("select * from students order by name ASC");
		$rows = array();
		while($row = mysqli_fetch_assoc($result)){
			$rows[] = $row;
		}
		return $rows;
	}
    
    function add($name,$major,$university)
	{
		self::getInstance()->getConnection()->query("INSERT INTO students VALUES
		(id , '$name', '$major', '$university')");
    }
    
    function getById($id)
	{
		$query = self::getInstance()->getConnection()->query("select *
		from students where id='$id'");
		return $query->fetch_array();
    }
    
    function edit($name,$major,$university,$id)
	{
		$query = self::getInstance()->getConnection()->query("update
		students set name='$name',major='$major',university='$university' where id='$id'");
    }
    
    function remove($id)
	{
		$query = self::getInstance()->getConnection()->query("delete from
		students where id='$id'");
	}
}
?>