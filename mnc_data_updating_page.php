<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>updating-page</title>
    <link rel="styleSheet" href="./data_updating_page1.css">
</head>

<body>
    <div class="updating_main_container">
        <div class="updating_container">
            <div class="college_name_container">
                <img src="./images/logo.png" alt="logo">
                <p>KONGUNADU COLLEGE OF ENGINEERING AND TECHNOLOGY (AUTONOMOUS)</br> Namakkal-Trichy Main Road,
                    Tholurpatti,Thottiam- Taluk,<br> Trichy- Dist, Tamil Nadu -621 215</p>
            </div>
            <p class="update_title">
                UPDATE  MNC  STUDENTS  DETAILS  HERE
            </p>
            <form class="form-container" action="" method="post" name="form1">

                <table id="form_table_1">
                    <tr>
                        <td> <label for="registerno">Register No</label></td>
                        <td> <input type="number" name="registerno" id="regno" placeholder="registerno"></td>
                    </tr>

                    <tr>
                        <td> <label for="stdname" style="margin-left:3px;">Name</label><br></td>
                        <td><input type="text" name="stdname" id="stdname" placeholder="name"></td>
                    </tr>

                    <tr>
                        <td> <label for="phno" style="margin-left:3px;">Phome number</label><br></td>
                        <td><input type="number" name="phno" id="phno" placeholder="ph no"></td>
                    </tr>

                    <tr>
                        <td> <label for="email" style="margin-left:3px;">Email-ID</label><br></td>
                        <td><input type="email" name="email" id="email" placeholder="Email-ID"></td>
                    </tr>

                    <tr>
                        <td> <label for="cpyname" style="margin-left:3px;">Company Name</label><br></td>
                        <td> <input type="text" name="cpyname" id="cpyname" placeholder="company name"></td>
                    </tr>

                    <tr>
                        <td> <label for="location" style="margin-left:3px;">Location</label><br></td>
                        <td> <input type="text" name="location" id="location" placeholder="Location"></td>
                    </tr>

                    <tr>
                        <td colspan="3">
                            <input type="submit" name="insert" value="Insert" id="insert_btn">
                            <input type="submit" name="update" value="Update" class="del-btn" id="update_btn">
                            <input type="submit" name="delete" value="Delete" class="del-btn" id="delete_btn">
                        </td>
                    </tr>
                </table>


            </form>
        </div>
    </div>
</body>

<?php
if(isset($_POST["insert"])){
    mysqli_query($Link , "insert into mnc_it_students values(NULL,'$_POST[registerno]','$_POST[stdname]','$_POST[phno]','$_POST[email]','$_POST[cpyname]','$_POST[location]')");
    header('Location:mnc_data_dis_it_page.php');

    ?>
    <script type="text/javaScript">
        window.location.href=window.location.href;
        </script>
    <?php
}
if(isset($_POST["delete"])){
    mysqli_query($Link , "delete from mnc_it_students where registerno='$_POST[registerno]'") or die(mysqli_error($Link));
    header('Location:mnc_data_dis_it_page.php');

   ?>
<script type="text/javaScript">
    window.location.href=window.location.href;
    </script>
<?php

}
if(isset($_POST["update"])){
    mysqli_query($Link,"update mnc_it_students set cpyname='$_POST[cpyname]',location='$_POST[location]' where registerno='$_POST[registerno]'") or die(mysqli_error($Link));
    header('Location:mnc_data_dis_it_page.php');
    
   ?>
<script type="text/javaScript">
    window.location.href=window.location.href;
    </script>
<?php
}
?>

</html>