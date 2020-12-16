<?php
   include('db_config.php');
   class car_ms {
      public $query;
      public $statement;

      function car_ms() {
         session_start();
      }
      
      function execute($data = null)
      {
         $this->statement = $this->connect->prepare($this->query);
         if($data)
         {
            $this->statement->execute($data);
         }
         else
         {
            $this->statement->execute();
         }		
      }
   
      function row_count()
      {
         return $this->statement->rowCount();
      }
   
      function statement_result()
      {
         return $this->statement->fetchAll();
      }
   
      function get_result()
      {
         return $this->connect->query($this->query, PDO::FETCH_ASSOC);
      }
   
   }
