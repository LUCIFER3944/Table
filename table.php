<?php
include("data.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php
  require('nav.php')
  ?>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">sno</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
          </tr>
        </thead>
        <?php
        $sql="SELECT * FROM `table`";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($result)){
      
          echo '<tr>';
                echo '<td>' . $row['sno'] . '</td>';
                echo '<td>' . $row['name'] . '</td>';
                echo '<td>' . $row['email'] . '</td>';
                echo '<td>' . $row['phone'] . '</td>';
                echo '</tr>';
   
        }

        
        ?>
      </table>
</body>
</html>