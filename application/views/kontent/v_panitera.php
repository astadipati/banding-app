<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
            <button class="btn btn-success"><i class="material-icons">person</i> Tambah Data</button>
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Data Panitera Pengganti</h4>
                  <p class="card-category">Tingkat Banding</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="text-info">
                        <th>No</th>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Kode</th>
                        <th>Status</th>
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
                          <td><?= $row->nip?></td>
                          <td class="text-primary"><?= $row->nama_gelar?></td>
                          <td><?= $row->kode;?></td>
                          <td ><?php
                                if ($row->aktif=="Y") {echo "Aktif";
                                }else{echo "Tidak";}
                          ?></td>
                          <td><a href="<?php echo base_URL()?>hal/ppedit/<?php 
                          $datae = $row->id;
                          echo $datae;?>"  
                          rel="tooltip" title="" class="btn btn-primary btn-link" data-original-title="Lihat Detil">
                                <i class="material-icons ">edit</i></a></td>
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