public function test3()
    {
     
      $h = fopen("report_1.csv", "r");
     
      while (($data = fgetcsv($h, 0, ",")) !== FALSE) 
      {
          print_r($data[4]);
          echo "<br>";
      }
      
    }