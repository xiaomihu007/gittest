<?php
/**
 * 外观模式
 *
 * 为子系统中的一组接口提供一个一致的界面,定义一个高层接口,使得这一子系统更加的容易使用
 */

class SubSystem1{

	public function method1(){
		echo "SubSystem1 method1 running...<br/>";
	}
}

class SubSystem2{

	public function method2(){
		echo "SubSystem2 method2 running...<br/>";
	}
}

class SubSystem3{

	public function method3(){
		echo "SubSystem3 method3 running...<br/>";
	}
}

class Facade{

	private $_object1 = null;
	private $_object2 = null;
	private $_object3 = null;

	public function __construct(){
		$this -> _object1 = new SubSystem1();
		$this -> _object2 = new SubSystem2();
		$this -> _object3 = new SubSystem3();
	}

	public function methodA(){
		echo "Facade methodA running...<br/>";
		$this -> _object1 -> method1();
		$this -> _object2 -> method2();
	}

	public function methodB(){
		echo "Facade methodB running...<br/>";
		$this -> _object2 -> method2();
		$this -> _object3 -> method3();
	}
}

$objFacade = new Facade();
$objFacade -> methodA();
$objFacade -> methodB();