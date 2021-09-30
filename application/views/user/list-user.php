<div class="card">
    <div class="card-header">
        <h5>Data Akun User</h5>
        <br>

        <hr>
        <div class="d-flex justify-content-end">
            <a href="<?= base_url('user/tambahUser/')?>" style="text-decoration:none;" class="btn btn-primary btn text-right">Tambah User</a>
        </div>
            

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
                        <th>#</th>
                        <th>Nama Lengkap</th>
                        <th>Username</th>
                        <th>Status</th>
                        <th>Kendali</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    foreach ($user as $u): ?>
                    <tr>
                        <td><?= $no++;?></td>
                        <td><?= $u->nama_depan; ?> <?= $u->nama_tengah; ?> <?= $u->nama_belakang; ?></td>
                        <td><?= $u->username; ?></td>
                        <td>
                            <?php
                            
                                if($u->role == "1")
                                {
                                    echo "Super Admin";
                                }
                                else if($u->role == "2")
                                {
                                    echo "Admin";
                                }
                                else if($u->role == "3")
                                {
                                    echo "Korsek";
                                }

                            ?>
                        </td>
                        <td>
                            
                            <a href="<?php echo base_url('user/detail_data/'.$u->id_user)?>" ><button class="btn btn-primary waves-effect waves-light m-1"> <i class="fa fa-eye"></i></button> </a>
                            <a href="<?php echo base_url('user/edit_data/'.$u->id_user)?>" ><button class="btn btn-success waves-effect waves-light m-1"> <i class="fa fa-edit"></i></button> </a>
                            <a href="<?php echo base_url('user/hapus_data/'.$u->id_user)?>"><button class="btn btn-danger waves-effect waves-light m-1"> <i class="fa fa-trash"></i></button></a>
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
