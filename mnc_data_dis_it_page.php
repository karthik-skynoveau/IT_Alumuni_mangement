<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT-department-datails</title>
    <style>
    <?php include "data_dis_it_page.css"?>
    </style>

</head>

<body>
    <div class="dis_container">
        <div class="college_name_container">
            <img src="./images/logo.png" alt="logo">
            <p>KONGUNADU COLLEGE OF ENGINEERING AND TECHNOLOGY (AUTONOMOUS)</br> Namakkal-Trichy Main Road,
                Tholurpatti,Thottiam- Taluk,<br> Trichy- Dist, Tamil Nadu -621 215</p>
        </div>

        <p class="dep_title">
            IT DEPARTMENT ALUMINI MNC STUDENTS DETAILS
        </p>

        <div class="update_button_contaniner">

            
            <a href="./mnc_admin_login/login.php"><button>Admin</button></a>
            <!-- <a href="./data_updating_page.php"><button>Admin</button></a> -->

        </div>

        <div class="server_data">

            <table class="db_tabel_main_it">
                <tr>

                    <th>Register No</th>
                    <th>Name</th>
                    <th>Phone number</th>
                    <th>Email-ID</th>
                    <th>Company Name</th>
                    <th>Location</th>
                </tr>
                <?php
                  $res=mysqli_query($Link,"select * from mnc_it_students");
while($row=mysqli_fetch_array($res))
{
    echo "<tr class='db_tabel_it'>";
  
        echo "<td>"; echo $row["registerno"]; echo"</td>";
        echo "<td>"; echo $row["stdname"]; echo"</td>";
        echo "<td>"; echo $row["phno"]; echo"</td>";
        echo "<td>"; echo $row["email"]; echo"</td>";
        echo "<td>"; echo $row["cpyname"]; echo"</td>";
        echo "<td>"; echo $row["location"]; echo"</td>";
    echo "</tr>";
}
?>
            </table>

        </div>
    </div>
</body>


</html>