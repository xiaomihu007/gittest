<?php

//解释器模式
header('Content-Type:text/html;charset=utf-8');
class Expression{

	public function interpreter($str){
		return $str;
	}
}

class ExpressionNum extends Expression{

	public function interpreter($str){
		switch($str){
			case 0 : 
				$str = '零';
				break;
			case 1 : 
				$str = '壹';
				break;
			case 2 : 
				$str = '贰';
				break;
			case 3 : 
				$str = '叁';
				break;
			case 4 : 
				$str = '肆';
				break;
			case 5 : 
				$str = '伍';
				break;
			case 6 : 
				$str = '陆';
				break;
		}
		return $str;
	}
}

class ExpressionUpper extends Expression{

	public function interpreter($str){
		return strtoupper($str);
	}
}

class exec{

	public function run($str){
		for($i = 0; $i < strlen($str); $i++){
			switch (true) {
				case is_numeric($str[$i]):
					$expression = new ExpressionNum();
					break;
				default:
					$expression = new ExpressionUpper();
					break;
			}
			echo $expression -> interpreter($str[$i]);
		}
	}
}

$exec = new exec();
$exec -> run("012345abc");