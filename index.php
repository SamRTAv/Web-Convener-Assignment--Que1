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


//write query to get the table
$sql = 'SELECT * FROM information';

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
    <div class="searchbar">

        <table>
            <form action="find.php" method = "POST">
            <th style="width: 85%;"><input type="text" name = "Searchbar" placeholder="Search for the Roll Number"></th>
            <th style="width: 15%;"><input type="submit" name = "Searchbtn" value="Search" class ="btn brand z-depth-0" ></th>
            </form>
        </table>
    </div>
    <div>
        <br>
    </div>
    <table>
        <tr>
            <!-- <th><h6><strong>S. No.</strong></h6></th> -->
            <th><h6><strong>Roll_No</strong></h6></th>
            <th><h6><strong>Student Name</strong></h6></th>
            <th><h6><strong>Department</strong></h6></th>
            <th><h6><strong>Alloted Hostel</strong></h6></th>
            <th><h6><strong>Delete the Record</strong></h6></th>
            <th><h6><strong>Update the Record</strong></h6></th>
        </tr>

        <?php foreach($students as $student){ ?>
        <tr>
            <td><?php echo htmlspecialchars($student['Roll_No']);?></td>
            <td><?php echo htmlspecialchars($student['Name']);?></td>
            <td><?php echo htmlspecialchars($student['Department']);?></td>
            <td><?php echo htmlspecialchars($student['Hostel']);?></td>
            <td>
                <form action="index.php" method="POST">
                    <input type="hidden" name= "id_to_delete" value = "<?php echo $student['Roll_No'];?>">
                    <input type="submit" name= "delete" value = "Delete" class ="btn brand z-depth-0">
                </form>
            </td>
            <td>
                <form action="update.php" method="POST">
                    <input type="hidden" name= "id_to_updatein" value = "<?php echo $student['Roll_No'];?>">
                    <input type="submit" name= "updatein" value = "Update" class ="btn brand z-depth-0">
                </form>
            </td>
            </tr>
        <?php } ?> 
    </table>
        
    
<?php include('tempates/footer.php'); ?>
>
    
    
    
</body>
</html>