
<?php
	require 'connect.php';
		$data = getParamsPost();
    $s = isset($_GET['s'])?$_GET['s']: 'rg';
    if($s ==  'lg'){
      $data = [
        'sdt'=>$data['sdt'],
        'password'=>$data['password'],
      ];
      
      $id_log_in = log_in($data);
     var_dump($id_log_in); 
     if($id_log_in != 0){
      header('location:trangchu.php');

     }else{

      header("location:index.php?er=2");
     }
    } 
    if ($s == 'rg'){
      if($data == NULL){
      }else{
      $checksdt = check_tel_exist($data); 
      if($checksdt['id'] != 0){
         header("location:index.php?er=1");
      } else{
        insert($data);
      header("location:index.php");
      }
    }
    }
	function getParamsPost(){
	 if(isset($_POST['submit'] ))
	  {
      $name = isset($_POST['name'])?$_POST['name']:'';
      $address = isset($_POST['address'])?$_POST['address']:'';
	  return	[
			'name'=> $name,
			'sdt'=> $_POST['sdt'],
      'address'=> $address,
			'password'=>md5(sha1($_POST['sdt']. $_POST['password'])),
		];
	  }
	}
	function show_user(){
	global $db ;
	$query = "select * from user_sheet ";

      $sth = $db->prepare($query);

      $sth->execute();

      $data =$sth->fetchAll(PDO::FETCH_ASSOC);

      $sth->closeCursor();

      return $data;
	}
    function insert($data = ''){
			global $db ;

    	$query = "insert into user_sheet(name, sdt, address, password) values(:name, :sdt, :address, :password)";

  		$sth = $db->prepare($query);

  		$sth->execute([
  			':sdt'=>$data['sdt'],
  			':name'=>$data['name'],
        ':address'=>$data['address'],
  			':password'=>$data['password'],
  		  ]);
        $sth->closeCursor();
    };
    function check_tel_exist($data){
      global $db ;
      $query = "select id from user_sheet  where sdt=:sdt";
      $sth = $db->prepare($query);
      $sth->execute([
      ':sdt'=>$data['sdt'],
      ]);
      $data =$sth->fetch(PDO::FETCH_ASSOC);

      $sth->closeCursor();
      return $data;
    }
    function log_in($data){
        global $db ;
      $query = "select id from user_sheet  where sdt=:sdt and password=:password";
      $sth = $db->prepare($query);
      $sth->execute([
      ':sdt'=>$data['sdt'],
      ':password'=>$data['password']

      ]);
      $data =$sth->fetch(PDO::FETCH_ASSOC);

      $sth->closeCursor();
      return $data;
    }
 ?>
