<!DOCTYPE html>
<html>
<?php include_once('../PHP/HTML_Layout/head.php'); ?>

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
                            <a href="../index.php">Home</a>
                            <a href="amyAbbott.php" class="active" >Amy Abbott</a>
                            <a href="ceceliaAbbott.php">Cecelia Abbott</a>
                            <a href="perryAbbott.php">Perry Abbott</a>
                            <a href="rebeccaAbbott.php">Rebecca Abbott</a>
                            <a href="rhettAbbott.php">Rhett Abbott</a>
                            <a href="royalAbbott.php">Royal Abbott</a>
                            <a href="../addNewCharacter.php">Add A Character</a>
                        </div> <!--Sidebar close-->

                    </div> <!--m-2  Close-->
                </div> <!--Col lg 3  Close-->

                <!--BASIC INFO-->
                <div class="col-lg-9 p-4">
                    <?php include_once('../PHP/characterInfo/amyAbbott_Info.php'); ?>
                </div> <!--col-lg-9 Close-->

            </div> <!--Row Close-->
        </div> <!--container close-->
    </div> <!--card close-->
</body>

</html>