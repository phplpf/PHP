<?php

//curl 简单抓取手机号模式

//   function get_userinfo()
   //{


//    $url = $_POST['url'] ? $_POST['url'] : "";
//    $phone = $_POST['phone'] ? $_POST['phone'] : "";
//    $address = $_POST['address'] ? $_POST['address'] : "";
//
//    if (empty($url) || empty($phone)) {
//        echo "抱歉，请输入完整信息";
//    }else{
//        //抓取网页内容并匹配
//        $ch =  curl_init();
//        curl_setopt($ch,CURLOPT_URL,$url);
//        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
//        $re = curl_exec($ch);
//        curl_close($ch);
//
//        var_dump($re);
//
//    }
  // }
    function CheckUrl($C_url){

        if (!preg_match("$ http://[_a-zA-Z0-9-]+(.[_a-zA-Z0-9-]+)*$", $C_url))

        {

            return false;

        }

        return true;

    }
/*	
$plat=64;
$mtim=123232543543;
$timeSign='5434df434343';
$rc4key='sdfdsfsdfds';
$n='4654df435dfg54dfrnewir3jr0932jign3598yh8d';
$cacheName = "login_${plat}_${mtime}_${timeSign}_${rc4key}_${n}";
print_r($cacheName);
*/

class testA {
	static protected  $num =0;
	
	function __construct(){
		echo self::$num;
		self::$num++;
		
		
	}	
	
}
//$a = new testA();
/*
$a =[1,2,3,4,5,6];
$b=[2,3,4,1,5];
$res =array_diff($a,$b);
print_r($res);
*/

function fun(&$value,$k){
	if($value==2){
		$value=$value*100;
	}
}
$c =[1,2,3,4];
array_walk($c,"fun");
//print_r($c);


//function test_odd($var)
//{
//return($var & 1);
//}

//$m =test_odd(2);
//$a1=array("a","b",2,3,4);
//print_r($m);
//print_r(array_filter($a1,"test_odd"));
//$str ="123abc456def789";
//$preg ="/[a-z]+(?=\d+)/";
//preg_match_all($preg,$str,$res);
//print_r($res);

 function my_dir($dir){
	 if(!is_dir($dir)) return false;
	 $files =array();
	 if($handle=opendir($dir)){
		 while(($file = readdir($handle))!==false){
			 if($file !="." && $file !=".."){
				 if(is_dir($dir . "/". $file)){
	
					$files[$file]= my_dir($dir."/".$file);
				 }else{
					$files[]=$dir . "/" . $file;
				 }
			 }	
		}
		  closedir($handle);
		  return $files;
	 }else{
		 return "打开目录失败";
	 }
	
	 
 }
 
  function my_scandir($dir){
     //定义一个数组
     $files = array();
     //检测是否存在文件
     if (is_dir($dir)) {
        //打开目录
         if ($handle = opendir($dir)) {
            //返回当前文件的条目
             while(($file = readdir($handle)) !== false) {
                 //去除特殊目录
               if ($file != "." && $file != "..") {
                     //判断子目录是否还存在子目录
                     if (is_dir($dir . "/" . $file)) {
                         //递归调用本函数，再次获取目录
                         $files[$file] = my_scandir($dir . "/" . $file);
                    } else {
                         //获取目录数组
                         $files[] = $dir . "/" . $file;
                     }
                }
             }
             //关闭文件夹
             closedir($handle);
             //返回文件夹数组
            return $files;
          }
        }
    } 
  
 //$a = my_dir("./apps");
 //print_r($a);
 
 $num=0;
 function test(){
	return $num =10*10;
 }
 test();
//echo $num;
 function test2($num){
	  $num=$num +10;
	 echo $num;
 }
//test2($num);
//echo $num;
$arr=array("",1,2,3,"");
$ptn="/\S+/i";

//print_r(preg_grep($ptn,$arr));

//print_r(Date("Y-m-d H:i:s",strtotime(" -1 day")));

//Iconv(‘utf-8’,’gb2312’,$str);

//Echo date(“t”,strtotime("2019-04-01"));
/*
$arr = pathinfo("/wwwroot/include/page.class.php");
print_r($arr);
$str = substr($arr['basename'],strrpos($arr['basename'],'.'));
*/
//print_r($str);

class myobject{
	
	
}

// 二分查找
 $arr=[1,3,53,55,334,554,5,44,2,4,2,243,42344,23432,5,656780932,90,9854,54543,342,3,33355676885,7,67,56,567,656,568];
 $key =5;
 function secondFind($arr,$key){
	 $len =count($arr);
	 sort($arr);
	 $middle =intval($len/2);
	 if($arr[$middle]==$key){
		// array_push($newArr,$arr[$middle]);
		 return $arr[$middle];die;
	 }
	if($arr[$middle]>$key){
		 for($i=0;$i<$middle-1;$i++){
			$leftArr[] =$arr[$i];
		 }	
		 
		return secondFind($leftArr,$key);
	}
	if($arr[$middle]<$key){
		  for($j=0;$j<$len;$j++){
			 $right[]=$arr[$middle+$i];
		 }
		
		return secondFind($right,$key);
	}
 }
 
 
 /*function t1($a,$k){
	 
	 while(true){
		$c=$a+$k;
		 $k++;
		 if($c<20){
			 t1($a,$k); 
		 }else{
			 break;
		 }	
	 }
	 return $c; 
 }
 */
//$m = t1(10,6);
//print_r($m);die;
  // $falg = secondFind($arr,$key);
  // var_dump($falg);die;

//斐波那契数列
  
/*
 概念： 前两个值都唯一。 该数列从第三位开始，每一位都是前两位的和
 规律公式
 Fn =F(n-1)+F(n+1)
 F 指当前这个数列
 n 指数列的下标
*/
// 1 非递归写法
//$n 表示传入数列中数字的个数
function fbnq1($n){
	if($n<0){
		return 0;
	}
	
	$array[1]=$array[2]=1;//设置第一个值和第二个值位1
	for($i=3;$i<$n;$i++){
		$array[$i]=$array[$i-1]+$array[$i-2];
	}
	return $array;
}
//$list =	fbnq1(10);
//var_dump($list);

// 2 递归写法
function fbnq2($n){
	if($n<0) return 0;
	if($n==1 || $n==2) return 1;
	return fbnq2($n-1)+fbnq2($n-2);
}
$list2 =fbnq2(10);
var_dump($list2);




















