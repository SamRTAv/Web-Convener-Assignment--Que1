<?php
// include('index1.php');
// include('index2.php')

//connect to databse using mysqli(introduced)
$conn = mysqli_connect('localhost','sameer','sam@web','student_management_system');

//check connection
if(!$conn){
    echo 'Connection error: '.mysqli_connect_error();
}

if(isset($_POST['delete'])){
    $Roll_No = mysqli_real_escape_string($conn,$_POST['id_to_delete']);
    $remove = "DELETE FROM information WHERE Roll_No = '$Roll_No'";

    if(mysqli_query($conn,$remove)){
        header('Location: index.php');
    }
    else{
        echo 'query error'. mysqli_error($conn);
    }
}

if (isset($_POST['Searchbtn'])){
    if(empty($_POST['Searchbar'])){
        echo "You have not entered the roll no.".'<br/>';
    }
    else{
        $Roll = mysqli_real_escape_string($conn,$_POST['Searchbar']);
    }
    
}

//write query to get the table
$sql = "SELECT * FROM information WHERE Roll_No = '$Roll'";

$result = mysqli_query($conn, $sql);

//fetch the reuslt rows as an array
$students = mysqli_fetch_all($result, MYSQLI_ASSOC);

//free result from memory
mysqli_free_result($result);

//close connection
mysqli_close($conn);
// echo $students[0]["Roll_No"];
?>
<!DOCTYPE html>
<html lang="en">

<body>
    <?php include('header.php'); ?>
    <h4 class="center grey-text">Student Table</h4>
    <div><br></div>
    <table>
        <tr>
            <!-- <th><h6><strong>S. No.</strong></h6></th> -->
            <th><h6><strong>Roll_No</strong></h6></th>
            <th><h6><strong>Student Name</strong></h6></th>
            <th><h6><strong>Department</strong></h6></th>
            <th><h6><strong>Alloted Hostel</strong></h6></th>
            <th><h6><strong>Icon to delete</strong></h6></th>
        </tr>
        
        <?php foreach($students as $student){ ?>
        <tr>
            <td><?php echo htmlspecialchars($student['Roll_No']);?></td>
            <td><?php echo htmlspecialchars($student['Name']);?></td>
            <td><?php echo htmlspecialchars($student['Department']);?></td>
            <td><?php echo htmlspecialchars($student['Hostel']);?></td>
            <td>
                <form action="index.php" method="POST">
                    <input type="hidden" name= "id_to_delete" value = "<?php echo $student['Roll_No'];?>"><input type="submit" name= "delete" value = "Delete" class ="btn brand z-depth-0">
                </form>
            </td>
            </tr>
        <?php } ?> 
    </table>
        
    
<?php include('tempates/footer.php'); ?>
>
    
    
    
</body>
</html>