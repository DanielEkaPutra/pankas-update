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
                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4 class="sub-title">Sektor & Rayon</h4>
                                                <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Sektor</label>
                                                    <div class="col-sm-10">
                                                    <select name="select" class="form-control" value="<?= $jemaat->sektor ?>">
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
                                                                <option value="13">Ebenhaezer </option>
                                                </select>
                                                </div>
                                                </div>
                                                <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">No Rayon</label>
                                                <div class="col-sm-10">
                                                    <select name="select" class="form-control" value="<?= $jemaat->rayon ?>">
                                                        <option value="<?= $jemaat->id_rayon?>"><?= $jemaat->rayon?></option>
                                                </select>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                        <h4 class="sub-title">Jemaat</h4>
                        <form>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" >ID KWJ</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="<?= $jemaat->id_jemaat ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">ID Jemaat</label>
                                <div class="col-sm-10">
                                    <?php
                                        $id_ang = $jemaat->id_anggota;
                                    ?>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Depan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Belakang</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                <select name="select" class="form-control">
                                            <option value="1">Laki-Laki</option>
                                            <option value="2">Perempuan</option>
                                        </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Pendidikan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="<?= $jemaat->pendidikan ?>">
                                    </div>
                                </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="<?= $jemaat->pekerjaan ?>">
                                    </div>
                                </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Telepon</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="<?= $jemaat->telepon ?>">
                                    </div>
                                </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Status Keluarga</label>
                                    <div class="col-sm-10">
                                    <select name="select" class="form-control">
                                            <option value="1">Kepala Keluarga</option>
                                            <option value="0">Istri</option>
                                            <option value="0">Anak</option>
                                            <option value="0">Kakek</option>
                                            <option value="0">Nenek</option>
                                            <option value="0">Sodara</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="col-sm-12">
                                            <h4 class="sub-title">Tanggalan & Tempat</h4>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                                <div class="col-sm-10">
                                                <input type="date" class="form-control" value="<?= $jemaat->tanggal_lahir ?>">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                                                <div class="col-sm-10">
                                                <input type="text" class="form-control" value="<?= $jemaat->tempat_lahir ?>">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tanggal Baptis</label>
                                                <div class="col-sm-10">
                                                <input type="date" class="form-control" value="<?= $jemaat->tanggal_baptis ?>">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tempat Baptis</label>
                                                <div class="col-sm-10">
                                                <input type="text" class="form-control" value="<?= $jemaat->tempat_baptis ?>">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tanggal Sidi</label>
                                                <div class="col-sm-10">
                                                <input type="date" class="form-control" value="<?= $jemaat->tanggal_sidi ?>">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tempat Sidi</label>
                                                <div class="col-sm-10">
                                                <input type="text" class="form-control" value="<?= $jemaat->tempat_sidi ?>">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tanggal Menikah</label>
                                                <div class="col-sm-10">
                                                <input type="date" class="form-control" value="<?= $jemaat->tanggal_nikah ?>">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tempat Menikah</label>
                                                <div class="col-sm-10">
                                                <input type="text" class="form-control" value="<?= $jemaat->tempat_nikah ?>">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tanggal Pindah</label>
                                                <div class="col-sm-10">
                                                <input type="date" class="form-control" value="<?= $jemaat->tanggal_pindah ?>">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tempat Pindah</label>
                                                <div class="col-sm-10">
                                                <input type="text" class="form-control" value="<?= $jemaat->tempat_pindah ?>">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tanggal Meninggal</label>
                                                <div class="col-sm-10">
                                                <input type="date" class="form-control" value="<?= $jemaat->tanggal_meninggal ?>">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tempat Meninggal</label>
                                                <div class="col-sm-10">
                                                <input type="text" class="form-control" value="<?= $jemaat->tempat_meninggal ?>">
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

