<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <!-- Bootsrapt -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>

    <!-- CSS -->
    <style>
        #result {
         position: absolute;
         width: 100%;
         max-width:870px;
         cursor: pointer;
         overflow-y: auto;
         max-height: 400px;
         box-sizing: border-box;
         z-index: 1001;
        }
        .link-class:hover{
         background-color:#f1f1f1;
        }
    </style>


</head>
<body>

    <div class="container">
        <br /><br />
        <h2 align="center">Ajax Live Data Search using Jquery PHP MySql</h2><br />
        <div class="form-group">
            <div class="input-group" method="post">
                <span class="input-group-addon">Search</span>
                <input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />
            </div>
        </div>
        <br />
        <div id="result"></div>
    </div>
    
</body>
<script>
    $(document).ready(function(){

        $('#search_text').keyup(function(){
            
            var txt = $(this).val();
            if (txt != '') {
                $.ajax({
                    url:"fetch.php",
                    method:"POST",
                    data:{
                        // search = $_POST['search']
                        search: txt
                    },
                    success:function(data){
                    $('#result').html(data);
                    }
                });
            }

            else {
                $("#result").html(data);

                $.ajax({
                    url:"fetch.php",
                    method:"POST",
                    data:{
                        // search = $_POST['search']
                        search:txt
                    },
                    dataType:"text",
                    success:function(data){
                    $('#result').html(data);
                    }
                });
            }
        });
        
    });
</script>
</html>