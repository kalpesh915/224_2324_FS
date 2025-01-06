<?php
    require_once("conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <label>Select User to View Data</label>
        <select onchange="loadData(this.value)">
            <option value="0">Select Any User</option>

            <?php
                $sqlQuery = "select id, fname from users";
                $result = $conn->query($sqlQuery);

                while($row = $result->fetch_assoc()){
                    echo "<option value='$row[id]'>$row[fname]</option>";
                }
            ?>
        </select>
    </form>
    <div id="op"></div>
</body>
</html>

<script>
    function loadData(id){
        if(id == 0){
            document.getElementById("op").innerHTML = "";
        }else{
            let xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET", "users.php?id="+id, true);
            xmlhttp.send();

            xmlhttp.onreadystatechange = function(){
                if(xmlhttp.status == 200 && xmlhttp.readyState == 4){
                    document.getElementById("op").innerHTML = xmlhttp.responseText;
                }
            }
        }
    }
</script>