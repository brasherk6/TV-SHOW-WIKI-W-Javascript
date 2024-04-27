<!DOCTYPE html>
<html>



<?php include_once('PHP/HTML_Layout/head.php'); ?>

<!-- CSS Import -->
<link rel="stylesheet" href="CSS/index.css">
<link rel="stylesheet" href="CSS/card.css">
<script src="Javascript/creditArrays.js"></script>
<script src="Javascript/addCharacter.js"></script>



<body>

<?php include_once('PHP/HTML_Layout/headerimage.php'); ?>

    <div class="card rounded-0 border-0 mx-auto" style="width: 80%">

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
                            <a href="addNewCharacter.php" class="active" >Add A Character</a>
                        </div> <!--Sidebar close-->

                    </div> <!--m-2  Close-->
                </div> <!--Col lg 3  Close-->

                <!--BASIC INFO-->
                <div class="col-lg-9 p-4">
                    <div class="info m-4">
                        <h1>Add a character!</h1>
                        <p>Please ensure that all required fields have been filled. <br>
                            For convenience purposes, this form has been prefiled, but it can still be edited!
                        </p>
                    </div> <!--info Close-->


                    <div class="info m-4">
                        <main>
                            <h1>Reservation Request</h1>
                            <form action="characterAdded.php" method="get" name="reservation_form" id="reservation_form" class="show">
                                <fieldset>
                                    <legend>Biographical Information</legend>

                                    <label for="fullName">*Full Name:</label>
                                    <input type="text" value="John Doe" name="fullName" id="fullName">
                                    <span id="fullName_error">&nbsp;</span> <br>

                                    <label for="image">*Image: </label>
                                    <input type="url" value="https://file.garden/ZVWPh8PdJFNCIhss/Sites/OuterRangeWiki/image.png" name="image" id="image">
                                    <span id="image_error">&nbsp;</span> <br>

                                    <label for="age">*Age: </label>
                                    <input type="number" value="37" name="age" id="age">
                                    <span id="age_error">&nbsp;</span> <br>

                                    <label for="birthday">Birthday: </label>
                                    <input type="date" value="1996-05-24" name="birthday" id="birthday"> <br>

                                    <label for="occupation">*Occupation: </label>
                                    <input type="occupation" value="Arist" name="occupation" id="occupation">
                                    <span id="occupation_error">&nbsp;</span> <br>

                                    <label>Status</label>
                                    <input type="radio" name="status" id="Alive" value="Alive" checked>Alive
                                    <input type="radio" name="status" id="Deceased" value="Deceased">Deceased<br>
                                </fieldset>

                                <fieldset>
                                    <legend>Relationships</legend>

                                    <label for="mother">Mother: </label>
                                    <input type="text" name="mother" id="mother" value="Jane Doe"> <br>

                                    <label for="father">Father: </label>
                                    <input type="text" name="father" id="father" value="Mark Doe"> <br>

                                </fieldset>

                                <fieldset>
                                    <legend>Assignments</legend>

                                    <label for="actor">Actor: </label>
                                    <input type="text" name="actor" id="actor" value="John Smith"><br>

                                    <label for="greekGod">Greek God: </label>
                                    <input type="text" name="greekGod" id="greekGod" value="Hermes"> <br>
                                </fieldset>

                                <fieldset>
                                    <legend>Biography</legend>

                                    <label for="about">About: </label> <br>
                                    <textarea name="about" id="about" rows="8" cols="50"> is a character introduced during season 1, episode 4. First appearing as a quiet, run of the mill farmer John Doe is initially written off as a background character. However, during the events of season s2, episode 7, he becomes pivotal in the plot line.</textarea>
                                    <br> <br>

                                    <label for="theories">Theories: </label> <br>
                                    <textarea name="theories" id="theories" rows="8" cols="50"> John Doe might be a representation of the Greek God Hermes </textarea>
                                    <br><br>

                                    <label for="notes">Notes: </label> <br>
                                    <textarea name="notes" id="notes" rows="8" cols="50"> There is a fair chance that he is involved in Autumn's past. <br> In my personal opinion, a different actor should have been cast for this character. John Smith continuously fails to deliver his lines in a convincing manner and it is deterimental to the characters impact himself. </textarea>
                                    <br> <br>
                                </fieldset>

                                <input type="button" onClick="validateInput()" id="submit_request" value="Submit Reservation"><br>
                            </form>
                        </main>
                    </div> <!--info m-4 Close-->
                </div> <!--col-lg-9 Close-->
            </div> <!--Row Close-->
        </div> <!--container close-->
    </div> <!--card close-->
</body>

</html>