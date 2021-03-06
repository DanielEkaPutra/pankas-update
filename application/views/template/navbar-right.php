<div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                      <div class="pcoded-inner-navbar main-menu">
                          <div class="">
                              <div class="main-menu-header">
                                  <img class="img-80 img-radius" src="<?= base_url();?>assets/images/avatar-4.jpg" alt="User-Profile-Image">
                                  <div class="user-details">
                                      <span id="more-details"><?= $_SESSION['nama_depan'];?> <?= $_SESSION['nama_tengah'];?>
                                      <?= $_SESSION['nama_belakang'];?></span>
                                  </div>
                              </div>
        
                              <div class="main-menu-content">
                                  
                              </div>
                          </div>
                          <div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Dashboard</div>
                          <ul class="pcoded-item pcoded-left-item">
                              <li class="">
                                  <a href="<?= base_url('home')?>" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                              <li class="pcoded-hasmenu">
                                  <a href="javascript:void(0)" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                      <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Data Jemaat</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                                  
                                  <ul class="pcoded-submenu">
                                    <?php
                                    
                                        if($_SESSION['role'] == "1" || $_SESSION['role'] == '2')
                                        {
                                        
                                    ?>
                                     <li class=" ">
                                          <a href="<?= base_url('jemaat/tambahForm')?>" class="waves-effect waves-dark">
                                              <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                              <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Input Jemaat</span>
                                              <span class="pcoded-mcaret"></span>
                                          </a>
                                      </li>
                                    <?php } ?>
                                      <li class=" ">
                                          <a href="<?= base_url('jemaat/index')?>" class="waves-effect waves-dark">
                                              <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                              <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Data Keluarga</span>
                                              <span class="pcoded-mcaret"></span>
                                          </a>
                                      </li>
                                      <li class=" ">
                                          <a href="<?= base_url('jemaat/carijemaat')?>" class="waves-effect waves-dark">
                                              <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                              <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Cari Data Jemaat</span>
                                              <span class="pcoded-mcaret"></span>
                                          </a>
                                      </li>
                                  </ul>
                                  
                              </li>
                          </ul>
                          <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Setting</div>
                                  <ul class="pcoded-item pcoded-left-item">
                                  <li class="">
                                    <a href="<?= base_url('home')?>" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-user"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Profile</span>
                                    </a>
                                 </li>
                                  <li class="">
                                    <a href="<?= base_url('auth/logout')?>" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Logout</span>
                                    </a>
                                 </li>
                                </ul>
                          <?php
                          
                          if($_SESSION['role'] == '1')
                          {
                              
                          
                          ?>
                          <div class="pcoded-navigation-label" data-i18n="nav.category.navigation">User</div>
                          <ul class="pcoded-item pcoded-left-item"> 
                                <li class="">
                                  <a href="<?= base_url('user')?>" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-user"></i><b>D</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.dash.main">Data User</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                                </li>
                          </ul>

                          <?php } ?>
                      </div>