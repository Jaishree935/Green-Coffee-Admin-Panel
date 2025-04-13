<header class="header">
     <div class="flex">
            <a href="dashboard.php" class="logo"><img src="../img/logo.jpg"></a>
            <nav class="navbar">
              <a href="dashboard.php">dashboard</a>
              <a href="add_products.php">add product</a>
              <a href="view_product.php">view product</a>
              <a href="user_account.php">accounts</a>
            </nav>
            <div class="icons">
                <i class="bx bxs-user" id="user-btn"></i>
                <i class="bx bx-list-plus" id="menu-btn"></i>
            </div>
            <div class="profile-detail">
                <?php 
                  $select_profile=$conn->prepare("SELECT * FROM `admin` WHERE id=?");
                  $select_profile->execute([$admin_id]);
                  if($select_profile->rowCount()>0) {
                    $fetch_profile=$select_profile->fetch(PDO::FETCH_ASSOC);
                  
                ?>
                 <div class="profile">
                     <img src="../image/<?= $fetch_profile['profile']; ?>" class="logo-img">
                      <p><?=$fetch_profile['name']; ?></p>
                 </div>
                <div class="flex-btn">
                  <a href="profile.php" class="btn">profile</a>
                  <a href="../components/admin_logout.php" onclick="return confirm('logout from this website');" class="btn">logout</a>
                </div>
                <?php 
                  }
                ?>
                </div>
              
            </div>
    
</header>