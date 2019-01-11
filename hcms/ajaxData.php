<?php
//Include database configuration file
//Include database configuration file
$conn = mysqli_connect('us-cdbr-iron-east-01.cleardb.net','b55dc263b6abad','4056a8d5','heroku_6ce1e53c155f864');

if(isset($_POST["mainactegory_ID"]) && !empty($_POST["mainactegory_ID"])){
    //Get all state data
    $speciality =$_POST["mainactegory_ID"];
    $sql = "SELECT * from users WHERE speciality ='$speciality' and on_duty = 'yes'";
    $query = mysqli_query($conn,$sql);
    
    //Count total number of rows
    $rowCount = mysqli_num_rows($query);
    
    //Display doctor list
    if($rowCount > 0){
        echo '<option value="" selected disabled required="required">Select Doctor..</option>';
        while($row = mysqli_fetch_assoc($query)){ 
            echo '<option value="'.$row['id'].'">'.$row['title'].' '.$row['fname'].' '.$row['lname'].'</option>';

        }
    }else{
        echo '<option disabled selected>No Doctor on Duty</option>';
    }
}

// if(isset($_POST["subcat1_id"]) && !empty($_POST["subcat1_id"])){
//     //Get all city data
//     $query = $db->query("select * from noorizone.categories where parent = ".$_POST['subcat1_id']);

//     //Count total number of rows
//     $rowCount = $query->num_rows;

//     //Display cities list
//     if($rowCount > 0){
//         echo '<option value="">Select sub cat 2 </option>';
//         while($row = $query->fetch_assoc()){ 
//             echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
//         }
//     }else{
//         echo '<option value="">category not available</option>';
//     }
// }
?>