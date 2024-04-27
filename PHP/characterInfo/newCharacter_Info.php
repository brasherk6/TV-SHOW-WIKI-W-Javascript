<!DOCTYPE html>
<html>


<body>

    <div class="row">
        <div class="col-md-4">
            <!-- Begin Container-->
            <div class="carrd">

                <!--Character Name-->
                <div class="characterName">
                    <script>
                        document.write("<b>", sessionStorage.fullName, "</b>");
                    </script>
                </div>


                <!--Character Image-->
                <div class="imageContainer">
                    <div class="tabImage">
                        <script>
                            document.write("<img class=\"headshotImage\" src=", sessionStorage.image, ">");
                        </script>
                    </div>

                    <!--  BIO Info -->
                    <div class="characterInfoBlock">
                        <b>Biographical Information</b>
                    </div>


                    <!--  NAME, AGE, ETC. NO CSS on the first entry, otherwise it looks odd. -->
                    <div class="row no-gutters">
                        <div class="font-weight-bold" style="padding: 4px; width: 31%">
                            Name
                        </div>
                        <div style="padding: 4px; margin-bottom: 1px; width: 69%">
                            <script>
                                document.write(sessionStorage.fullName);
                            </script>
                        </div>

                        <div class="charInfoTitle"> Age </div>
                        <div class="charInfoEntry"> <i>
                                <script>
                                    document.write(sessionStorage.age);
                                </script>
                            </i></div>

                        <div class="charInfoTitle"> Birth Date: </div>
                        <div class="charInfoEntry"> <i>
                                <script>
                                    document.write(sessionStorage.birthday);
                                </script>
                            </i> </div>

                        <div class="charInfoTitle"> Occupation: </div>
                        <div class="charInfoEntry"> <i>
                                <script>
                                    document.write(sessionStorage.occupation);
                                </script>
                            </i> </div>

                        <div class="charInfoTitle"> Status </div>
                        <div class="charInfoEntry"> <i>
                                <script>
                                    document.write(sessionStorage.status);
                                </script>
                            </i> </i> </div>
                    </div> <!--End row no gutters-->

                    <!--  Relationships. -->
                    <div class="characterInfoBlock">
                        <b>Relationships</b>
                    </div>

                    <div class="row no-gutters">
                        <div class="font-weight-bold" style="padding: 4px; width: 31%">
                            Mother:
                        </div>
                        <div style="padding: 4px; margin-bottom: 1px; width: 69%">
                            <script>
                                document.write(sessionStorage.mother);
                            </script>
                        </div>

                        <div class="charInfoTitle"> Father: </div>
                        <div class="charInfoEntry"> <i>
                                <script>
                                    document.write(sessionStorage.father);
                                </script>
                            </i> </div>

                    </div> <!--End row no gutters-->

                    <!-- Actor, Greek God, anything that ties the character to the real world  -->
                    <div class="characterInfoBlock">
                        <b>Assignments</b>
                    </div>

                    <div class="row no-gutters">
                        <div class="font-weight-bold" style="padding: 4px; width: 31%">
                            Actor:
                        </div>
                        <div style="padding: 4px; margin-bottom: 1px; width: 69%">
                            <script>
                                document.write(sessionStorage.actor);
                            </script>
                        </div>

                        <div class="charInfoTitle"> Greek God: </div>
                        <div class="charInfoEntry"> <i>
                                <script>
                                    document.write(sessionStorage.greekGod);
                                </script>
                            </i> </div>

                    </div> <!--End row no gutters-->

                </div><!--end container-->


            </div> <!--end card? col md 8-->

        </div> <!--close col-md-4-->

        <div class="col-md-8">
            <h1 id="characterName">
                <script>
                    document.write(sessionStorage.fullName);
                </script>
            </h1>

            <p>
                <script>
                    document.write(sessionStorage.about);
                </script>
            </p>


            <p id="subtitle">Theories</p>
            <p>
                <script>
                    document.write(sessionStorage.theories);
                </script>
            </p>

            <p id="subtitle">Notes</p>
            <p>
                <script>
                    document.write(sessionStorage.notes);
                </script>
            </p>

        </div> <!--Cold md 8 end-->




    </div> <!--Row Close-->


</body>

</html>