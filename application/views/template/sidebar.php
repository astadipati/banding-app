
      <!-- sidebar -->

      <div class="sidebar-wrapper">
        <ul class="nav">

        <!-- menu kontrol 1-->
        <?php if($this->session->userdata('akses')=='1'):?>
          <li class="nav-item  ">
            <a class="nav-link" href="<?php echo base_url()?>dashboard">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url()?>hal/user_profile">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url()?>hal/perkara_banding">
              <i class="material-icons">content_paste</i>
              <p>Perkara Banding</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url()?>hal/data_banding">
              <i class="material-icons">content_paste</i>
              <p>Data Banding</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url()?>hal/hakim">
              <i class="material-icons">library_books</i>
              <p>Hakim</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url()?>hal/panitera">
              <i class="material-icons">bubble_chart</i>
              <p>Panitera</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url()?>hal/laporan">
              <i class="material-icons">location_ons</i>
              <p>Laporan</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url()?>hal/data_pa">
              <i class="material-icons">notifications</i>
              <p>Data PA</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url()?>hal/notifikasi">
              <i class="material-icons">notifications</i>
              <p>Notifikasi</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url()?>hal/support">
              <i class="material-icons">language</i>
              <p>Support</p>
            </a>
          </li>
          <!-- end menu kontrol 1-->

          <!-- meno kontrol 2 -->
          <?php elseif($this->session->userdata('akses')=='2'):?>
          <li class="nav-item active  ">
            <a class="nav-link" href="<?php echo base_url()?>dashboard">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url()?>hal/user_profile">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url()?>hal/data_banding">
              <i class="material-icons">content_paste</i>
              <p>Data Banding</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url()?>hal/notifikasi">
              <i class="material-icons">notifications</i>
              <p>Notifikasi</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url()?>hal/support">
              <i class="material-icons">language</i>
              <p>Support</p>
            </a>
          </li>
          <!-- end menu kontrol 2 -->
          <?php else:?>
          <li class="nav-item active  ">
            <a class="nav-link" href="<?php echo base_url()?>dashboard">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
        <?php endif;?>
        </ul>
      </div>
    </div>
    <!-- end sidebar -->