<!-- script for daisy and tailwind -->





<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>


<header class="header">


   <div class="header-1">
   <div class="flex ">
        
        <p class="pp">  <a  href="login.php">Login</a>    <a href="register.php">SignUp</a> </p>
     </div>
      
   </div>
   <div class="animated-line"></div>
   

   <div class="header-2">
      <div class="flex ">




      
         <a href="home.php" class="logo sm:text-6xl " style="text-align: center;">COMPUTER <br>ACCESSORIES STORE </a>

         <nav class="navbar justify-center">
            <a  href="home.php">home</a>
            <a href="shop.php">shop</a>
            <!-- <a href="contact.php">contact</a> -->
            <a href="orders.php">orders</a>
            
         </nav>

         <div class="icons flex-none">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search_page.php" class="fas fa-search"></a>
           
            <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number);
            ?>
            <a href="cart.php"> <i class="fas fa-shopping-cart"></i> <span>(<?php echo $cart_rows_number; ?>)</span> </a>
            <button><a href="logout.php"class="fa-solid fa-right-from-bracket" style="color: #050505;"></a></button>

            

            
         </div>

         <div class="user-box">
            <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>Email: <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">logout</a>



            
         </div>
      </div>
      
   </div>

</header>
