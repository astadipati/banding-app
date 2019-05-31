
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Data Banding</h4>
                  <p class="card-category"> Validasi</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
                        <th>No</th>
                        <th>No Banding</th>
                        <!-- <th>Tgl Putus TK1</th> -->
                        <th>Tgl Daftar Banding</th>
                        <th>Pemohon Banding</th>
                        <th colspan="2" >Aksi</th>
                      </thead>
                      <tbody>
                        <?php
                        $this->load->library('encrypt');
    // $this->encryption->initialize(
    //   array(
    //     'cipher' => 'aes-256',
    //     'mode' => 'ctr',
    //     'key' => $this->config->config['encryption_key']
    //   )
    // );
                        $i = $this->uri->segment('3') + 1;
                        foreach ($data->result() as $row) {
                        ?>
                        <tr>
                          <td><?php echo $i++?></td>
                          <td><?= $row->nomor_perkara_pn?></td>
                          <!-- <td><?= $row->putusan_pn?></td> -->
                          <td><?= $row->permohonan_banding?></td>
                          <td class="text-primary"><?= $row->pemohon_banding?></td>
                          <td><a href="<?php echo base_URL()?>hal/dbedit/<?php 
                          $datae = $row->perkara_id;
                          echo $this->encrypt->encode($datae);?>" 
                          rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Detil">
                                <i class="material-icons">edit</i></a></td>
                          <!-- <td><button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit">
                                <i class="material-icons">edit</i></button></td> -->
                          <!-- <td><button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Hapus">
                                <i class="material-icons">close</i>
                              </button></td> -->
                        </tr>
                        <?php
                            }
                        ?>
                      </tbody>
                    </table>
                    <?php
      echo $paging;
   ?>
                  </div>
                </div>
              </div>
            </div>
          
          </div>
        </div>
      </div>

      <!-- end main konten -->