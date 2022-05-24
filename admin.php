<?php
include('session.php');

$query = "SELECT * FROM user";
$result = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin page</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  body{
    background-color: #F4ECB8;
  }
  h1{
    font-family:  Georgia, serif;
    font-size: 55px;   
    text-align: center;
   }
   table{
    background-color: #999966;
    border-radius: 0.80rem;
   }
   #myInput {
  background-position: 5px 5px;
  background-repeat: no-repeat;
  width: 600px;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-top:30px;
  border-radius: 0.80rem;
	margin-left:50px;
}

</style>
<body>
  <br>
  <a href="Main.php"><img src="image/arrow.png" style="width: 80px;" alt="logo"></a>
  <br>
  <h1>Welcome Admin! you can search name of user input</h1>
  <br> 
  <center><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name" >
  </center>
  <br>
  <br>
  <br>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-11">
      <table id="myTable" class="table table-striped table-bordered table-sm" cellspacing="0" width="90%">
  <thead>
    <tr>
      <th class="th-sm">userID
      </th>
      <th class="th-sm">Email
      </th>
      <th class="th-sm">Password
      </th>
      <th class="th-sm">Address
      </th>
      <th class="th-sm">phoneNum
      </th>
      <th class="th-sm">Name
      </th>
    </tr>
  </thead>
  <tbody>
      <?php
      while($user = mysqli_fetch_assoc($result)):
      ?>
    <tr>
      <td><?= $user['userID'] ?></td>
      <td><?= $user['email'] ?></td>
      <td><?= $user['password'] ?></td>
      <td><?= $user['address'] ?></td>
      <td><?= $user['phoneNum'] ?></td>
      <td><?= $user['name'] ?></td>
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>
      </div>
    </div>
  </div>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[5];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</body>
</html>
<!-- <style>
table.dataTable thead .sorting:after,
table.dataTable thead .sorting:before,
table.dataTable thead .sorting_asc:after,
table.dataTable thead .sorting_asc:before,
table.dataTable thead .sorting_asc_disabled:after,
table.dataTable thead .sorting_asc_disabled:before,
table.dataTable thead .sorting_desc:after,
table.dataTable thead .sorting_desc:before,
table.dataTable thead .sorting_desc_disabled:after,
table.dataTable thead .sorting_desc_disabled:before {
bottom: .5em;
}
</style> -->