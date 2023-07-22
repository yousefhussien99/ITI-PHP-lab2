<?php
$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
$address = $_POST['address'];
$country = $_POST['country'];
$Department = $_POST['Department'];
$gender = $_POST['Gender'];
$skills = $_POST['skills'];
$myfile = fopen("customer.txt", "a") or die("Unable to open file!");
$txt = $Fname . "," . $Lname . "," . $address . "," . $country . "," . $Department . "," . $gender . "," . $skills . "\n";
fwrite($myfile, $txt);
fclose($myfile);

$myfile = fopen("customer.txt", "r") or die("Unable to open file!");
echo "<table border='1 id='myTable'>";
echo "<tr>";
echo "<th>First Name</th>";
echo "<th>Last Name</th>";
echo "<th>Address</th>";
echo "<th>Country</th>";
echo "<th>Department</th>";
echo "<th> Delete</th>
</tr>"; 
while (!feof($myfile)) {
    $line = fgets($myfile);
    $arr = explode(",", $line);
    if (count($arr) >= 5) {
        echo "<tr>";
        echo "<td>" . $arr[0] . "</td>";
        echo "<td>" . $arr[1] . "</td>";
        echo "<td>" . $arr[2] . "</td>";
        echo "<td>" . $arr[3] . "</td>";
        echo "<td>" . $arr[4] . "</td>";
        echo "<td><button onclick='deleteRow(this)'>Delete</button> </td>";
        echo "</tr>";
    }
}
echo "</table>";
fclose($myfile);
?>
<style >
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    table{
        width: 80 %;
        border-collapse: collapse;
        margin: 50px auto;

    }
    th,td{
        border: 1px solid black;
        padding: 10px;
        text-align: center;
    }
    th{
        background-color: #ccc;
    }
    tr:nth-child(even){
        background-color: #eee;
    }
    tr:hover{
        background-color: #ccc;
    }
    button{
        padding: 5px;
        border-radius: 5px;
        border: none;
        background-color: red;
        color: white;
        cursor: pointer;
    }
    button:hover{
        background-color: #000;
    }
</style>
<script>
    function deleteRow(r) {
        var i = r.parentNode.parentNode.rowIndex;
        document.getElementById("myTable").deleteRow(i);
        
    }
</script>