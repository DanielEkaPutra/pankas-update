<div class="col-md-6 center">
    <div class="card">
        <div class="card-header">
            <h5>Form Tambah Akun</h5>
            <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->

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
        <div class="card-block">
            <form class="form-material" action="<?= base_url('user/tambah_data');?>" method="POST">
                <div class="form-group form-default">
                    <input type="text" name="nama_depan" class="form-control" required="">
                    <span class="form-bar"></span>
                    <label class="float-label">Nama Depan</label>
                </div>
                <div class="form-group form-default">
                    <input type="text" name="nama_tengah" class="form-control" required="">
                    <span class="form-bar"></span>
                    <label class="float-label">Nama Tengah</label>
                </div>
                <div class="form-group form-default">
                    <input type="text" name="nama_belakang" class="form-control" required="">
                    <span class="form-bar"></span>
                    <label class="float-label">Nama Belakang</label>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <select name="jenis_kelamin" class="form-control">
                            <option value="">Silahkan Pilih Jenis Kelamin</option>
                            <option value="1">Laki-Laki</option>
                            <option value="2">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group form-default">
                    <input type="text" name="username" class="form-control" required="">
                    <span class="form-bar"></span>
                    <label class="float-label">Username</label>
                </div>
                <div class="form-group form-default">
                    <input type="password" name="password" class="form-control" required="">
                    <span class="form-bar"></span>
                    <label class="float-label">Password</label>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <select name="role" class="form-control">
                            <option value="">Silahkan Pilih Role</option>
                            <option value="1">Super Admin</option>
                            <option value="2">Admin</option>
                            <option value="3">Korsek</option>
                        </select>
                    </div>
                </div>

                <button class="col-sm-2 btn btn-primary waves-effect waves-light mb-3 mr-3 mt-3 btn-block"  type="submit">Submit</button>

            </form>
        </div>
    </div>
</div>