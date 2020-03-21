<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>php CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
   <?php require_once 'process.php'; ?>
   
   <?php 
    $mysqli = new mysqli('localhost', 'root', '', 'crud') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM data") or die($mysqli->error);
    //pre_r($result);
    pre_r($result->fetch_assoc());
    
    function pre_r($array){
    echo '
    <pre>';
        print_r($array);
        echo '</pre>';
    }
    
    ?>
    <div class="row justify-content-center">
        <form action="process.php" method="POST">
            <div class="form group">
                <label>Name</label>
                <input type="text" name="name" class="form control" placeholder="Enter your name">
            </div>

            <div class="form group">
                <label>Location</label>
                <input type="text" name="location" class="form control" placeholder="Enter your location">
            </div>
            <div class="form group">
                <button type="submit" class="btn btn-primary" name="save">Save</button>
            </div>
    </div>

    </form>

</body>

</html>
