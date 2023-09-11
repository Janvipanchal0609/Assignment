<?php
class model
{
	public $conn="";
	function __construct()
	{
		$this->conn=new Mysqli('localhost','root','','admin_panel');
	}

    function select($tbl)
	{
		$sel="select * from $tbl";   //query
		$res=$this->conn->query($sel);   //run
		
		while($fetch=$res->fetch_object()) //fetch all data from db
		{
			$arr[]=$fetch;
		}
		if(!empty($arr))
		{
			return $arr;
		}
	}
	
	function select_where($tbl,$where)
   {

        $col=array_keys($where);
        $value=array_values($where);

        $del="delete from $tbl where 1=1"; //query
        $i=0;
        foreach($where as $w){
        $sel.=" and $col[$i]='$value[$i]'";
        $i++;
        }
	
        $res=$this->conn->query($sel);
        return $res;
    }
	
	function insert($tbl,$arr)
    {
        //echo"<pre>";print_r($array);exit();
        $key_arr=array_keys($arr); //key find of arr array("0"=>"name","1"=>"email","2"=>"password")
        $col_str=implode(",",$key_arr); //array to string

        $value_arr=array_values($arr); //value find of arr array('janvi','janvipanchal0609@gmail.com','1234')
        $value_str=implode("','",$value_arr); //array to string 
		
        $ins="insert into $tbl ($col_str) values ('$value_str')"; //query
       // echo"<pre>";print_r($sel);exit;
        $res=$this->conn->query($ins);
        return $res;
        
    }	
}
$obj=new model;
?>