    <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash')?>">

    </div>
        <!-- Hover table card start -->
            <div class="card">
                                            <div class="card-header">
                                            <h5>Data Kepala Keluarga</h5>
                                                <br>
                                                <hr>
                                            
                                                
                                                <form action="<?= base_url('jemaat');?>" method="post">

                                                    <div class="row p-3">
                                                        <h4 class="sub-title">Cari Berdasarkan Sektor & Rayon</h4>
                                                        <div class="col-sm-12">
                                                            <div class="form-group row">
                                                                 <div class="col-sm-4">
                                                                    <select name="sektor" class="form-control">
                                                                        <option value="">Pilih Sektor</option>
                                                                        <option value="1">Yerusalem</option>
                                                                        <option value="2">Bethel</option>
                                                                        <option value="3">Sion</option>
                                                                        <option value="4">Hermon</option>
                                                                        <option value="5">Yerikho</option>
                                                                        <option value="6">Karmel</option>
                                                                        <option value="7">Pniel</option>
                                                                        <option value="8">Nazaret</option>
                                                                        <option value="9">Moria</option>
                                                                        <option value="10">Getsemani</option>
                                                                        <option value="11">Betesda</option>
                                                                        <option value="12">Betlehem</option>
                                                                        <option value="13">Ebenhaezer</option>
                                                                     
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <select name="rayon" class="form-control">
                                                                <option value="">Pilih Rayon</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                                <option value="13">13</option>
                                                                <option value="14">14</option>
                                                                <option value="15">15</option>
                                                            </select>
                                                            </div>
                                                          <input class="col-sm-2 btn btn-primary" value="Submit" type="submit" name="submit"/>
                                                        </div>
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