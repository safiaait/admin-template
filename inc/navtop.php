<?php
  include("inc/fonction.php");
  include("inc/db.php");
  if(isset($_SESSION['id_user'])){
    $id=$_SESSION['id_user'];
    $get_user="select * from tb_admin where id='$id'";
    $result = mysqli_query($con, $get_user);
    $row = mysqli_fetch_assoc($result);
    $image=$row['image'];
}
?>
<div class="navtop">
    <div class="logo">
        <h1>SPACE<span style="color:#007bff">ADMIN</span></h1>
         <label for="">test</label>
    </div>
    <div class="laft-top">
            <div class="theme-btn">
                <span class="material-icons-sharp active">wb_sunny</span>
                <span class="material-icons-sharp">dark_mode</span>
    </div>
    </div>     
    <div class="profile">
         <img src="./images/<?php echo $image;?>" alt="">
         <div class="dropdown-content">
				<a href="index.php?admin_compte"><i class="fa-solid fa-circle-user"></i>&nbsp;&nbsp;&nbsp;&nbsp;Profile</a>
				<a href="index.php?main"><i class="fa-solid fa-square-poll-horizontal"></i>&nbsp;&nbsp;&nbsp;&nbsp;Dachbord</a>
				<a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i>&nbsp;&nbsp;&nbsp;&nbsp;Logout</a>
		 </div>
    </div>       
</div>
