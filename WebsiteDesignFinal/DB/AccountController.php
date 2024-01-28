<?php 
require_once 'DBController.php';
class AccountController
{
    private $db;

    //1. Open connection.
    //2. Run query & logic.
    //3. Close connection
    public function addUser($Username,  $Subscription, $password)
    {
         $this->db=new DBController;
         if($this->db->openConnection())
         {	
            $query="INSERT into accounts values('NULL','$Username','$Subscription','$password');";
            $this->db->setQry($query);
            return $this->db->insert();
            $this->db->closeConnection();
         }
         else
         {
            echo "Error in Database Connection";
            return false; 
         }     
    }
    public function getAllUsers()
    {
         $this->db=new DBController;
         if($this->db->openConnection())
         {
            $this->db->setQry("SELECT * from accounts;");
            $result=$this->db->select();
            $this->db->closeConnection();
            return $result;
         }
         else
         {
            echo "Error in Database Connection";
            return false; 
         }
    }
    public function getUserByID($id)
    {
         $this->db=new DBController;
         if($this->db->openConnection())
         {
            $this->db->setQry("SELECT * from accounts Where UserID=$id");
            $product=$this->db->select();
            $this->db->closeConnection();
            return $product;
         }
         else
         {
            echo "Error in Database Connection";
            return false; 
         }
    }
    function login_user($Username, $password)
   {
      $this->db=new DBController;
      if($this->db->openConnection())
      {
         $this->db->setQry("SELECT * from accounts Where Username='$Username'");
         $product=$this->db->select();
         $this->db->closeConnection();
         return $product;
      }
      else
      {
         echo "Error in Database Connection";
         return false; 
      }

   }
}


?>