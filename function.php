
<?php
	require 'connect.php';
		$data = getParamsPost();
		if($data == NULL){
		}else{
			insert($data);
			header("location:index.php");
		}

	function getParamsPost(){
	 if(isset($_POST['submit'] ))
	  {
	  return	[
			'name'=> $_POST['name'],
			'sdt'=> $_POST['sdt'],
			'address'=> $_POST['address'],
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

    	$query = "insert into user_sheet(name, sdt, address) values(:name, :sdt, :address)";

  		$sth = $db->prepare($query);

  		$sth->execute([
  			':sdt'=>$data['sdt'],
  			':name'=>$data['name'],
  			':address'=>$data['address'],
  		]);
     $sth->closeCursor();
    };
 ?>
