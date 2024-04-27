<!DOCTYPE html>
<html>

<?php include_once('PHP/HTML_Layout/head.php'); ?>

<!-- CSS Import -->
<link rel="stylesheet" href="CSS/index.css">
<link rel="stylesheet" href="CSS/card.css">

<body>

    <?php include_once('PHP/HTML_Layout/headerimage.php'); ?>

    <div class="card rounded-0 border-0 mx-auto" style="width: 80%">

        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-3">
                    <div class="m-2 pt-2 pl-3">
                        <!-- The sidebar -->
                        <div class="sidebar">
                            <a href="index.php" class="active">Home</a>
                            <a href="Characters/amyAbbott.php">Amy Abbott</a>
                            <a href="Characters/ceceliaAbbott.php">Cecelia Abbott</a>
                            <a href="Characters/perryAbbott.php">Perry Abbott</a>
                            <a href="Characters/rhettAbbott.php">Rhett Abbott</a>
                            <a href="Characters/rebeccaAbbott.php">Rebecca Abbott</a>
                            <a href="Characters/royalAbbott.php">Royal Abbott</a>
                            <a href="addNewCharacter.php">Add A Character</a>
                        </div> <!--Sidebar close-->
                    </div> <!--m-2  Close-->
                </div> <!--Col lg 3  Close-->

                <!--BASIC INFO-->
                <div class="col-lg-9 p-4">
                    <?php include_once('PHP/HTML_Layout/introduction.php'); ?>


                    <div class="info m-4">
                        <iframe width="520" height="275" src="https://www.youtube.com/embed/pIxgBqTBZZA?si=UHhNoNLt4iS95yQu" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <iframe width="520" height="275" src="https://www.youtube.com/embed/8UkDdTMZh14?si=BuHmD__GQXhhzTz8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <div class="row">
                            <div class="col-3">
                                <p><B>Executive Produced By:</B></p>
                                <p id="producers"> </p>
                                <script src="Javascript/producerArray.js"></script>
                            </div> <!-- End col-3 -->

                            <div class="col-3">
                                <p><B>Directed By:</B></p>
                                <p id="directors"> </p>
                                <script src="Javascript/directorArray.js"></script>
                            </div> <!-- End col-3 -->
                        </div> <!-- End row -->
                    </div> <!--info m-4 Close-->

                </div> <!--col-lg-9 Close-->

            </div> <!--Row Close-->
        </div> <!--container close-->
    </div> <!--card close-->
</body>

</html>