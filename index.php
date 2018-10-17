<style type="text/css">
  table, th, td {
    border: 1px solid black;
}
</style>
<?php  
$database_name="test";
$database_username ="root";
$database_password ="";

$connection = mysql_connect('localhost',$database_username,$database_password);
if(!$connection) {
echo "Cannot connect to the database – incorrect details";
}else{
  mysql_select_db($database_name);
  $query = mysql_query("SELECT * FROM gst_users ");
  echo "<table style='width:70%'>";
        echo "<tr>";
            echo "<th>id</th>";
            echo "<th>first_name</th>";
            echo "<th>email</th>";
        echo "</tr>";
    while($row = mysql_fetch_assoc($query)){
        echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['fullname'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
        echo "</tr>";
    }
  echo "</table>";
}
?>