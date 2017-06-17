<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
<!--            <a class="navbar-brand" href="browse.php">Locale <span class="glyphicon glyphicon-globe"></span></a>-->
        </div> 
        <ul class="nav navbar-nav">

            <?php if (isset($_SESSION['user_id'])) { ?>
                <?php if ($_SESSION['role'] == "member") { ?>
            <li> <a href="Admin_DashBoard.php">Dashboard</a></li>
                    <li> <a href="email_4.php">Inbox</a></li>
                    <li> <a href="experience.php">My Host Experience</a></li>
                    <li> <a href="experience.php">My Companion Experience</a></li>
                    <li> <a href="experience.php">Profile</a></li>
                    <li> <a href="experience.php">Account</a></li>
                <?php } else { ?>
                    <li> <a href="Admin_DashBoard.php">Dashboard</a></li>
                    <li> <a href="viewMember.php">View Member Details</a></li>
                    <li> <a href="experience_details_andre.php">View Host Experience</a></li>
                <?php } ?>
                <
            <?php }
            ?>    
              
            
            <?php if (isset($_SESSION['user_id'])) { ?>
                <li> <a href="logout.php">Logout</a></li>
            <?php } else { ?>
                <li> <a href="create.php">Create Job</a></li> 
                <li><a href="allSubmittedJobs.php">Review</a></li>
                <li><a href="login.html">Contact</a></li>
            <?php } ?>

<!--            <p class="navbar-text navbar-right">
                <?php
                if (isset($_SESSION['user_id'])) {
                    echo "<i>Welcome " . $_SESSION['full_name'] . " (" . $_SESSION['role'] . ")</i><br/>";
                }
                ?>
            </p>       -->



            <!--            <li> <a href="dashboard.php">Dashboard</a></li>
                        <li> <a href="inbox.php">Inbox</a></li>
                        <li> <a href="experience.php">My Host Experience</a></li>
                        <li> <a href="experience.php">My Companion Experience</a></li>
                        <li> <a href="experience.php">Profile</a></li>
                        <li> <a href="experience.php">Account</a></li>-->

            <!--            <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="searchStory.php">Maintain Stories
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="storyList.php">Story List</a></li>
                            <li><a href="searchStory.php">Search Story</a></li>
            <?php // if (isset($_SESSION['user_id'])) {  ?>
            <?php // if ($_SESSION['role'] == "member") { ?>
                                <li> <a href="addStory.php">Add New Story</a></li>
            <?php // }}  ?>   
                        </ul>
                        </li>-->

            <!--            <li> <a href="aboutUs.php">About Us</a></li>
            <li> <a href="contactUs.php">Contact Us  <span class="glyphicon glyphicon-user"></span></a></li>-->


        </ul>



    </div>
</nav>

<!--
<ul class="list-inline">
    <li> <a href="index.php">Home</a></li>
    <li> <a href="searchStory.php">Search Story</a></li>
<?php if (isset($_SESSION['user_id'])) { ?>
    <?php if ($_SESSION['role'] == "member") { ?>
                            <li> <a href="addStory.php">Add New Story</a></li>
    <?php } else { ?>
                            <li> <a href="storySummary.php">Story Summary</a></li>
    <?php } ?>
                <li> <a href="changePassword.php">Change Password</a></li>
                <li> <a href="logout.php">Logout</a></li>
<?php }
?>
    <li> <a href="aboutUs.php">About Us</a></li>
    <li> <a href="contactUs.php">Contact Us</a></li>
    <li> 
<?php
if (isset($_SESSION['user_id'])) {
    echo "<i>Welcome " . $_SESSION['full_name'] . " (" . $_SESSION['role'] . ")</i><br/>";
}
?>
    </li>
</ul>

<ul class="list-inline">
    <li> <a href="dashboard.php">Dashboard</a></li>
<?php if (isset($_SESSION['user_id'])) { ?>
    <?php if ($_SESSION['role'] == "member") { ?>
                            <li> <a href="inbox.php">Inbox</a></li>
                            <li> <a href="experience.php">My Host Experience</a></li>
                            <li> <a href="experience.php">My Companion Experience</a></li>
                            <li> <a href="experience.php">Profile</a></li>
                            <li> <a href="experience.php">Account</a></li>
    <?php } else { ?>
                            <li> <a href="viewMember.php">View Member Details</a></li>
                            <li> <a href="viewHost.php">View Host Experience</a></li>
    <?php } ?>
                <li> <a href="logout.php">Logout</a></li>
<?php }
?>
    <li> 
//<?php
//if (isset($_SESSION['user_id'])) {
//    echo "<i>Welcome " . $_SESSION['full_name'] . " (" . $_SESSION['role'] . ")</i><br/>";
//}
//?>
    </li>
</ul>-->