<?php
// $name = $Roll = $dept = $hostel ='';
$conn = mysqli_connect('localhost','sameer','sam@web','student_management_system');

//check connection
if(!$conn){
    echo 'Connection error: '.mysqli_connect_error();
}

if(isset($_POST['submit'])){
    if(empty($_POST['name'])){
        echo "You have not entered the name" .'<br/>';
    }
    else{
        $name = mysqli_real_escape_string($conn,$_POST['name']);
    }

    if(empty($_POST['roll'])){
        echo "You have not entered the roll no.".'<br/>';
    }
    else{
        $Roll =  mysqli_real_escape_string($conn, $_POST['roll'] );
    }

    if(empty($_POST['dept'])){
        echo "You have not entered the department".'<br/>';
    }
    else{
        $dept = mysqli_real_escape_string($conn, $_POST['dept'] );
    }

    if(empty($_POST['hostel'])){
        echo "You have not entered the hostel".'<br/>';
    }
    else{
        $hostel = mysqli_real_escape_string($conn, $_POST['hostel'] );
    }

    $sql = "INSERT INTO information(Name,Roll_No,Department,Hostel) VALUES('$name','$Roll','$dept','$hostel')";

    if(mysqli_query($conn,$sql)){
        //success
        header('Location: index.php');
    }
    else{
        echo "query error".mysqli_error($conn);
    }
        
}


?>
<!DOCTYPE html>
<html lang="en">
<?php include('header.php'); ?>

<section class="container grey-text">
    <h4 class = "center">Add a student</h4>
    <form action="add.php" class="white" method="POST">
        <label for="">Student Name: </label>
        <input type="text" name ="name">
        <label for="">Roll No.:  </label>
        <input type="text" name ="roll">
        <label for="">Department: </label>
        <input type="text" name ="dept">
        <label for="">Hostel: </label>
        <input type="text" name ="hostel">
        <div class="center">
            <input type="submit" name = "submit" value= "submit" class = "btn brand z-depth-0">
        </div>
    </form>
</section>
</html>