            <!-- Hover table card start -->
            <div class="card">
                                            <div class="card-header">
                                                <h5>Hover Table</h5>
                                                <span>use class <code>table-hover</code> inside table element</span>
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
                                                    <table class="table table-hover">
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
                                                                <td><?= $j->nama_depan; ?></td>
                                                                <td><?= $j->nama; ?></td>
                                                                <td>
                                                                    
                                                                    <button class="btn btn-success waves-effect waves-light mb-5 mr-5" data-toggle="modal" data-target="#editModal"> <i class="fa fa-edit"></i> Edit </button> </a>
                                                                    <a href=""><button class="btn btn-danger waves-effect waves-light mb-5 mr-5"> <i class="fa fa-trash"></i> Hapus </button>
                                                                </td>
                                                            
                                                            </tr>
                                                            <?php endforeach ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Hover table card end -->