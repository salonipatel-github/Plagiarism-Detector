<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="problem.css">
    <a href="https://fonts.googleapis.com/css2?family=Crimson+Pro"></a>
    <title>Searching Page</title>
</head>

<body>
    <!-- navbar -->
    <nav>
        <div class="container main-nav flex">
            <a href="#" class="company-logo">
                <img src="assett.png" alt="company logo"> <div class="nav-links" id="nav-links">
                <ul class="flex">
                    <li><a href="index.html" class="hover-link1">Home</a></li>
                    <li><a href="#" class="hover-link1">About</a></li>
                    <li><a href="#" class="hover-link1">Team</a></li>
                    <li><a href="#" class="hover-link1">Project</a></li>
                    <li><a href="#" class="hover-link1">Result</a></li>


                </ul>
            </div>
            <a href="#" class="nav-toggle hover-link" id="nav-toggle">
                <i class="fa-solid fa-bars"></i>
            </a>
        </div>
    </nav>


    <h1 class="hed">Online Integrated Platform For Projects </h1>


    <!-- second page -->

    <form class="box" action="" method="post">
        <div class="cont1">

            <input type="text" class="sel1" placeholder=" Search.." name="Search" id="state" class="form-control">
            <button type="submit" name="chack" class="btn3">Chack</button>

        </div>
        <div class="cont">
            <label for="value"> Degree<label>
                    <select class="sel" name="degree"  id="degree1" class="form-control">
                        <option value="degree">Select Here</option>
                        <option value="degree">B.Tech</option>
                        <option value="degree">M.Tech</option>
                        <option value="degree">B.S.C</option>
                        <option value="degree">M.S.C</option>
                        <option value="degree">M.B.A</option>
                        <option value="degree">B.B.A</option>
                    </select>

                    <label for="value"> Categories </label>
                    <select class="sel" name="Categories"   id="degree1" class="form-control">
                        <option value="Categories">Select Here</option>
                        <option value="Categories">Softwere</option>
                        <option value="Categories">Hardwere</option>
                    </select>
        </div>


        <div class="cont">
            <label for="value"> State</label>
            <select class="sel" name="state"  id="state" class="form-control">
                <option  value="state">Select Here</option>
                <option  value="state">Andhra Pradesh</option>
                <option  value="state">Andaman and Nicobar Islands</option>
                <option  value="state">Arunachal Pradesh</option>
                <option  value="state">Assam</option>
                <option  value="state">Bihar</option>
                <option  value="state">Chandigarh</option>
                <option  value="state">Chhattisgarh</option>
                <option  value="state">Dadar and Nagar Haveli</option>
                <option  value="state">Daman and Diu</option>
                <option  value="state">Delhi</option>
                <option  value="state">Lakshadweep</option>
                <option  value="state">Puducherry</option>
                <option  value="state">Goa</option>
                <option  value="state">Gujarat</option>
                <option  value="state">Haryana</option>
                <option  value="state">Himachal Pradesh</option>
                <option  value="state">Jammu and Kashmir</option>
                <option  value="state">Jharkhand</option>
                <option  value="state">Karnataka</option>
                <option  value="state">Kerala</option>
                <option  value="state">Madhya Pradesh</option>
                <option  value="state">Maharashtra</option>
                <option  value="state">Manipur</option>
                <option  value="state">Meghalaya</option>
                <option  value="state">Mizoram</option>
                <option  value="state">Nagaland</option>
                <option  value="state">Odisha</option>
                <option  value="state">Punjab</option>
                <option  value="state">Rajasthan</option>
                <option  value="state">Sikkim</option>
                <option  value="state">Tamil Nadu</option>
                <option  value="state">Telangana</option>
                <option  value="state">Tripura</option>
                <option  value="state">Uttar Pradesh</option>
                <option  value="state">Uttarakhand</option>
                <option  value="state">West Bengal</option>
            </select>

            <label for="value"> Year Making<label>
                    <select class="sel" name=" Making"   id="degree1" class="form-control">
                        <option  value=" Making">Select Here</option>
                        <option  value=" Making">1 Year</option>
                        <option  value=" Making">2 Year</option>
                        <option  value=" Making">3 Year</option>
                        <option  value=" Making">4 Year</option>
                    </select>
        </div>
        <div class="cont">
            <label for="value">Collage Name</label>
            <input type="text" class="sel" placeholder=" Collage Name" name="collage_name" id="state" class="form-control">

            <label for="value">University Name</label>
            <input type="text" class="sel" placeholder=" University Name" name="Univercity_name" id="state" class="form-control">
        </div>
    </form>


    <?php
    $connection = mysqli_connect('localhost', 'root', '', 'login_page');
    if (isset($_POST['chack'])) {
        $Title = $_POST['Search'];
        $Degree = $_POST['degree'];
        $categories = $_POST['Categories'];
        $State = $_POST['state'];
        $making = $_POST['Making'];
        $Collage_name = $_POST['collage_name'];
        $univercity_Name = $_POST['Univercity_name'];
        $query = "SELECT * FROM problem_table WHERE 
        Project_Title = '$Title' OR
        Graduate_Degree = '$Degree' OR 
        Project_Category = '$categories' OR 
        College_State = '$State' OR 
        Year_making = '$making' OR 
        College_Name = '$Collage_name' OR 
        Univercity_Name = '$univercity_Name'";

        //   ID='$id',Graduate_Degree=' $Degree ',Project_Category ='$categories',College_State ='  $State',Year_making =' $making',College_Name=' $Collage_name',University_Name=' $university_Name'";
        $query_run = mysqli_query($connection, $query);

        // echo $row['Graduate_Degree'];

    ?>
        <table class="Tab">
            <tbody>
                <tr>
                    <th>Graduate_Degree</th>
                    <th>Univercity_Name</th>
                    <th>Branch</th>
                    <th>Project_Category</th>
                    <th>Year_making </th>
                    <th>Project_Title</th>
                    <th>Project_Type</th>
                    <th>Refrence_Project</th>
                </tr>
            </tbody>
            <?php
            if (mysqli_num_rows($query_run) >  0) {
                while ($row = mysqli_fetch_array($query_run)) {
            ?>
                    <tr>
                        <td><?php echo $row['Graduate_Degree']; ?></td>
                        <td><?php echo $row['Univercity_Name']; ?></td>
                        <td><?php echo $row['Branch']; ?></td>
                        <td><?php echo $row['Project_Category']; ?></td>
                        <td><?php echo $row['Year_making']; ?></td>
                        <td><?php echo $row['Project_Title']; ?></td>
                        <td><?php echo $row['Project_Type']; ?></td>
                        <td><?php echo $row['Refrence_Project']; ?></td>
                    </tr>
                <?php
                }
            } else {
                ?>
                <tr>
                    <td colspan="6">No Recode data not Found</td>
                </tr>
            <?php
            }
            ?>

            <!-- Add more rows as needed -->
        </table>
    <?php
    }
    ?>



    <!-- //////// -->



    <!-- footer -->

    <footer>
        <div class="container flex footer-container">

            <div class="link-column flex">
                <h4>Product</h4>
                <a href="#" class="hover-link">Overview</a>
                <a href="#" class="hover-link">Pricing</a>
                <a href="#" class="hover-link">Usability Hub</a>
                <a href="#" class="hover-link">Customers Page</a>
                <a href="#" class="hover-link">Status Page</a>
            </div>
            <div class="link-column flex">
                <h4>Methodology</h4>
                <a href="#" class="hover-link">Overview</a>
                <a href="#" class="hover-link">Pricing</a>
                <a href="#" class="hover-link">Usability Hub</a>
                <a href="#" class="hover-link">Customers Page</a>
                <a href="#" class="hover-link">Status Page</a>
            </div>
            <div class="link-column flex">
                <h4>Resources</h4>
                <a href="#" class="hover-link">Overview</a>
                <a href="#" class="hover-link">Pricing</a>
                <a href="#" class="hover-link">Usability Hub</a>
                <a href="#" class="hover-link">Customers Page</a>
                <a href="#" class="hover-link">Status Page</a>
            </div>
        </div>
    </footer>

    <!-- subfooter -->

    <div class="subfooter">
        <div class="container flex subfooter-container">
            <a class="hover-link1" href="#">Privacy policy</a>
            <a class="hover-link1" href="#">Terms & Condition</a>
            <a class="hover-link1" href="#">Security Information</a>
            <a class="hover-link1" href="#"><i class="fa-brands fa-facebook"></i></a>
            <a class="hover-link1" href="#"><i class="fa-brands fa-twitter"></i></a>
        </div>
    </div>


    <!-- <h1>welcome<?php echo $_SESSION['username'] ?> </h1> -->

</body>

</html>