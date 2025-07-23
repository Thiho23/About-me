<!DOCTYPE html>
<html>
<head>
  <title>Thi Ho</title>
  <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
   
  <script src="assets/js/scripts.js" defer></script>

  <style>
    table {
      background-color: #000; /* black background color */
      color: #fff; /* white text color */
      border-collapse: collapse;
      margin: 0 auto; /* center the table horizontally */
      margin-top: 20px;
      margin-bottom: 20px;
    }

    th, td {
      border: 1px solid #fff; /* white border */
      padding: 10px;
    }
    
  </style>

</head>
<body>

<header id="header">
    <div>
      <nav id="navmenu" class="navmenu">
        <!-- Logo section-->
        <div class="logo">
        <a href="index.html">
        <img src ="assets/img/logo.jfif" style="width: 70px; height: 70px; border-radius: 50%;"  ></img>
      </a>
    </div>
    <!-- / end Logo section-->

    <i class="mobile-nav-toggle" aria-label="Toggle navigation"></i>
      
    <!-- Menu (Navigation) section-->
      
        <ul>
          <li><a href="index.html" >Home</a></li>
          <li><a href="assets/htmls/subjects.html">Subjects</a></li>
          <li><a href="assets/htmls/hobbies.html" >Hobbies</a></li>
          <li><a href="assets/htmls/musics.html">Musics</a></li>
          <li><a href="assets/htmls/house.php" class="active">Houses</a></li>
          <li class="dropdown"><a href="#"><span>External Links</span><i class="toggle-dropdown"></a>
            <ul>
              <li><a href="http://moodle.kent.edu.au/kentmoodle/login/index.php">Kent Login</a></li>
              <li><a href="https://kent.rtomanager.com.au/Default.aspx">Kent SIS Login</a></li>
              <li>
                <a href="https://suprememastertv.com/en1/">
                  <div style="display: flex; flex-direction: column; align-items: center;">
                    <img src="assets/img/smtv-logo.jpg" style="width: 50%; height: 50%;" 
                    alt="https://www.google.com/url?sa=i&url=https%3A%2F%2Fsuprememastertv.com%2F&psig=AOvVaw3NtHxyt4Jt4iHHJJOOoV_d&ust=1725255553037000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCPDNt_SDoYgDFQAAAAAdAAAAABAE">
                    <span>Supreme Master TV</span>
                  </div>
                </a>
              </li>
              <li style="display: flex; justify-content: center; align-items: center;">
                 <a href="https://www.vegansociety.com/">
                  <div style="display: flex; flex-direction: column; align-items: center;">
                  <img src="assets/img/vegan-logo.png" style="width: 50%; height: 50%;" 
                  alt="https://www.google.com/imgres?q=vegan%20society%20logo%20png&imgurl=https%3A%2F%2Fe7.pngegg.com%2Fpngimages%2F627%2F569%2Fpng-clipart-the-vegan-society-veganism-organic-food-certification-cruelty-free-cruelty-free-leaf-text.png&imgrefurl=https%3A%2F%2Fwww.pngegg.com%2Fen%2Fsearch%3Fq%3Dvegan%2BSociety&docid=OMFzw10Y13vAYM&tbnid=7hKJONclqyQaKM&vet=12ahUKEwiMwsXohKGIAxV5oa8BHTAgGusQM3oECBgQAA..i&w=900&h=625&hcb=2&ved=2ahUKEwiMwsXohKGIAxV5oa8BHTAgGusQM3oECBgQAA">
                  <span>The Vegan Society</span>
                  </div>
                  </a>
                  </li>
                </a>
              </li>
        </ul>
      </nav>
      <!-- / end Menu (Navigation) section-->

    </div>
  </header>

<!-- Main section-->
<main class="main">
  <div class="page-title">
      <div class="heading">
        <div class="container">
              <h1>MY HOUSE </h1>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">House</li>
          </ol>
        </div>
      </nav>
    </div>

    <table>
    <tr><th></th><th style = "width: 60%" >About my house</th></tr>

    <!-- PHP script -->
    <?php
    // Create an associative array to store the house information
  $house = array(
    "Address" => "3/8 Glent St",
    "Suburb" => "Marricville",
    "Post Code" => 2204,
    "State" => "NSW",
    "Bedrooms" => 4,
    "Bathroom" => 2,
    "Car parking" => 1
  );
      // Use a foreach loop to iterate over the associative array
      foreach ($house as $property => $value) {
        echo "<tr>";
        echo "<td>$property</td>";
        echo "<td>$value</td>";
        echo "</tr>";
      }
    ?>
  </table>
  </div>
</main>
 

  <!-- Footer section -->
  <footer id="footer" >
    <div class="container">
      <div>
        <a href="tel:+412345678" title="+61 41234 5678" >
            <img src="assets/img/phone-icon.jpg" alt="https://www.google.com/url?sa=i&url=https%3A%2F%2Fpngtree.com%2Fso%2Fphone-icon&psig=AOvVaw2BteEDO_coYAx3NHggmdRn&ust=1725243832783000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCPi9-6LYoIgDFQAAAAAdAAAAABAf" 
            style="width: 40px; height: 40px; border-radius: 5px;" >
        </a>
        <a href="k111111@student.kent.edu.au" title="k111111@student.kent.edu.au">
            <img src="assets/img/mail-icon.jpg" alt="https://www.google.com/url?sa=i&url=https%3A%2F%2Flogowik.com%2Fenvelope-vector-icon-2090.html&psig=AOvVaw2SxUbXxasp3LEGnuXOnObp&ust=1725243776702000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCMjIoYnYoIgDFQAAAAAdAAAAABAE" 
            style="width: 40px; height: 40px; border-radius: 5px;" >
        </a>
        <a href="https://www.facebook.com/">
            <img src="assets/img/fb-icon.png" 
            alt="https://www.google.com/url?sa=i&url=https%3A%2F%2Fcommons.wikimedia.org%2Fwiki%2FFile%3AFacebook_icon_2013.svg&psig=AOvVaw2pndDOIu6tkX6DAT-9-Z7I&ust=1725243337738000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCPi_97fWoIgDFQAAAAAdAAAAABAE" 
            style="width: 40px; height: 40px; border-radius: 5px;" >
        </a>
        <a href="https://www.instagram.com/">
            <img src="assets/img/ig-icon.png" alt="https://cdn-icons-png.freepik.com/256/15707/15707869.png?semt=ais_hybrid" 
            style="width: 40px; height: 40px; border-radius: 5px;" ></a>
      </div> <br>
      <div class="container">
        <div class="copyright">
          <span>Copyright</span> <br>
          <span>All Rights Reserved</span> <br>
          <span>This page was created on <time>1/8/2024</time></span>
        </div>
      </div>
    </div>
  </footer>
  
