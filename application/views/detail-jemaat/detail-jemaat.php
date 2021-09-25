<!-- Page body start -->
    <div class="page-body">
        <div class="row">
            <div class="col-sm-12">
                <!-- Basic Form Inputs card start -->
                <div class="card">
                    <div class="card-header">
                        <h5>Edit Data Jemaat</h5>
                    </div>
                    <div class="card-block">
                    <form action="<?= base_url('jemaat/update_data')?>" method="POST">
                        <div class="row">
                        <input type="hidden" name="id" value="<?php echo $jemaat->id; ?>">
                        <input type="hidden" name="id_tanggal" value="<?php echo $jemaat->id_tanggal; ?>">
                                            <div class="col-sm-12">
                                                <h4 class="sub-title">Sektor & Rayon</h4>
                                                <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Sektor</label>
                                                        <div class="col-sm-10">
                                                            <select name="sektor" class="form-control" readonly>
                                                                <option <?php if($jemaat->sektor == "1") {echo "selected='selected'";} echo $jemaat->sektor;?> value="1">Yerusalem</option>
                                                                <option <?php if($jemaat->sektor == "2") {echo "selected='selected'";} echo $jemaat->sektor;?> value="2">Bethel</option>
                                                                <option <?php if($jemaat->sektor == "3") {echo "selected='selected'";} echo $jemaat->sektor;?> value="3">Sion</option>
                                                                <option <?php if($jemaat->sektor == "4") {echo "selected='selected'";} echo $jemaat->sektor;?> value="4">Hermon</option>
                                                                <option <?php if($jemaat->sektor == "5") {echo "selected='selected'";} echo $jemaat->sektor;?> value="5">Yerikho</option>
                                                                <option <?php if($jemaat->sektor == "6") {echo "selected='selected'";} echo $jemaat->sektor;?> value="6">Karmel</option>
                                                                <option <?php if($jemaat->sektor == "7") {echo "selected='selected'";} echo $jemaat->sektor;?> value="7">Pniel</option>
                                                                <option <?php if($jemaat->sektor == "8") {echo "selected='selected'";} echo $jemaat->sektor;?> value="8">Nazaret</option>
                                                                <option <?php if($jemaat->sektor == "9") {echo "selected='selected'";} echo $jemaat->sektor;?> value="9">Moria</option>
                                                                <option <?php if($jemaat->sektor == "10") {echo "selected='selected'";} echo $jemaat->sektor;?> value="10">Getsemani</option>
                                                                <option <?php if($jemaat->sektor == "11") {echo "selected='selected'";} echo $jemaat->sektor;?> value="11">Betesda</option>
                                                                <option <?php if($jemaat->sektor == "12") {echo "selected='selected'";} echo $jemaat->sektor;?> value="12">Betlehem</option>
                                                                <option <?php if($jemaat->sektor == "13") {echo "selected='selected'";} echo $jemaat->sektor;?> value="13">Ebenhaezer </option>
                                                            </select>
                                                        </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">No Rayon</label>
                                                    <div class="col-sm-10">
                                                        <select name="rayon" readonly class="form-control" value="<?php echo $jemaat->rayon;?>">
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
                                                </div>
                                            </div>
                                        </div>
                        <h4 class="sub-title">Jemaat</h4>
                        <form action="<?= base_url('jemaat/update_data')?>" method="POST">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" >ID KWJ</label>
                                <div class="col-sm-10">
                                    <input type="text"  readonly class="form-control" readonly value="<?= $jemaat->id_jemaat ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">ID Jemaat</label>
                                <div class="col-sm-10">
                                    <input type="text"  readonly class="form-control"
                                    value="<?= $jemaat->id_anggota ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Depan</label>
                                <div class="col-sm-10">
                                    <input type="text"  readonly class="form-control" value="<?= $jemaat->nama_depan ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Belakang</label>
                                <div class="col-sm-10">
                                    <input type="text"  readonly class="form-control" value="<?= $jemaat->nama_belakang ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                        <select readonly name="select" class="form-control">
                                            <option <?php if($jemaat->jenis_kelamin == "1") {echo "selected='selected'";} echo $jemaat->jenis_kelamin;?> value="1">Laki-Laki</option>
                                            <option <?php if($jemaat->jenis_kelamin == "2") {echo "selected='selected'";} echo $jemaat->jenis_kelamin;?> value="2">Perempuan</option>
                                        </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Pendidikan</label>
                                    <div class="col-sm-10">
                                        <input type="text"  readonly class="form-control" value="<?= $jemaat->pendidikan ?>">
                                    </div>
                                </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-10">
                                        <input type="text"  readonly class="form-control" value="<?= $jemaat->pekerjaan ?>">
                                    </div>
                                </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Telepon</label>
                                    <div class="col-sm-10">
                                        <input type="text"  readonly class="form-control" value="<?= $jemaat->telepon ?>">
                                    </div>
                                </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Status Keluarga</label>
                                    <div class="col-sm-10">
                                    <select readonly name="select" class="form-control">
                                            <option <?php if($jemaat->status == "1") {echo "selected='selected'";} echo $jemaat->status;?> value="1">Kepala Keluarga</option>
                                            <option <?php if($jemaat->status == "2") {echo "selected='selected'";} echo $jemaat->status;?> value="2">Istri</option>
                                            <option <?php if($jemaat->status == "3") {echo "selected='selected'";} echo $jemaat->status;?> value="3">Anak</option>
                                            <option <?php if($jemaat->status == "4") {echo "selected='selected'";} echo $jemaat->status;?> value="4">Kakek</option>
                                            <option <?php if($jemaat->status == "5") {echo "selected='selected'";} echo $jemaat->status;?> value="5">Nenek</option>
                                            <option <?php if($jemaat->status == "6") {echo "selected='selected'";} echo $jemaat->status;?> value="6">Sodara</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="col-sm-12">
                                            <h4 class="sub-title">Tanggalan & Tempat</h4>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                                <div class="col-sm-10">
                                                <input type="date" readonly class="form-control" value="<?= $jemaat->tanggal_lahir ?>">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                                                <div class="col-sm-10">
                                                <input type="text"  readonly class="form-control" value="<?= $jemaat->tempat_lahir ?>">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tanggal Baptis</label>
                                                <div class="col-sm-10">
                                                <input type="date" readonly class="form-control" value="<?= $jemaat->tanggal_baptis ?>">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tempat Baptis</label>
                                                <div class="col-sm-10">
                                                <input type="text"  readonly class="form-control" value="<?= $jemaat->tempat_baptis ?>">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tanggal Sidi</label>
                                                <div class="col-sm-10">
                                                <input type="date" readonly class="form-control" value="<?= $jemaat->tanggal_sidi ?>">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tempat Sidi</label>
                                                <div class="col-sm-10">
                                                <input type="text"  readonly class="form-control" value="<?= $jemaat->tempat_sidi ?>">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tanggal Menikah</label>
                                                <div class="col-sm-10">
                                                <input type="date" readonly class="form-control" value="<?= $jemaat->tanggal_nikah ?>">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tempat Menikah</label>
                                                <div class="col-sm-10">
                                                <input type="text"  readonly class="form-control" value="<?= $jemaat->tempat_nikah ?>">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tanggal Pindah</label>
                                                <div class="col-sm-10">
                                                <input type="date" readonly class="form-control" value="<?= $jemaat->tanggal_pindah ?>">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tempat Pindah</label>
                                                <div class="col-sm-10">
                                                <input type="text"  readonly class="form-control" value="<?= $jemaat->tempat_pindah ?>">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tanggal Meninggal</label>
                                                <div class="col-sm-10">
                                                <input type="date" readonly class="form-control" value="<?= $jemaat->tanggal_meninggal ?>">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tempat Meninggal</label>
                                                <div class="col-sm-10">
                                                <input type="text"  readonly class="form-control" value="<?= $jemaat->tempat_meninggal ?>">
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4 class="sub-title">Alamat Lengkap</h4>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Alamat</label>
                                                <div class="col-sm-10">
                                                <input type="text"  readonly class="form-control" value="<?= $jemaat->alamat ?>">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">RT</label>
                                                <div class="col-sm-10">
                                                <input type="text"  readonly class="form-control" value="<?= $jemaat->rt ?>">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">RW</label>
                                                <div class="col-sm-10">
                                                <input type="text"  readonly class="form-control" value="<?= $jemaat->rw ?>">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Kelurahan</label>
                                                <div class="col-sm-10">
                                                <input type="text"  readonly class="form-control" value="<?= $jemaat->kelurahan ?>">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Kecamatan</label>
                                                <div class="col-sm-10">
                                                <input type="text"  readonly class="form-control" value="<?= $jemaat->kecamatan ?>">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Kota</label>
                                                <div class="col-sm-10">
                                                <input type="text"  readonly class="form-control" value="<?= $jemaat->kota ?>">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Provinsi</label>
                                                <div class="col-sm-10">
                                                <input type="text"  readonly class="form-control" value="<?= $jemaat->provinsi ?>">
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                   

                                    <div class="row d-flex justify-content-end">
                                    <button class="btn btn-primary waves-effect waves-light mb-5 mr-5" type="submit">Submit</button>
                                    <a href="<?php echo base_url('jemaat/edit/'.$jemaat -> id_jemaat)?>" ><button class="btn btn-danger waves-effect waves-light mb-5 mr-5" type="button"> <i class="fa fa-edit"></i> Back</button> </a>
                                </div>
                             </form>
                                 
                                </div>
                            </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Page body end -->

