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
                            <div class="col-sm-12 mb-5">
                                <h4 class="sub-title">ID Key</h4>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">ID | ID Tanggal</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" disabled name="id" value="<?php echo $jemaat->id; ?>">
                                        </div>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" disabled name="id_tanggal" value="<?php echo $jemaat->id_tanggal; ?>">
                                        </div>
                                </div>
                            </div>
                                            <div class="col-sm-12">
                                                <h4 class="sub-title">Sektor & Rayon</h4>
                                                <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Sektor | Rayon</label>
                                                        <div class="col-sm-5">
                                                            <select name="sektor" class="form-control">
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
                                                        <div class="col-sm-5">
                                                        <select name="rayon" class="form-control">
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
                                        <br>
                        <h4 class="sub-title">Jemaat</h4>
                        <form action="<?= base_url('jemaat/update_data')?>" method="POST">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" >ID KWJ</label>
                                <div class="col-sm-10">
                                    <input type="text" name="id_jemaat" class="form-control" value="<?= $jemaat->id_jemaat ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">ID Jemaat</label>
                                <div class="col-sm-10">
                                    <input type="text" name="id_anggota" class="form-control"
                                    value="<?= $jemaat->id_anggota ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Depan</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama_depan" class="form-control" value="<?= $jemaat->nama_depan ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Belakang</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama_belakang" class="form-control" value="<?= $jemaat->nama_belakang ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                        <select name="jenis_kelamin" class="form-control">
                                            <option <?php if($jemaat->jenis_kelamin == "1") {echo "selected='selected'";} echo $jemaat->jenis_kelamin;?> value="1">Laki-Laki</option>
                                            <option <?php if($jemaat->jenis_kelamin == "2") {echo "selected='selected'";} echo $jemaat->jenis_kelamin;?> value="2">Perempuan</option>
                                        </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Pendidikan</label>
                                    <div class="col-sm-10">
                                    <select name="pendidikan" class="form-control">
                                            <option  <?php if($jemaat->pendidikan == "SD") {echo "selected='selected'";} echo $jemaat->pendidikan;?> value="SD">SD</option>
                                            <option  <?php if($jemaat->pendidikan == "SMP") {echo "selected='selected'";} echo $jemaat->pendidikan;?> value="SMP">SMP</option>
                                            <option  <?php if($jemaat->pendidikan == "SMA") {echo "selected='selected'";} echo $jemaat->pendidikan;?> value="SMA">SMA</option>
                                            <option  <?php if($jemaat->pendidikan == "D1") {echo "selected='selected'";} echo $jemaat->pendidikan;?> value="D1">D1</option>
                                            <option  <?php if($jemaat->pendidikan == "D2") {echo "selected='selected'";} echo $jemaat->pendidikan;?> value="D2">D2</option>
                                            <option  <?php if($jemaat->pendidikan == "D3") {echo "selected='selected'";} echo $jemaat->pendidikan;?> value="D3">D3</option>
                                            <option  <?php if($jemaat->pendidikan == "S1") {echo "selected='selected'";} echo $jemaat->pendidikan;?> value="S1">S1</option>
                                            <option  <?php if($jemaat->pendidikan == "S2") {echo "selected='selected'";} echo $jemaat->pendidikan;?> value="S2">S2</option>
                                            <option  <?php if($jemaat->pendidikan == "S3") {echo "selected='selected'";} echo $jemaat->pendidikan;?> value="S3">S3</option>
                                        </select>
                                    </div>
                                </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-10">
                                    <select name="pekerjaan" class="form-control">
                                            <option  <?php if($jemaat->pekerjaan == "Karyawan Swasta") {echo "selected='selected'";} echo $jemaat->pekerjaan;?> value="Karyawan Swasta">Karyawan Swasta</option>
                                            <option  <?php if($jemaat->pekerjaan == "Pegawai Negeri") {echo "selected='selected'";} echo $jemaat->pekerjaan;?> value="Pegawai Negeri">Pegawai Negeri</option>
                                            <option  <?php if($jemaat->pekerjaan == "Aparatur Sipil Negara") {echo "selected='selected'";} echo $jemaat->pekerjaan;?>value="Aparatur Sipil Negara">Aparatur Sipil Negara</option>
                                            <option  <?php if($jemaat->pekerjaan == "Wirausahawan") {echo "selected='selected'";} echo $jemaat->pekerjaan;?> value="Wirausahawan">Wirausahawan</option>
                                            <option  <?php if($jemaat->pekerjaan == "Mahasiswa") {echo "selected='selected'";} echo $jemaat->pekerjaan;?> value="Mahasiswa">Mahasiswa/Siswa</option>
                                        </select>
                                    </div>
                                </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Telepon</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="telepon" class="form-control" value="<?= $jemaat->telepon ?>">
                                    </div>
                                </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Status Keluarga</label>
                                    <div class="col-sm-10">
                                    <select name="status" class="form-control">
                                            <option <?php if($jemaat->status == "1") {echo "selected='selected'";} echo $jemaat->status;?> value="1">Kepala Keluarga</option>
                                            <option <?php if($jemaat->status == "2") {echo "selected='selected'";} echo $jemaat->status;?> value="2">Istri</option>
                                            <option <?php if($jemaat->status == "3") {echo "selected='selected'";} echo $jemaat->status;?> value="3">Anak</option>
                                            <option <?php if($jemaat->status == "4") {echo "selected='selected'";} echo $jemaat->status;?> value="4">Kakek</option>
                                            <option <?php if($jemaat->status == "5") {echo "selected='selected'";} echo $jemaat->status;?> value="5">Nenek</option>
                                            <option <?php if($jemaat->status == "6") {echo "selected='selected'";} echo $jemaat->status;?> value="6">Sodara</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                        <div class="col-sm-12">
                                            <h4 class="sub-title">Tanggalan & Tempat</h4>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                                <div class="col-sm-10">
                                                <input type="date" name="tanggal_lahir" class="form-control" value="<?= $jemaat->tanggal_lahir ?>">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                                                <div class="col-sm-10">
                                                <input type="text" name="tempat_lahir" class="form-control" value="<?= $jemaat->tempat_lahir ?>">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tanggal Baptis</label>
                                                <div class="col-sm-10">
                                                <input type="date" name="tanggal_baptis" class="form-control" value="<?= $jemaat->tanggal_baptis ?>">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tempat Baptis</label>
                                                <div class="col-sm-10">
                                                <input type="text" name="tempat_baptis" class="form-control" value="<?= $jemaat->tempat_baptis ?>">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tanggal Sidi</label>
                                                <div class="col-sm-10">
                                                <input type="date" name="tanggal_sidi" class="form-control" value="<?= $jemaat->tanggal_sidi ?>">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tempat Sidi</label>
                                                <div class="col-sm-10">
                                                <input type="text" name="tempat_sidi" class="form-control" value="<?= $jemaat->tempat_sidi ?>">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tanggal Menikah</label>
                                                <div class="col-sm-10">
                                                <input type="date" name="tanggal_menikah" class="form-control" value="<?= $jemaat->tanggal_nikah ?>">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tempat Menikah</label>
                                                <div class="col-sm-10">
                                                <input type="text" name="tempat_menikah" class="form-control" value="<?= $jemaat->tempat_nikah ?>">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tanggal Pindah</label>
                                                <div class="col-sm-10">
                                                <input type="date" name="tanggal_pindah" class="form-control" value="<?= $jemaat->tanggal_pindah ?>">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tempat Pindah</label>
                                                <div class="col-sm-10">
                                                <input type="text" name="tempat_pindah" class="form-control" value="<?= $jemaat->tempat_pindah ?>">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tanggal Meninggal</label>
                                                <div class="col-sm-10">
                                                <input type="date" name="tanggal_meninggal" class="form-control" value="<?= $jemaat->tanggal_meninggal ?>">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tempat Meninggal</label>
                                                <div class="col-sm-10">
                                                <input type="text" name="tempat_meninggal" class="form-control" value="<?= $jemaat->tempat_meninggal ?>">
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                    <br>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4 class="sub-title">Alamat Lengkap</h4>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Alamat</label>
                                                <div class="col-sm-10">
                                                <input type="text" name="alamat" class="form-control" value="<?= $jemaat->alamat ?>">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">RT</label>
                                                <div class="col-sm-10">
                                                <input type="text" name="rt" class="form-control" placeholder="02" value="<?= $jemaat->rt ?>">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">RW</label>
                                                <div class="col-sm-10">
                                                <input type="text" name="rw" class="form-control" placeholder="01" value="<?= $jemaat->rw ?>">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Kelurahan</label>
                                                <div class="col-sm-10">
                                                <select name="kelurahan" class="form-control">
                                                    <option <?php if($jemaat->kelurahan == "Beji") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Beji">Beji</option>
                                                    <option <?php if($jemaat->kelurahan == "Beji Timur") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Beji Timur">Beji Timur</option>
                                                    <option <?php if($jemaat->kelurahan == "Kemiri Muka") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Kemiri Muka">Kemiri Muka</option>
                                                    <option <?php if($jemaat->kelurahan == "Kukusan") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Kukusan">Kukusan</option>
                                                    <option <?php if($jemaat->kelurahan == "Pondok Cina") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Pondok Cina">Pondok Cina</option>
                                                    <option <?php if($jemaat->kelurahan == "Tanah Baru") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Tanah Baru">Tanah Baru</option>
                                                    <option <?php if($jemaat->kelurahan == "Bojongsari Baru") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Bojongsari Baru">Bojongsari Baru</option>
                                                    <option <?php if($jemaat->kelurahan == "Bojongsari Lama") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Bojongsari Lama">Bojongsari Lama</option>
                                                    <option <?php if($jemaat->kelurahan == "Curug") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Curug">Curug</option>
                                                    <option <?php if($jemaat->kelurahan == "Duren Mekar") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Duren Mekar">Duren Mekar</option>
                                                    <option <?php if($jemaat->kelurahan == "Duren Seribu") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Duren Seribu">Duren Seribu</option>
                                                    <option <?php if($jemaat->kelurahan == "Pondok Petir") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Pondok Petir">Pondok Petir</option>
                                                    <option <?php if($jemaat->kelurahan == "Serua") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Serua">Serua</option>
                                                    <option <?php if($jemaat->kelurahan == "Cilodong") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Cilodong">Cilodong</option>
                                                    <option <?php if($jemaat->kelurahan == "Jatimulya") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Jatimulya">Jatimulya</option>
                                                    <option <?php if($jemaat->kelurahan == "Kalibaru") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Kalibaru">Kalibaru</option>
                                                    <option <?php if($jemaat->kelurahan == "Kalimulya") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Kalimulya">Kalimulya</option>
                                                    <option <?php if($jemaat->kelurahan == "Sukamaju") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Sukamaju">Sukamaju</option>
                                                    <option <?php if($jemaat->kelurahan == "Cisalak Pasar") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Cisalak Pasar">Cisalak Pasar</option>
                                                    <option <?php if($jemaat->kelurahan == "Harjamukti") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Harjamukti">Harjamukti</option>
                                                    <option <?php if($jemaat->kelurahan == "Mekarsari") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Mekarsari">Mekarsari</option>
                                                    <option <?php if($jemaat->kelurahan == "Pasir Gunung Selatan") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Pasir Gunung Selatan">Pasir Gunung Selatan</option>
                                                    <option <?php if($jemaat->kelurahan == "Tugu") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Tugu">Tugu</option>
                                                    <option <?php if($jemaat->kelurahan == "Cinere") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Cinere">Cinere</option>
                                                    <option <?php if($jemaat->kelurahan == "Gandul") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Gandul">Gandul</option>
                                                    <option <?php if($jemaat->kelurahan == "Pangkalan Jati") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Pangkalan Jati">Pangkalan Jati</option>
                                                    <option <?php if($jemaat->kelurahan == "Pangkalan Jati Baru") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Pangkalan Jati Baru">Pangkalan Jati Baru</option>
                                                    <option <?php if($jemaat->kelurahan == "Bojong Pondok Terong") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Bojong Pondok Terong">Bojong Pondok Terong</option>
                                                    <option <?php if($jemaat->kelurahan == "Cipayung") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Cipayung">Cipayung</option>
                                                    <option <?php if($jemaat->kelurahan == "Cipayung Jaya") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Cipayung Jaya">Cipayung Jaya</option>
                                                    <option <?php if($jemaat->kelurahan == "Pondok Jaya") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Pondok Jaya">Pondok Jaya</option>
                                                    <option <?php if($jemaat->kelurahan == "Ratu Jaya") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Ratu Jaya">Ratu Jaya</option>
                                                    <option <?php if($jemaat->kelurahan == "Grogol") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Grogol">Grogol</option>
                                                    <option <?php if($jemaat->kelurahan == "Krukut") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Krukut">Krukut</option>
                                                    <option <?php if($jemaat->kelurahan == "Limo") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Limo">Limo</option>
                                                    <option <?php if($jemaat->kelurahan == "Meruyung") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Meruyung">Meruyung</option>
                                                    <option <?php if($jemaat->kelurahan == "Depok") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Depok">Depok</option>
                                                    <option <?php if($jemaat->kelurahan == "Depok Jaya") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Depok Jaya">Depok Jaya</option>
                                                    <option <?php if($jemaat->kelurahan == "Mampang") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Mampang">Mampang</option>
                                                    <option <?php if($jemaat->kelurahan == "Pancoran Mas") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Pancoran Mas">Pancoran Mas</option>
                                                    <option <?php if($jemaat->kelurahan == "Rangkapan Jaya") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Rangkapan Jaya">Rangkapan Jaya</option>
                                                    <option <?php if($jemaat->kelurahan == "Rangkapan Jaya Baru") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Rangkapan Jaya Baru">Rangkapan Jaya Baru</option>
                                                    <option <?php if($jemaat->kelurahan == "Bedahan") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Bedahan">Bedahan</option>
                                                    <option <?php if($jemaat->kelurahan == "Cinangka") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Cinangka">Cinangka</option>
                                                    <option <?php if($jemaat->kelurahan == "Kedaung") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Kedaung">Kedaung</option>
                                                    <option <?php if($jemaat->kelurahan == "Pasir Putih") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Pasir Putih">Pasir Putih</option>
                                                    <option <?php if($jemaat->kelurahan == "Pengasinan") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Pengasinan">Pengasinan</option>
                                                    <option <?php if($jemaat->kelurahan == "Sawangan Baru") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Sawangan Baru">Sawangan Baru</option>
                                                    <option <?php if($jemaat->kelurahan == "Sawangan Lama") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Sawangan Lama">Sawangan Lama</option>
                                                    <option <?php if($jemaat->kelurahan == "Abadijaya") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Abadijaya">Abadijaya</option>
                                                    <option <?php if($jemaat->kelurahan == "Bakti Jaya") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Bakti Jaya">Bakti Jaya</option>
                                                    <option <?php if($jemaat->kelurahan == "Cisalak") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Cisalak">Cisalak</option>
                                                    <option <?php if($jemaat->kelurahan == "Mekar Jaya") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Mekar Jaya">Mekar Jaya</option>
                                                    <option <?php if($jemaat->kelurahan == "Sukmajaya") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Sukmajaya">Sukmajaya</option>
                                                    <option <?php if($jemaat->kelurahan == "Tirta Jaya") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Tirta Jaya">Tirta Jaya</option>
                                                    <option <?php if($jemaat->kelurahan == "Cilangkap") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Cilangkap">Cilangkap</option>
                                                    <option <?php if($jemaat->kelurahan == "Cimpaeun") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Cimpaeun">Cimpaeun</option>
                                                    <option <?php if($jemaat->kelurahan == "Jatijajar") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Jatijajar">Jatijajar</option>
                                                    <option <?php if($jemaat->kelurahan == "Leuwinanggung") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Leuwinanggung">Leuwinanggung</option>
                                                    <option <?php if($jemaat->kelurahan == "Sukamaju Baru") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Sukamaju Baru">Sukamaju Baru</option>
                                                    <option <?php if($jemaat->kelurahan == "Sukatani") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Sukatani">Sukatani</option>
                                                    <option <?php if($jemaat->kelurahan == "Tapos") {echo "selected='selected'";} echo $jemaat->kelurahan;?> value="Tapos">Tapos</option>
                                                </select>
                                             </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Kecamatan</label>
                                                <div class="col-sm-10">
                                                <select name="Kecamatan" class="form-control">
                                                    <option <?php if($jemaat->kecamatan == "Beji") {echo "selected='selected'";} echo $jemaat->kecamatan;?> value="Beji">Beji</option>
                                                    <option <?php if($jemaat->kecamatan == "Bojongsari") {echo "selected='selected'";} echo $jemaat->kecamatan;?> value="Bojongsari">Bojongsari</option>
                                                    <option <?php if($jemaat->kecamatan == "Cilodong") {echo "selected='selected'";} echo $jemaat->kecamatan;?> value="Cilodong">Cilodong</option>
                                                    <option <?php if($jemaat->kecamatan == "Cimanggis") {echo "selected='selected'";} echo $jemaat->kecamatan;?> value="Cimanggis">Cimanggis</option>
                                                    <option <?php if($jemaat->kecamatan == "Cinere") {echo "selected='selected'";} echo $jemaat->kecamatan;?> value="Cinere">Cinere</option>
                                                    <option <?php if($jemaat->kecamatan == "Cipayung") {echo "selected='selected'";} echo $jemaat->kecamatan;?> value="Cipayung">Cipayung</option>
                                                    <option <?php if($jemaat->kecamatan == "Limo") {echo "selected='selected'";} echo $jemaat->kecamatan;?> value="Limo">Limo</option>
                                                    <option <?php if($jemaat->kecamatan == "Bojongsari Lama") {echo "selected='selected'";} echo $jemaat->kecamatan;?> value="Pancoran Mas">Bojongsari Lama</option>
                                                    <option <?php if($jemaat->kecamatan == "Sawangan") {echo "selected='selected'";} echo $jemaat->kecamatan;?> value="Sawangan">Sawangan</option>
                                                    <option <?php if($jemaat->kecamatan == "Sukmajaya") {echo "selected='selected'";} echo $jemaat->kecamatan;?> value="Sukmajaya">Sukmajaya</option>
                                                    <option <?php if($jemaat->kecamatan == "Tapos") {echo "selected='selected'";} echo $jemaat->kecamatan;?> value="Tapos">Tapos</option>
                                                </select>
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Kota</label>
                                                <div class="col-sm-10">
                                                <input type="text" name="kota" class="form-control" value="<?= $jemaat->kota ?>">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Provinsi</label>
                                                <div class="col-sm-10">
                                                <input type="text" name="provinsi" class="form-control" value="<?= $jemaat->provinsi ?>">
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                   <!-- Modal -->
                                    <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog">
                                        
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Edit Data</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                            <p>Apakah data sudah benar ?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" name="submit "class="btn btn-success" data-dismiss="modal">Submit</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>
                                        
                                        </div>
                                    </div>

                                    <br>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4 class="sub-title">Status</h4>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Status Pelayanan</label>
                                                <div class="col-sm-10">
                                                <select name="Kecamatan" class="form-control">
                                                    <option value="Anggota Jemaat">Anggota Jemaat</option>
                                                    <option value="Majelis Jemaat">Majelis Jemaat</option>
                                                    <option value="Koordinator Sektor">Koordinator Sektor</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Pelkat</label>
                                                <div class="col-sm-10">
                                                <select name="Kecamatan" class="form-control">
                                                    <option value="Anggota Jemaat">Pelayanan Anak</option>
                                                    <option value="Majelis Jemaat">Pelayanan Teruna</option>
                                                    <option value="Koordinator Sektor">Gerakan Pemuda</option>
                                                    <option value="Koordinator Sektor">Persekutuan Kaum Bapak</option>
                                                    <option value="Koordinator Sektor">Persekutuan Kaum Perempuan</option>
                                                    <option value="Koordinator Sektor">Persekutuan Kaum Lansia</option>
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>             
                                    <br>

                                    <div class="row d-flex justify-content-end">
                                    <button class="btn btn-primary waves-effect waves-light mb-5 mr-5" type="button"data-toggle="modal" data-target="#myModal" >Submit</button>
                                    <a href="<?php echo base_url('jemaat/edit/'.$jemaat -> id_jemaat)?>" ><button class="btn btn-danger waves-effect waves-light mb-5 mr-5" type="button"> <i class="fa fa-edit"></i> Back</button> </a>
                                </div>
                             </form>
                                 
                                </div>
                            </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Page body end -->

