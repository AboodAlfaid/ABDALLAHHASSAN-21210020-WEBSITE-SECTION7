<?php 
require_once 'DBController.php';
class ProductController
{
    private $db;

    //1. Open connection.
    //2. Run query & logic.
    //3. Close connection
   //  public function addProduct(Book $product)
   //  {
   //       $this->db=new DBController;
   //       if($this->db->openConnection())
   //       {	
   //          $query="INSERT into books values('$product->BookName','$product->BookAuthor','$product->BookCategory','$product->Price','','$product->ImageRef','$product->Quantity');";
   //          $this->db->setQry($query);
   //          return $this->db->insert();
   //          $this->db->closeConnection();
   //       }
   //       else
   //       {
   //          echo "Error in Database Connection";
   //          return false; 
   //       }     
   //  }
    public function getAllProducts()
    {
         $this->db=new DBController;
         if($this->db->openConnection())
         {
            $this->db->setQry("SELECT * from books;");
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
    public function getProductByID($id)
    {
         $this->db=new DBController;
         if($this->db->openConnection())
         {
            $this->db->setQry("SELECT * from books Where BookID=$id");
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
    
    public function deleteProduct($Sku)
    {
         $this->db=new DBController;
         if($this->db->openConnection())
         {
            $query="delete from products where sku = '$Sku'";
            $this->db->setQry($query);
            $result = $this->db->delete($query);
            $this->db->closeConnection();
            return $result;
         }
         else
         {
            echo "Error in Database Connection";
            return false; 
         }
    } 
}

?>