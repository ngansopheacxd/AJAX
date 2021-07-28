<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA</title>

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <!-- Bootsrapt -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>

    <!-- CSS -->


</head>
<body>

    <h2>The XMLHttpRequest Object</h2>

    <form action=""> 
    <select name="customers" onchange="showCustomer(this.value)">
        <option value="">Select a customer:</option>
        <option value="1">Number 1</option>
        <option value="2 ">Number 2</option>
        <option value="3">Number 3</option>
    </select>
    </form>
    <br>
    <div id="txtHint">Customer info will be listed here...</div>

    <script>
        function showCustomer(str) {
        if (str == "") {
            document.getElementById("txtHint").innerHTML = "";
            return;
        }
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            document.getElementById("txtHint").innerHTML = this.responseText;
        }
        xhttp.open("GET", "getcustomer.php?q="+str);
        xhttp.send();
        }
    </script>
</body>
</html>