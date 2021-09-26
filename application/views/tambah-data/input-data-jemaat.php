<!-- Page body start -->
    <div class="page-body">
        <div class="row">
            <div class="col-sm-12">
                <!-- Basic Form Inputs card start -->
                <div class="card">
                    <div class="card-header">
                        <h5>Input Data Jemaat</h5>
                    </div>
                    <div class="card-block">
                        <form action="<?= base_url('jemaat/tambah_data')?>" method="POST">
                            <div class="row">
                                            <div class="col-sm-12">
                                                <h4 class="sub-title">Sektor & Rayon</h4>
                                                <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Sektor | Rayon</label>
                                                    <div class="col-sm-6">
                                                        <select name="sektor" class="form-control">
                                                            <option value="">Silahkan Pilih Sektor</option>
                                                            <?php
                                                                foreach($sektor as $s)
                                                                {
                                                            ?>
                                                                <option value="<?= $s->id_sektor?>"><?= $s->nama?></option>
                                                            <?php } ?>
                                                        </select>
                                                   </div>
                                                    <div class="col-sm-4">
                                                    <select name="rayon" class="form-control">
                                                        <?php
                                                            foreach($rayon as $r)
                                                            {
                                                        ?>
                                                            <option value="<?= $r->id_rayon?>"><?= $r->rayon?></option>
                                                        <?php } ?>
                                                    </select>
                                                   </div>
                                                </div>
                                            </div>
                                        </div>
                            <h4 class="sub-title">Jemaat</h4>
                        
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">ID KWJ</label>
                                <div class="col-sm-10">
                                    <input type="text" name="id_jemaat" class="form-control" placeholder="10101 (5 angka)">
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
                                    <select name="pendidikan" class="form-control">
                                            <option value="SD">SD</option>
                                            <option value="SMP">SMP</option>
                                            <option value="SMA">SMA</option>
                                            <option value="D1">D1</option>
                                            <option value="D2">D2</option>
                                            <option value="D3">D3</option>
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                        </select>
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-10">
                                    <select name="pekerjaan" class="form-control">
                                            <option value="Karyawan Swasta">Karyawan Swasta</option>
                                            <option value="Pegawai Negeri">Pegawai Negeri</option>
                                            <option value="Aparatur Sipil Negara">Aparatur Sipil Negara</option>
                                            <option value="Wirausahawan">Wirausahawan</option>
                                            <option value="Mahasiswa">Mahasiswa/Siswa</option>
                                        </select>
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

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4 class="sub-title">Alamat Lengkap</h4>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Alamat</label>
                                                <div class="col-sm-10">
                                                <input type="text" name="alamat" class="form-control">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">RT</label>
                                                <div class="col-sm-10">
                                                <input type="text" name="rt" class="form-control">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">RW</label>
                                                <div class="col-sm-10">
                                                <input type="text" name="rw" class="form-control">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Kelurahan</label>
                                                <div class="col-sm-10">
                                                <select name="kelurahan" class="form-control">
                                                    <option value="Beji">Beji</option>
                                                    <option value="Beji Timur">Beji Timur</option>
                                                    <option value="Kemiri Muka">Kemiri Muka</option>
                                                    <option value="Kukusan">Kukusan</option>
                                                    <option value="Pondok Cina">Pondok Cina</option>
                                                    <option value="Tanah Baru">Tanah Baru</option>
                                                    <option value="Bojongsari Baru">Bojongsari Baru</option>
                                                    <option value="Bojongsari Lama">Bojongsari Lama</option>
                                                    <option value="Curug">Curug</option>
                                                    <option value="Duren Mekar">Duren Mekar</option>
                                                    <option value="Duren Seribu">Duren Seribu</option>
                                                    <option value="Pondok Petir">Pondok Petir</option>
                                                    <option value="Serua">Serua</option>
                                                    <option value="Cilodong">Cilodong</option>
                                                    <option value="Jatimulya">Jatimulya</option>
                                                    <option value="Kalibaru">Kalibaru</option>
                                                    <option value="Kalimulya">Kalimulya</option>
                                                    <option value="Sukamaju">Sukamaju</option>
                                                    <option value="Cisalak Pasar">Cisalak Pasar</option>
                                                    <option value="Harjamukti">Harjamukti</option>
                                                    <option value="Mekarsari">Mekarsari</option>
                                                    <option value="Pasir Gunung Selatan">Pasir Gunung Selatan</option>
                                                    <option value="Tugu">Tugu</option>
                                                    <option value="Cinere">Cinere</option>
                                                    <option value="Gandul">Gandul</option>
                                                    <option value="Pangkalan Jati">Pangkalan Jati</option>
                                                    <option value="Pangkalan Jati Baru">Pangkalan Jati Baru</option>
                                                    <option value="Bojong Pondok Terong">Bojong Pondok Terong</option>
                                                    <option value="Cipayung">Cipayung</option>
                                                    <option value="Cipayung Jaya">Cipayung Jaya</option>
                                                    <option value="Pondok Jaya">Pondok Jaya</option>
                                                    <option value="Ratu Jaya">Ratu Jaya</option>
                                                    <option value="Grogol">Grogol</option>
                                                    <option value="Krukut">Krukut</option>
                                                    <option value="Limo">Limo</option>
                                                    <option value="Meruyung">Meruyung</option>
                                                    <option value="Depok">Depok</option>
                                                    <option value="Depok Jaya">Depok Jaya</option>
                                                    <option value="Mampang">Mampang</option>
                                                    <option value="Pancoran Mas">Pancoran Mas</option>
                                                    <option value="Rangkapan Jaya">Rangkapan Jaya</option>
                                                    <option value="Rangkapan Jaya Baru">Rangkapan Jaya Baru</option>
                                                    <option value="Bedahan">Bedahan</option>
                                                    <option value="Cinangka">Cinangka</option>
                                                    <option value="Kedaung">Kedaung</option>
                                                    <option value="Pasir Putih">Pasir Putih</option>
                                                    <option value="Pengasinan">Pengasinan</option>
                                                    <option value="Sawangan Baru">Sawangan Baru</option>
                                                    <option value="Sawangan Lama">Sawangan Lama</option>
                                                    <option value="Abadijaya">Abadijaya</option>
                                                    <option value="Bakti Jaya">Bakti Jaya</option>
                                                    <option value="Cisalak">Cisalak</option>
                                                    <option value="Mekar Jaya">Mekar Jaya</option>
                                                    <option value="Sukmajaya">Sukmajaya</option>
                                                    <option value="Tirta Jaya">Tirta Jaya</option>
                                                    <option value="Cilangkap">Cilangkap</option>
                                                    <option value="Cimpaeun">Cimpaeun</option>
                                                    <option value="Jatijajar">Jatijajar</option>
                                                    <option value="Leuwinanggung">Leuwinanggung</option>
                                                    <option value="Sukamaju Baru">Sukamaju Baru</option>
                                                    <option value="Sukatani">Sukatani</option>
                                                    <option value="Tapos">Tapos</option>
                                                </select>
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Kecamatan</label>
                                                <div class="col-sm-10">
                                                <select name="Kecamatan" class="form-control">
                                                    <option value="Beji">Beji</option>
                                                    <option value="Bojongsari">Bojongsari</option>
                                                    <option value="Cilodong">Cilodong</option>
                                                    <option value="Cimanggis">Cimanggis</option>
                                                    <option value="Cinere">Cinere</option>
                                                    <option value="Cipayung">Cipayung</option>
                                                    <option value="Limo">Limo</option>
                                                    <option value="Pancoran Mas">Bojongsari Lama</option>
                                                    <option value="Sawangan">Sawangan</option>
                                                    <option value="Sukmajaya">Sukmajaya</option>
                                                    <option value="Tapos">Tapos</option>
                                                </select>
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Kota</label>
                                                <div class="col-sm-10">
                                                <input type="text" name="kota" value="Depok" readonly class="form-control">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Provinsi</label>
                                                <div class="col-sm-10">
                                                <input type="text" name="provinsi" value="Jawa Barat" readonly class="form-control">
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
                                        </div>
                                    </div>

                                   
                                    
                                    <div class="row d-flex justify-content-end mt-5">
                                        <div class="col-sm-10">

                                        </div>
                                    <button class="col-sm-2 btn btn-primary waves-effect waves-light mb-5 mr-3 btn-block"  type="submit">Submit</button>
                                </div>
                        </form>
                                 
                                </div>
                            </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Page body end -->

