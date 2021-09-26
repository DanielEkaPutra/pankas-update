            <!-- Hover table card start -->
            <div class="card">
                                            <div class="card-header">
                                            <h5>Data Kepala Keluarga</h5>
                                                <br>
                                                <hr>
                                            
                                                
                                                <form>

                                                    <div class="row p-3">
                                                        <h4 class="sub-title">Cari Berdasarkan Sektor & Rayon</h4>
                                                        <div class="col-sm-12">
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Sektor | Rayon</label>
                                                                <div class="col-sm-4">
                                                                    <select name="sektor" class="form-control">
                                                                        <option value="">Pilih Sektor</option>
                                                                     
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <select name="rayon" class="form-control">
                                                                <option value="">Pilih Rayon</option>
                                                            </select>
                                                            </div>
                                                            <button class="col-sm-2 btn btn-primary" type="submit">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <hr>
                                            <div class="col-md-12 d-flex justify-content-end">
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
                                                            <input class="btn btn-primary m-2 btn-block" type="submit" name="submit"/>
                                                        </div>
                                                    </div>
                                                    </form>
                                                </div>

                                                <hr>
                                                
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