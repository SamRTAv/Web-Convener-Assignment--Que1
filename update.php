<?php
// $name = $Roll = $dept = $hostel ='';
$conn = mysqli_connect('localhost','sameer','sam@web','student_management_system');

//check connection
if(!$conn){
    echo 'Connection error: '.mysqli_connect_error();
}


$Roll = "";

if(isset($_POST['updatein'])){
    // global $Roll; 
    $Roll = mysqli_real_escape_string($conn,$_POST['id_to_updatein']);   
}




if(isset($_POST['update'])){
    $Roll = mysqli_real_escape_string($conn,$_POST['id_to_update']);
    if(!empty($_POST['name'])){
        $name = mysqli_real_escape_string($conn,$_POST['name']);
        $namesql = "UPDATE information SET Name = '$name' WHERE Roll_No = '$Roll'";
        mysqli_query($conn,$namesql);
    }
    if(!empty($_POST['dept'])){
        $dept = mysqli_real_escape_string($conn,$_POST['dept']);
        $deptsql = "UPDATE information SET Department = '$dept' WHERE Roll_No = '$Roll'";
        mysqli_query($conn,$deptsql);
    }
    if(!empty($_POST['hostel'])){
        $hostel = mysqli_real_escape_string($conn,$_POST['hostel']);
        $hostelsql = "UPDATE information SET Hostel = '$hostel' WHERE Roll_No = '$Roll'";
        mysqli_query($conn,$hostelsql);
    }
    if(!empty($_POST['roll'])){
        $roll = mysqli_real_escape_string($conn,$_POST['roll']);
        $rollsql = "UPDATE information SET Roll_No = '$roll' WHERE Roll_No = '$Roll'";
        mysqli_query($conn,$rollsql);
    }
    
}



// //close connection
// mysqli_close($conn);
// // echo $students[0]["Roll_No"];

?>


<!DOCTYPE html>
<html lang="en">
<?php include('header.php'); ?>

<section class="container grey-text">
    <h4 class = "center">Update the details of Roll No. - <?php echo $Roll;?></h4>
    <h6 class = "center">You need not enter everything again. Just fill those things which need to be updated leave the rest empty</h5>
    <form action="update.php" class="white" method="POST">
        <label for="">Student Name: </label>
        <input type="text" name ="name">
        <label for="">Roll No.:  </label>
        <input type="text" name ="roll">
        <label for="">Department: </label>
        <input type="text" name ="dept">
        <label for="">Hostel: </label>
        <input type="text" name ="hostel">
        <div class="center">
            <input type="hidden" name= "id_to_update" value = "<?php echo $Roll;?>">
            <input type="submit" name= "update" value = "Update" class ="btn brand z-depth-0">
        </div>
    </form>
</section>
</html>