<!DOCTYPE html>
<html>

<?php include_once('PHP/HTML_Layout/head.php'); ?>

<!-- CSS Import -->
<link rel="stylesheet" href="CSS/index.css">
<link rel="stylesheet" href="CSS/card.css">
<body>

    <!----------- HEADER IMAGE -------------------->
    <div class="header py-4 rounded-0 border-0 mx-auto" style="background: url(https://file.garden/ZVWPh8PdJFNCIhss/Sites/Resume1/Outer%20Range%20Promo%20wide2.jpg); 
           background-size: cover; background-position:center; height:400px; width: 90%;">
    </div> <!--Header Image close-->

    <div class="card rounded-0 border-0 mx-auto" style="width: 90%">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="m-2 pt-2 pl-3">

                         <!-- The sidebar -->
                         <div class="sidebar">
                            <a href="index.php">Home</a>
                            <a href="Characters/amyAbbott.php">Amy Abbott</a>
                            <a href="Characters/ceceliaAbbott.php">Cecelia Abbott</a>
                            <a href="Characters/perryAbbott.php">Perry Abbott</a>
                            <a href="Characters/rebeccaAbbott.php">Rebecca Abbott</a>
                            <a href="Characters/rhettAbbott.php">Rhett Abbott</a>
                            <a href="Characters/royalAbbott.php">Royal Abbott</a>
                        </div> <!--Sidebar close-->


                    </div> <!--m-2  Close-->
                </div> <!--Col lg 3  Close-->

                <!--BASIC INFO-->
                <div class="col-lg-9 p-4">
                    <div class="info m-4">
                        <h1>Success!</h1>
                        <p>Please note that this information is locally stored and will disappear when you exit the page!
                        </p>
                    </div> <!--info Close-->


                    <div class="info m-4">
                        <?php include_once('PHP/characterInfo/newCharacter_Info.php'); ?>
                    </div> <!--info m-4 Close-->

                </div> <!--col-lg-9 Close-->

            </div> <!--Row Close-->
        </div> <!--container close-->
    </div> <!--card close-->

</body>

</html>