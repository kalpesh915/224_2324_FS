<script>
    function showHint(fname){
        //alert(fname);
        if(fname === ""){
            document.getElementById("op").innerHTML = "";
        }else{
            let xmlHttp = new XMLHttpRequest();
            xmlHttp.open("GET", "names.php?fname="+fname, true);
            xmlHttp.send();

            xmlHttp.onreadystatechange = function(){
                if(xmlHttp.readyState == 4 && xmlHttp.status == 200){
                    document.getElementById("op").innerHTML = xmlHttp.responseText;
                }
            }
        }
    }
</script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <label>Enter First Name : </label>
        <input type="text" name="fname" id="fname" onkeyup="showHint(this.value)">
    </form>

    <p>Suggestion : <span id="op"></span></p>
</body>
</html>