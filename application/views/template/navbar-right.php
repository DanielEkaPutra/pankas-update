<div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                      <div class="pcoded-inner-navbar main-menu">
                          <div class="">
                              <div class="main-menu-header">
                                  <img class="img-80 img-radius" src="<?= base_url();?>assets/images/avatar-4.jpg" alt="User-Profile-Image">
                                  <div class="user-details">
                                      <span id="more-details"><?= $_SESSION['nama_depan'];?> <?= $_SESSION['nama_tengah'];?>
                                      <?= $_SESSION['nama_belakang'];?><i class="fa fa-caret-down"></i></span>
                                  </div>
                              </div>
        
                              <div class="main-menu-content">
                                  <ul>
                                      <li class="more-details">
                                          <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                                          <a href="#!"><i class="ti-settings"></i>Settings</a>
                                          <a href="<?= base_url('auth/logout')?>"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          <div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Dashboard</div>
                          <ul class="pcoded-item pcoded-left-item">
                              <li class="active">
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
                                      <li class=" ">
                                          <a href="<?= base_url('jemaat/index')?>" class="waves-effect waves-dark">
                                              <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                              <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">List Data Jemaat</span>
                                              <span class="pcoded-mcaret"></span>
                                          </a>
                                      </li>
                                      <li class=" ">
                                          <a href="<?= base_url('jemaat/tambahForm')?>" class="waves-effect waves-dark">
                                              <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                              <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Jemaat Baru</span>
                                              <span class="pcoded-mcaret"></span>
                                          </a>
                                      </li>

                                  </ul>
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