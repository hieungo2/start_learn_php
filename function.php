
<?php 
	require 'connect.php';
	 if(isset($_POST['name'] ))
  { 
  	echo $_POST['name']. $_POST['sdt']. $_POST['address'];
  	
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
    function insert(){

    	$query = "insert into user_sheet(name, sdt, address) values (:name, :std, :address)";

  		$sth = $this->db->prepare($query);

  		$sth->execute([
  			':sdt'=>$data['sdt'],
  			':name'=>$data['name'],
  			':address'=>$data['address'],
  		]);
     $sth->closeCursor();  
    };
 ?>

