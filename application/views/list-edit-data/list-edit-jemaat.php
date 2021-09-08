            <!-- Hover table card start -->
            <div class="card">
                                            <div class="card-header">
                                                <br>
                                                <hr>
                                                <div class="col-md-4">
                                                    <form action="<?= base_url('jemaat');?>" method="post">
                                                    <div class="input-group mb-3">
                                                    <!-- <select id="inputState" class="form-control m-1">
                                                    <option selected>Yerusalem</option>
                                                        <option>...</option>
                                                    </select> -->
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" placeholder="Pencarian" name="keyword" autocomplete="off" autofocus>
                                                        <div class="input-group-append">
                                                            <input class="btn btn-primary" type="submit" name="submit"/>
                                                        </div>
                                                    </div>
                                                    </form>
                                                </div>
                                                <hr>
                                              
                                                <a href="<?= base_url('jemaat/anggotaForm/'.$tambahAnggota->id)?>" style="text-decoration:none;" class="btn btn-primary btn">Tambah Anggota</a>
                                    
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
                                                    <table class="table table-hover">
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
                                                                    
                                                                <a href="<?php echo base_url('jemaat/edit_form/'.$j -> id)?>" ><button class="btn btn-success waves-effect waves-light mb-5 mr-5"> <i class="fa fa-edit"></i> Edit </button> </a>

                                                                    <a href=""><button class="btn btn-danger waves-effect waves-light mb-5 mr-5"> <i class="fa fa-trash"></i> Hapus </button></a>
                                                                </td>
                                                            
                                                            </tr>
                                                            <?php endforeach ?>
                                                        </tbody>
                                                    </table>
                                                    <div class="d-flex align-items-center justify-content-center">
                                                    <?= $this->pagination->create_links(); ?>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Hover table card end -->