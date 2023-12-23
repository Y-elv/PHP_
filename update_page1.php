<?php include('header.php');?>
<?php include('dbcon.php');?>

<?php

if(isset($_GET['id'])){
    $id=$_GET['id'];

}

    $query = "select * from `students` where `id` ='$id'";

    $result = mysqli_query($connection,$query);

    if(!$result){
   die("query failed".mysqli_error());
    }
    else{
  $row= mysqli_fetch_assoc($result);
  // print_r($row);

}

?>

<form>
<div class="form-group">
            <label for="f_name">First Name</label>
            <input type="text"name="f_name"class="form-control"value="<?php echo $row['first_name'] ?>">
          </div>

          <div class="form-group">
            <label for="l_name">Last Name</label>
            <input type="text"name="l_name"class="form-control"value="<?php echo $row['last_name'] ?>">
          </div>

          <div class="form-group">
            <label for="age">Age</label>
            <input type="text"name="age"class="form-control"value="<?php echo $row['age'] ?>">
          </div>

</form>


<?php include('footer.php');?>