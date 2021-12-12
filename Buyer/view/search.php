<html>
<head>
</head>
    <title>view Profile</title>
     <?php include 'navbar.php'?>
     <link rel="stylesheet" href="../controller/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">

<body>
<div class="content">
    <div class="dashboard">
        <?php 
            include_once './dashboard.php';
        ?>
    </div>
<div class="search-box">
        <input type="text" id="search" placeholder="Search" />
    <br>
    <br />
    <!-- Suggestions will be displayed in below div. -->
    <div id="display"></div><br><br> <hr>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script>
            function fill(Value) {
            //Assigning value to "search" div in "search.php" file.
            $('#search').val(Value);
            //Hiding "display" div in "search.php" file.
            $('#display').hide();
        }
        $(document).ready(function() {
            //On pressing a key on "Search box" in "search.php" file. This function will be called.
            $("#search").keyup(function() {
                //Assigning search box value to javascript variable named as "name".
                var name = $('#search').val();
                //Validating, if "name" is empty.
                if (name == "") {
                    //Assigning empty value to "display" div in "search.php" file.
                    $("#display").html("");
                }
                //If name is not empty.
                else {
                    //AJAX is called.
                    $.ajax({
                    //AJAX type is "Post".
                        type: "POST",
                        //Data will be sent to "ajax.php".
                        url: "../controller/ajax.php",
                        //Data, that will be sent to "ajax.php".
                        data: {
                            //Assigning value of "name" into "search" variable.
                            search: name
                        },
                        //If result found, this funtion will be called.
                        success: function(html) {
                            //Assigning result to "display" div in "search.php" file.
                            $("#display").html(html).show();
                        }
                    });
                }
            });
        });
        </script>
    </div>
    </div>
</body>

</html>