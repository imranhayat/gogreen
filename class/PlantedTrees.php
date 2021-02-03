<?php


class PlantedTrees extends Dbconfig {
    protected $hostName;
    protected $userName;
    protected $password;
    protected $dbName;
    private $userTable = 'plantedtreerecord';
    private $dbConnect = false;
    public function __construct(){
        if(!$this->dbConnect){
            $database = new dbConfig();
            $this -> hostName = $database -> serverName;
            $this -> userName = $database -> userName;
            $this -> password = $database ->password;
            $this -> dbName = $database -> dbName;
            $conn = new mysqli($this->hostName, $this->userName, $this->password, $this->dbName);
            if($conn->connect_error){
                die("Error failed to connect to MySQL: " . $conn->connect_error);
            } else{
                $this->dbConnect = $conn;
            }
        }
    }
    private function getData($sqlQuery) {
        $result = mysqli_query($this->dbConnect, $sqlQuery);
        if(!$result){
            die('Error in query: '. mysqli_error());
        }
        $data= array();
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $data[]=$row;
        }
        return $data;
    }
    private function getNumRows($sqlQuery) {
        $result = mysqli_query($this->dbConnect, $sqlQuery);
        if(!$result){
            die('Error in query: '. mysqli_error());
        }
        $numRows = mysqli_num_rows($result);
        return $numRows;
    }



    public function addrecord(){
        $message = '';
        if(!empty($_POST["addrecord"]) && $_POST["projectname"] !='') {

                  $insertQuery = "INSERT INTO ".$this->userTable."(ProjectName, Province, District, City, PurchasedTrees , PlantedTrees ,AreaCovered) 
				VALUES ('".$_POST["projectname"]."', '".$_POST["province"]."', '".$_POST["district"]."', '".$_POST["city"]."', '".$_POST["purchasedtrees"]."', '".$_POST["plantedtrees"]."', '".$_POST["areacovered"]."')";
                $recordAdded = mysqli_query($this->dbConnect, $insertQuery);
                if($recordAdded) {
                    $message = "Record Added.";
                } else {
                    $message = "request failed.";
                }
            }

        return $message;
    }

/*
     public function getUserList(){
        $sqlQuery = "SELECT * FROM ".$this->userTable." WHERE id !='".$_SESSION['adminUserid']."' ";
        if(!empty($_POST["search"]["value"])){
            $sqlQuery .= '(id LIKE "%'.$_POST["search"]["value"].'%" ';
            $sqlQuery .= ' OR first_name LIKE "%'.$_POST["search"]["value"].'%" ';
            $sqlQuery .= ' OR last_name LIKE "%'.$_POST["search"]["value"].'%" ';
            $sqlQuery .= ' OR designation LIKE "%'.$_POST["search"]["value"].'%" ';
            $sqlQuery .= ' OR status LIKE "%'.$_POST["search"]["value"].'%" ';
            $sqlQuery .= ' OR mobile LIKE "%'.$_POST["search"]["value"].'%") ';
        }
        if(!empty($_POST["order"])){
            $sqlQuery .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
        } else {
            $sqlQuery .= 'ORDER BY id DESC ';
        }
        if($_POST["length"] != -1){
            $sqlQuery .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
        }
        $result = mysqli_query($this->dbConnect, $sqlQuery);

        $sqlQuery1 = "SELECT * FROM ".$this->userTable." WHERE id !='".$_SESSION['adminUserid']."' ";
        $result1 = mysqli_query($this->dbConnect, $sqlQuery1);
        $numRows = mysqli_num_rows($result1);

        $userData = array();
        while( $users = mysqli_fetch_assoc($result) ) {
            $userRows = array();
            $status = '';
            if($users['status'] == 'active')	{
                $status = '<span class="label label-success">Active</span>';
            } else if($users['status'] == 'pending') {
                $status = '<span class="label label-warning">Inactive</span>';
            } else if($users['status'] == 'deleted') {
                $status = '<span class="label label-danger">Deleted</span>';
            }
            $userRows[] = $users['id'];
            $userRows[] = ucfirst($users['first_name']." ".$users['last_name']);
            $userRows[] = $users['gender'];
            $userRows[] = $users['email'];
            $userRows[] = $users['mobile'];
            $userRows[] = $users['type'];
            $userRows[] = $status;
            $userRows[] = '<button type="button" name="update" id="'.$users["id"].'" class="btn btn-warning btn-xs update">Update</button>';
            $userRows[] = '<button type="button" name="delete" id="'.$users["id"].'" class="btn btn-danger btn-xs delete" >Delete</button>';
            $userData[] = $userRows;
        }
        $output = array(
            "draw"				=>	intval($_POST["draw"]),
            "recordsTotal"  	=>  $numRows,
            "recordsFiltered" 	=> 	$numRows,
            "data"    			=> 	$userData
        );
        echo json_encode($output);
    }
    public function deleteUser(){
        if($_POST["userid"]) {
            $sqlUpdate = "
				UPDATE ".$this->userTable." SET status = 'deleted'
				WHERE id = '".$_POST["userid"]."'";
            mysqli_query($this->dbConnect, $sqlUpdate);
        }
    }
*/
    public function totalProject () {

        $sqlQuery = "SELECT * FROM ".$this->userTable;
        $result = mysqli_query($this->dbConnect, $sqlQuery);
        $numRows = mysqli_num_rows($result);
        return $numRows;
    }
}
?>