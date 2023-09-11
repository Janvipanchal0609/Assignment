<?php
include_once('model.php'); //step 1 load model

class control extends model // step 2 extends
{
	//magic function that call automatecally when you declare class object
	  function __construct()
	  {
		  
		session_start();
		
		model::__construct();//step 3 call model__construct
		
		date_default_timezone_set('asia/calcutta');
		$url=$_SERVER['PATH_INFO'];
		
		switch($url)
		{
			case '/index':
			include_once('index.php');
			break;

			case '/about':
			include_once('about.php');
			break;

			case '/services':
			include_once('services.php');
			break;
			
			case '/gallery':
			include_once('gallery.php');
			break;

			case '/blog':
			include_once('blog.php');
			break;

			case '/single':
			include_once('single.php');
			break;

			case '/404':
			include_once('404.php');
			break;

			case '/contact':
			
			if(isset($_REQUEST['submit'])){
                                
                                    $name=$_REQUEST['name'];
                                    $email=$_REQUEST['email'];
                                    $message=$_REQUEST['message'];

                                    $created_at=date("y-m-d H:i:s");
                                    $updated_at=date("y-m-d H:i:s");

                                    $arr=array("name"=>$name,"email"=>$email,"message"=>$message,"created_at"=>$created_at,"updated_at"=>$updated_at);
                                    

                                    $res=$this->insert('contacts',$arr);
                                    if($res){
                                        echo"<script>
                                        alert('Contact Inquiry Registered Success');
                                        </script>";
                                    }
                                    else{
                                        echo"<script>
                                        alert('Failed');
                                        </script>";
                                    }
                                }		
			include_once('contact.php');
			break;
			
			case '/login':
			
			   if(isset($_REQUEST['submit'])){
                                
                                    $name=$_REQUEST['name'];
                                    $password=$_REQUEST['password'];
                                   
                                    $created_at=date("y-m-d H:i:s");
                                    $updated_at=date("y-m-d H:i:s");

                                    $arr=array("name"=>$name,"password"=>$password,"created_at"=>$created_at,"updated_at"=>$updated_at);
                                    

                                    $res=$this->insert('login',$arr);
                                    if($res){
                                        echo"<script>
                                        alert('login Inquiry Registered Success');
                                        </script>";
                                    }
                                    else{
                                        echo"<script>
                                        alert('Failed');
                                        </script>";
                                    }
                                }		          
			       
			include_once('login.php');
			break;

            case '/profile';
			$where=array("Customer_id"=>$_SESSION['Customer_id']);
			$res=$this->select_where('customers',$where);
			$fetch=$res->fetch_object();
			include_once('profile.php');
			break;

			case '/signup':
			    $countries_arr=$this->select('countries');
				if(isset($_REQUEST['submit'])){
				                	
                                
                                    $name=$_REQUEST['name'];
									$email=$_REQUEST['email'];
									$password=$_REQUEST['password'];
									$gender=$_REQUEST['gender'];
									$languages_arr=$_REQUEST['languages'];
									$languages=implode(",",$languages_arr);
                                    $created_at=date("y-m-d H:i:s");
                                    $updated_at=date("y-m-d H:i:s");
                                
                                    $arr=array("name"=>$name,"email"=>$email,"password"=>$password,
								    "gender"=>$gender,"languages"=>$languages, "created_at"=>$created_at,"updated_at"=>$updated_at);
                                    

                                    $res=$this->insert('signup',$arr);
                                    if($res){
                                        echo"<script>
                                        alert('signup Inquiry Registered Success');
                                        </script>";
                                    }
                                    else{
                                        echo"<script>
                                        alert('Failed');
                                        </script>";
                                    }
                                }		 
			
			include_once('signup.php');
			break;
		}
	}
}
$obj=new control;
?>