<div class="col-md-6 center">
    <div class="card">
        <div class="card-header">
            <h5>Form Edit Akun</h5>
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
        <?php
        
            foreach($user as $u)
            {
        
        ?>
        <div class="card-block">
            <form class="form-material" action="<?= base_url('user/update_data');?>" method="POST">
                <input type="hidden" value="<?= $u->id_user?>" name="id">
                <div class="form-group form-default">
                    <input type="text" value="<?= $u->nama_depan?>" name="nama_depan" class="form-control" required="">
                    <span class="form-bar"></span>
                    <label class="float-label">Nama Depan</label>
                </div>
                <div class="form-group form-default">
                    <input type="text" value="<?= $u->nama_tengah?>" name="nama_tengah" class="form-control" required="">
                    <span class="form-bar"></span>
                    <label class="float-label">Nama Tengah</label>
                </div>
                <div class="form-group form-default">
                    <input type="text" value="<?= $u->nama_belakang?>" name="nama_belakang" class="form-control" required="">
                    <span class="form-bar"></span>
                    <label class="float-label">Nama Belakang</label>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <select name="jenis_kelamin" class="form-control">
                            <option value="">Silahkan Pilih Jenis Kelamin</option>
                            <option <?php if($u->jenis_kelamin == "1") {echo "selected='selected'";} echo $u->jenis_kelamin;?> value="1">Laki-Laki</option>
                            <option <?php if($u->jenis_kelamin == "2") {echo "selected='selected'";} echo $u->jenis_kelamin;?> value="2">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group form-default">
                    <input type="text" value="<?= $u->username?>" name="username" class="form-control" required="">
                    <span class="form-bar"></span>
                    <label class="float-label">Username</label>
                </div>
                <div class="form-group form-default">
                    <input type="password" value="<?= $u->password?>" name="password" class="form-control" required="">
                    <span class="form-bar"></span>
                    <label class="float-label">Password</label>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <select name="role" class="form-control">
                            <option value="">Silahkan Pilih Role</option>
                            <option <?php if($u->role == "1") {echo "selected='selected'";} echo $u->role;?> value="1">Super Admin</option>
                            <option <?php if($u->role == "2") {echo "selected='selected'";} echo $u->role;?> value="2">Admin</option>
                            <option <?php if($u->role == "3") {echo "selected='selected'";} echo $u->role;?> value="3">Korsek</option>
                        </select>
                    </div>
                </div>

                <button class="col-sm-2 btn btn-primary waves-effect waves-light mb-3 mr-3 mt-3 btn-block"  type="submit">Submit</button>
                <button type="button" class="col-sm-2 btn btn-danger waves-effect waves-light mb-3 mr-3 mt-3 btn-block" onclick="window.history.go(-1)"> Back</button>
            </form>
        </div>
        <?php } ?>
    </div>
</div>