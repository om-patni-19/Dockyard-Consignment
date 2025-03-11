

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch the Distributor Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    
    
</head>
<body style="margin: 50px;">        
    <h1>Fetch the Sender Data</h1>      
    <br>
    <table class="table">
       <thead>
            <tr>
                <th> Distributor ID</th>
                <th> Distributor Name</th>
                <th> Consignment Number</th>
                <th> Product ID</th>
                <th> Collection Date </th>

            </tr>
        </thead>

        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "dcc";
            $conn="";
            
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            
            if ($conn->connect_error)
            {
                die("Connection failed: ".$conn->connect_error);
            }

            $sql = "Select * from distributor";
            $result = $conn->query($sql);
            echo "Connected successfully"."<br>";

            while($row = $result->fetch_assoc()) {

            


            echo "<tr>
                    <td>". $row["DistributorID"]. "</td>
                    <td> ". $row["DistributorName"]. "</td>
                    <td> ". $row["ConsignmentNo"]. " </td>
                    <td>". $row["ProductID"]. "</td>
                    <td>". $row["CollectionDate"]. "</td>
            </tr>";
            }
            ?>
        </tbody>
    </table>



    
</body>
</html>