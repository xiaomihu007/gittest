<?php

//工厂模式
//定义一个用于创建对象的接口,让子类决定将哪一个类实例化,使用一个类的实例化延迟到其子类
class Factory{

	public static function create($type){
		$class = $type."DB";
		return new $class;
	}
}

interface DB{

	public function connect();
	public function exec();
}

class mysqlDB implements DB{

	public function __construct(){
		echo "mysql db...";
	}

	public function connect(){

	}

	public function exec(){

	}
}

class db2DB implements DB{

	public function __construct(){
		echo "db2 db...";
	}

	public function connect(){

	}

	public function exec(){

	}
}

$mysql = Factory::create("mysql");
echo "<br/>";
$db2 = Factory::create("db2");