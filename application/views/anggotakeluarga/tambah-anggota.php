<!-- Page body start -->
<div class="page-body">
        <div class="row">
            <div class="col-sm-12">
                <!-- Basic Form Inputs card start -->
                <div class="card">
                    <div class="card-header">
                        <h5>Tambah Anggota Keluarga</h5>
                    </div>
                    <div class="card-block">
                        
                    <form method="POST" action="<?= base_url('jemaat/tambah_anggota')?>">
                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4 class="sub-title">Sektor & Rayon</h4>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Sektor</label>
                                                    <div class="col-sm-10">
                                                        <select name="sektor" class="form-control" value="<?= $jemaat->sektor ?>">
                                                            <?php
                                                                foreach($sektor as $s)
                                                                {
                                                            ?>
                                                                <option value="<?= $s->id?>"><?= $s->nama?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">No Rayon</label>
                                                <div class="col-sm-10">
                                                    <select name="rayon" class="form-control" value="<?= $jemaat->rayon ?>">
                                                    <?php foreach($rayon as $r) {?>
                                                        <option value="<?= $r->id_rayon?>"><?= $r->rayon?></option>
                                                        <?php } ?>
                                                </select>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                        <h4 class="sub-title">Jemaat</h4>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" >ID KWJ</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="id_jemaat" value="<?= $jemaat->id_jemaat ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">ID Jemaat</label>
                                <div class="col-sm-10">
                                    <input type="text" name="id_anggota" class="form-control" placeholder="1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Depan</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama_depan" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Belakang</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama_belakang" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                <select name="jenis_kelamin" class="form-control">
                                            <option value="1">Laki-Laki</option>
                                            <option value="2">Perempuan</option>
                                        </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Pendidikan</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="pendidikan" class="form-control">
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="pekerjaan" class="form-control">
                                    </div>
                                </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Telepon</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="telepon" class="form-control">
                                    </div>
                                </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Status Keluarga</label>
                                    <div class="col-sm-10">
                                    <select name="status" class="form-control">
                                            <option value="1">Kepala Keluarga</option>
                                            <option value="2">Istri</option>
                                            <option value="3">Anak</option>
                                            <option value="4">Kakek</option>
                                            <option value="5">Nenek</option>
                                            <option value="6">Saudara</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="col-sm-12">
                                            <h4 class="sub-title">Tanggalan & Tempat</h4>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                                <div class="col-sm-10">
                                                <input type="date" name="tanggal_lahir" class="form-control">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                                                <div class="col-sm-10">
                                                <input type="text" name="tempat_lahir" class="form-control">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tanggal Baptis</label>
                                                <div class="col-sm-10">
                                                <input type="date" name="tanggal_baptis" class="form-control">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tempat Baptis</label>
                                                <div class="col-sm-10">
                                                <input type="text" name="tempat_baptis" class="form-control">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tanggal Sidi</label>
                                                <div class="col-sm-10">
                                                <input type="date" name="tanggal_sidi" class="form-control">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tempat Sidi</label>
                                                <div class="col-sm-10">
                                                <input type="text" name="tempat_sidi" class="form-control">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tanggal Menikah</label>
                                                <div class="col-sm-10">
                                                <input type="date" name="tanggal_menikah" class="form-control">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tempat Menikah</label>
                                                <div class="col-sm-10">
                                                <input type="text" name="tempat_menikah" class="form-control">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tanggal Pindah</label>
                                                <div class="col-sm-10">
                                                <input type="date" name="tanggal_pindah" class="form-control">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tempat Pindah</label>
                                                <div class="col-sm-10">
                                                <input type="text" name="tempat_pindah" class="form-control">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tanggal Meninggal</label>
                                                <div class="col-sm-10">
                                                <input type="date" name="tanggal_meninggal" class="form-control">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tempat Meninggal</label>
                                                <div class="col-sm-10">
                                                <input type="text" name="tempat_meninggal" class="form-control">
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

