<?php
/**
*	git test 2016/6/7 
*/ 
$i = 1464657731;
$i_2 = 1464434079;
$i_3 = 1464664300;
$i_4 = 1464664213;


echo date('Y-m-d H:i:s', $i);
echo date('Y-m-d H:i:s', $i_2);
echo date('Y-m-d H:i:s', $i_3);
echo date('Y-m-d H:i:s', $i_4);


phpinfo();


function b(){
	echo 'u a b';
}

class A
{
	public function ec()
	{
		echo 'die';
	}
}

//yii 
function c(){
	b();
}

//ssh-keygen -t rsa -C "2265508387@qq.com"