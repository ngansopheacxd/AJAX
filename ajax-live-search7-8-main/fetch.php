<?php 
    


    $connect = mysqli_connect("localhost", "root","", "live search7_8");
    $output='';

    //* sql statement */
    // a = $_POST["search"]
    // ---> %a% 
    $search = $_POST["search"]; 
    $sql = "SELECT * FROM `customers` WHERE `CustomerName` LIKE '%$search%'";
    $result = mysqli_query($connect, $sql);

    // Create db 
    // Create table | URL: https://www.w3schools.com/sql/sql_create_table.asp


    // echo var_dump($result); 
    // echo "---mysqli_num_rows---"; 
    // echo var_dump(mysqli_num_rows($result)); 

    if(mysqli_num_rows($result) > 0)
    {
        $output .= '<h4 align="center">Search Result</h4>';
        $output .=  '<div class="table-responsive">
                        <table class="table table bordered">
                            <tr>
                                <th>ID</th>
                                <th>CustomerName</th>
                                <th>City</th>
                                <th>Postal Code</th>
                                <th>Country</th>
                            </tr>';
                            
        /* echo "---mysqli_fetch_array---"; 
        echo var_dump(mysqli_fetch_array($result));  */
        
        while($row = mysqli_fetch_array($result))
        {
            $output .= '
                   <tr>
                        <td>'.$row["CustID"].'</td>     
                        <td>'.$row["CustomerName"].'</td>     
                        <td>'.$row["City"].'</td>     
                        <td>'.$row["PostalCode"].'</td>  
                        <td>'.$row["Country"].'</td>
                    </tr>
                    ';
                    // echo $output;
        }
        echo $output;
    }
    else
    {
        echo "Data not found!!";
    }
?>