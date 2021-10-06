            <!-- Hover table card start -->
            <div class="card">
                                            <div class="card-header">
                                            <h5>Data Kepala Keluarga</h5>
                                                <br>
                                                <hr>
                                            
                                                
                                            <form action="<?= base_url('jemaat/carijemaat');?>" method="post">
                                                     <div class="input-group mb-3">
                                                        <input type="text" class="form-control" placeholder="Pencarian" name="keyword" autocomplete="off" autofocus>
                                                        <div class="input-group-append">
                                                            <input class="btn btn-primary m-2 btn-block" type="submit" name="submit"/>
                                                        </div>
                                                    </div>
                                            </form>
                                                
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
                                                                <th>Kendali</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php foreach ($jemaat as $j): ?>
                                                            <tr>
                                                                <td><?= $j->id_jemaat; ?></td>
                                                                <td><?= $j->nama_depan; ?> <?= $j->nama_belakang; ?></td>
                                                                <td><?= $j->nama; ?></td>
                                                                <td>
                                                                    
                                                                <a href="<?php echo base_url('jemaat/edit/'.$j -> id_jemaat)?>" ><button class="btn btn-success waves-effect waves-light m-1"> <i class="fa fa-edit btn-icon"></i> </button> </a>

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