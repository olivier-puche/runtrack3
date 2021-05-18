<?php
require_once("users.php");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="#">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Runtrack3 - Jour04 - Job04</title>
</head>

<body>

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">E-mail</th>
    </tr>
  </thead>
  <tbody id="users">
      
  </tbody>
</table>
<form action="" method="GET">
    <button class="btn btn-primary" type="button" id="update" name="update">update</button>
</form>

<script>
$("#update").click(function () {
    var oReq = new XMLHttpRequest();
    oReq.onload = function() {
      json = JSON.parse(this.responseText);

      var list = 0;
      for (var i=0; i<json.length; i++) {
      list += '<tr><td>'+json[i].id+'</td>'+'<td>'+json[i].prenom+'</td>'+'<td>'+json[i].nom+'</td>'+'<td>'+json[i].email+'</td></tr>';
      }
      list = list.replace("0", "");
      document.getElementById("users").innerHTML = list;
    };
    oReq.open("get", "users.php", true);
                              
    oReq.send();
});
</script>

</body>
</html>
