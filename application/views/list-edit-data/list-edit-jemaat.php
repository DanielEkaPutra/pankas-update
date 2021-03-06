    
           <!-- Hover table card start -->
            <div class="card">
                <div class="card-header">
                    <h5>Data Anggota Keluarga</h5>
                    <br>
                    <hr>
                    <!-- Form -->
                    <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><b>No ID Jemaat</b></label>
                            <div class="col-sm-10">
                                <input class="form-control" disabled value="<?= $jemaat[0]->id_jemaat ?> - <?= $jemaat[0]->id_anggota ?> "></input>
                            </div>
                    </div>
                    <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><b>No KWJ</b></label>
                            <div class="col-sm-10">
                                <input class="form-control" disabled value="<?= $jemaat[0]->id_jemaat ?>"></input>
                            </div>
                    </div>
                    <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><b>Sektor</b></label>
                            <div class="col-sm-10">
                                <input class="form-control" disabled value="<?= $jemaat[0]->nama ?>"></input>
                            </div>
                    </div>
                    <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><b>Rayon</b></label>
                            <div class="col-sm-10">
                                <input class="form-control" disabled value="<?= $jemaat[0]->rayon ?>"></input>
                            </div>
                    </div>
                    <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><b>Kepala Keluarga</b></label>
                            <div class="col-sm-10">
                                <input class="form-control" disabled value="<?= $jemaat[0]->nama_depan ?> <?= $jemaat[0]->nama_belakang ?> "></input>
                            </div>
                    </div>
                    <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><b>Alamat</b></label>
                            <div class="col-sm-10">
                                <input class="form-control" disabled value="<?= $jemaat[0]->alamat ?>, RT <?= $jemaat[0]->rt ?>, RW <?= $jemaat[0]->rw ?>, Kel. <?= $jemaat[0]->kelurahan ?>, Kec. <?= $jemaat[0]->kecamatan ?>, Kota <?= $jemaat[0]->kota ?>, Provinsi <?= $jemaat[0]->provinsi ?>"></input>
                            </div>
                    </div>
                    <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><b>No Telp</b></label>
                            <div class="col-sm-10">
                                <input class="form-control" disabled value="<?= $jemaat[0]->telepon ?>"></input>
                            </div>
                    </div>
                    <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><b>Status Pelayanan</b></label>
                            <div class="col-sm-10">
                                <?php
                                    if($jemaat[0]->pelayanan == '1')
                                    {
                                        echo "<input class='form-control' disabled value='ANGGOTA JEMAAT'></input>";
                                    }
                                    else if($jemaat[0]->pelayanan == '2')
                                    {
                                        echo "<input class='form-control' disabled value='MAJELIS JEMAAT'></input>";
                                    }
                                    else if($jemaat[0]->pelayanan == '3')
                                    {
                                        echo "<input class='form-control' disabled value='KOORDINATOR SEKTOR'></input>";
                                    }
                                    else
                                    {
                                        echo "<input class='form-control' disabled value='DATA TIDAK DIKETAHUI'></input>";
                                    }
                                ?>
                            </div>
                    </div>

                    <hr>
                    <div class="d-flex justify-content-end">
                        <a href="<?= base_url('jemaat/downloadPdf/'.$jemaat[0]->id_jemaat)?>" style="text-decoration:none;" class="btn btn-danger btn text-right">Download PDF</a>
                        <?php
                            if($_SESSION['role'] == "1" || $_SESSION['role'] == '2')
                            {
                        ?>
                        <a href="<?= base_url('jemaat/anggotaForm/'.$tambahAnggota->id)?>" style="text-decoration:none;" class="btn btn-primary btn text-right ml-3">Tambah Anggota</a>
                        <?php } ?>
                    </div>
                        
            
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="fa fa fa-wrench open-card-option"></i></li>
                            <li><i class="fa fa-window-maximize full-card"></i></li>
                            <li><i class="fa fa-minus minimize-card"></i></li>
                            <li><i class="fa fa-refresh reload-card"></i></li>
                            <li><i class="fa fa-trash close-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-block table-border-style">
                    <div class="table-responsive">
                        <table class="table table-hover table-xs">
                            <thead>
                                <tr>
                                    <th>ID Jemaat</th>
                                    <th>Nama Kepala Keluarga</th>
                                    <th>Sektor</th>
                                    <th>Status</th>
                                    <th>Kendali</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($jemaat as $j): ?>
                                <tr>
                                    <td><?= $j->id_jemaat; ?> - <?= $j->id_anggota; ?></td>
                                    <td><?= $j->nama_depan; ?> <?= $j->nama_belakang; ?></td>
                                    <td><?= $j->nama; ?></td>
                                    <td>
                                        <?php
                                        
                                            if($j->status == "1")
                                            {
                                                echo "Kepala Rumah Tangga";
                                            }
                                            else if($j->status == "2")
                                            {
                                                echo "Istri";
                                            }
                                            else if($j->status == "3")
                                            {
                                                echo "Anak";
                                            }
                                            else if($j->status == "4")
                                            {
                                                echo "Kakek";
                                            }
                                            else if($j->status == "5")
                                            {
                                                echo "Nenek";
                                            }

                                        ?>
                                    </td>
                                    <td>
                                        
                                        <?php
                                        
                                            if($_SESSION['role'] == '1')
                                            {
                                        ?>
                                            <a href="<?php echo base_url('jemaat/jemaat_detail/'.$j -> id)?>" ><button class="btn btn-primary waves-effect waves-light m-1"> <i class="fa fa-eye"></i></button> </a>
                                            <a href="<?php echo base_url('jemaat/edit_form/'.$j -> id)?>" ><button class="btn btn-success waves-effect waves-light m-1"> <i class="fa fa-edit"></i></button> </a>
                                            <a href="<?= base_url('jemaat/hapus_anggota/'.$j -> id);?>"><button class="btn btn-danger waves-effect waves-light m-1 tombol-hapus"> <i class="fa fa-trash"></i></button></a>
                                        <?php 
                                            }else if($_SESSION['role'] == '2')
                                            {
                                            
                                        ?>
                                            <a href="<?php echo base_url('jemaat/jemaat_detail/'.$j -> id)?>" ><button class="btn btn-primary waves-effect waves-light m-1"> <i class="fa fa-eye"></i></button> </a>
                                            <a href="<?php echo base_url('jemaat/edit_form/'.$j -> id)?>" ><button class="btn btn-success waves-effect waves-light m-1"> <i class="fa fa-edit"></i></button> </a>
                                        <?php
                                        
                                            }else if($_SESSION['role'] == '3')
                                            {

                                        ?>  
                                            <a href="<?php echo base_url('jemaat/jemaat_detail/'.$j -> id)?>" ><button class="btn btn-primary waves-effect waves-light m-1"> <i class="fa fa-eye"></i></button> </a>
                                        <?php
                                        
                                            }

                                        ?>
                                    </td>
                                
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class="d-flex align-items-center justify-content-center">
                        <?= $this->pagination->create_links(); ?>
                    </div>
                    </div>
                </div>
            </div>
            <!-- Hover table card end -->