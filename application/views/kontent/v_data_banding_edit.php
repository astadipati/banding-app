
        <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                <?php
                    echo form_open_multipart('dbedit/edit', 'role="form" class="form-horizontal"');
                    echo form_hidden('perkara_id', $data['perkara_id']);
                    ?>
                  <h4 class="card-title">Edit Data</h4>
                  <p class="card-category">Data</p>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                      <div class="col-md-12">
                          <label class="bmd-label-floating"><b>Data Tingkat Pertama</b></label>
                          <hr>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating"><b>Pemohon Banding</b></label>
                          <input type="text" value="<?php echo $data['pemohon_banding']?>" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating"><b>Alamat Pemohon Banding</b></label>
                          <input type="text" value="<?php echo $data['nomor_perkara_pn']?>" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating"><b>Kuasa Pemohon Banding</b></label>
                          <input type="text" value="<?php echo $data['nomor_perkara_pn']?>" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating"><b>Alamat Kuasa Pemohon Banding</b></label>
                          <input type="text" value="<?php echo $data['nomor_perkara_pn']?>" class="form-control">
                        </div>
                      </div>
                      
                      <div class="col-md-7">
                        <div class="form-group">
                        <!-- <label for=""></label> -->
                          <label class="bmd-label-floating">Nomor Perkara</label>
                          <!-- <label class="bmd-label-floating">Company (disabled)</label> -->
                          <input type="text" value="<?php echo $data['nomor_perkara_pn']?>" class="form-control">
                          <!-- <input type="text" class="form-control" disabled> -->
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Tanggal Putus</label>
                          <input type="date" value="<?php echo $data['putusan_pn']?>" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Majelis Hakim</label>
                          <input type="text" value="<?php echo $data['hakim1_banding']?>" id="hakim" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Hakim Anggota 1</label>
                          <input type="text" value="<?php echo $data['hakim2_banding']?>" id="hakim2" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Hakim Anggota 2</label>
                          <input type="text" value="<?php echo $data['hakim3_banding']?>" id="hakim3" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Panitera</label>
                          <input type="text" value="<?php echo $data['panitera_pengganti_banding']?>" id="pp" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating"><b>Data Tingkat Banding</label>
                          <hr></b>
                          <!-- <input type="text" class="form-control"> -->
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Tanggal Akta Banding</label>
                          <input type="date" value="<?php echo $data['putusan_pn']?>" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Jenis Perkara</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="">Tanggal Surat Pengantar</label>
                          <input type="date" value="<?php if ($data== [''])
                           {echo "--/--/----";
                           }else{
                             echo $data['pemberitahuan_putusan_pn'];}?>" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12"> 
                        <div class="form-group">
                          <label>About Me</label>
                          <div class="form-group">
                            <label class="bmd-label-floating"> Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</label>
                            <textarea class="form-control" rows="5"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <!-- <a href="#pablo"> -->
                    <!-- <img class="img" src="../assets/img/faces/marc.jpg" /> -->
                    <!-- <img class="img" src="<?php echo  base_url('assets/img/mark.jpg')?> "/> -->
                  <!-- </a> -->
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray"></h6><br>
                  <h4 class="card-title">Pemohon Banding</h4>
                  <p class="card-description">
                    <b><?php echo $data['pemohon_banding'];?></b>
                  </p>
                  <!-- <a href="#pablo" class="btn btn-primary btn-round">Follow</a> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- end main konten -->