 <?php 
include("../connection.php");

$count = $connection->query("SELECT COUNT(*) as total FROM `contact`")->fetch_array();


  ?>


 <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="">
            <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
           <li class="">
            <a class="" href="client_message.php">
                          <i class="fa fa-envelope-o"></i>
                          <span>Client Messages</span>
                          <span class="badge bg-important"><?php echo $count['total']?></span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Update Menu</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
               <li><a class="" href="home_edit.php?id=<?php echo $row['ID']?>">Home Page</a></li>
              <li><a class="" href="about_edit.php?id=<?php echo $row['ID']?>">About Us</a></li>
              <li><a class="" href="wholesale.php?id=<?php echo $row['ID']?>">Wholesale & Dist.</a></li>
              <li><a class="" href="business_edit.php?id=<?php echo $row['ID']?>">Business Consultancy</a></li>
              <li><a class="" href="construction_edit.php?id=<?php echo $row['ID']?>">Construction</a></li>
              <li><a class="" href="entertainment_edit.php?id=<?php echo $row['ID']?>">Entertainment</a></li>
              <li><a class="" href="hospitality_edit.php?id=<?php echo $row['ID']?>">Hospitality</a></li>
              <li><a class="" href="contact_edit.php?id=<?php echo $row['ID']?>">Contacts</a></li>
            </ul>
          </li>
          <li class="">
            <a class="" href="update_picture.php">
                          <i class="fa fa-image"></i>
                          <span>Update Pictures</span>
                      </a>
          </li>
          <li class="">
            <a class="" href="songs.php">
                          <i class="fa fa-music"></i>
                          <span>Songs</span>
                      </a>
          </li>
        <!--  <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>UI Fitures</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="general.html">Elements</a></li>
              <li><a class="" href="buttons.html">Buttons</a></li>
              <li><a class="" href="grids.html">Grids</a></li>
            </ul>
          </li>
          <li>
            <a class="" href="widgets.html">
                          <i class="icon_genius"></i>
                          <span>Widgets</span>
                      </a>
          </li>
          <li>
            <a class="" href="chart-chartjs.html">
                          <i class="icon_piechart"></i>
                          <span>Charts</span>

                      </a>

          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Tables</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="basic_table.html">Basic Table</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Pages</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="profile.html">Profile</a></li>
              <li><a class="" href="login.html"><span>Login Page</span></a></li>
              <li><a class="" href="contact.html"><span>Contact Page</span></a></li>
              <li><a class="" href="blank.html">Blank Page</a></li>
              <li><a class="" href="404.html">404 Error</a></li>
            </ul>
          </li>-->

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>