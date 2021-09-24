<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jemaat extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelJemaat', 'modeljemaat');
    }

    public function index(){
        // Pagination
        // Config
        $config['total_rows'] = $this->modeljemaat->hitungJemaat();
        $config['per_page'] = 10;
        $data['total_rows'] = $config['total_rows'];

        // Initialize
        $this->pagination->initialize($config);

        // Search
        if($this->input->post('submit')){
            $data['keyword'] = $this->input->post('keyword');
        } else {
            $data['keyword'] = null;
        }
        
        //Data
        $data['start'] = $this->uri->segment(3);
        $data['jemaat'] = $this->modeljemaat->getJemaat($config['per_page'], $data['start'], $data['keyword']);
        $this->load->view('list-data/index', $data);
    }

    public function tambahForm()
    {
        $data['sektor'] = $this->db->query("SELECT * FROM sektor")->result();
        $data['rayon'] = $this->db->query("SELECT * FROM rayon")->result();
        $this->load->view('tambah-data/index', $data);
    }

    public function tambah_data()
    {
        // Input Sektor & Rayon
        $sektor = $this->input->post('sektor');
        $rayon = $this->input->post('rayon');

        // Input Jemaat
        $id_jemaat = $this->input->post('id_jemaat');
        $id_anggota = $this->input->post('id_anggota');
        $nama_depan = $this->input->post('nama_depan');
        $nama_belakang = $this->input->post('nama_belakang');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $pendidikan = $this->input->post('pendidikan');
        $pekerjaan = $this->input->post('pekerjaan');
        $telepon = $this->input->post('telepon');
        $status = $this->input->post('status');

        // Input Tanggal dan Tempat
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tanggal_baptis = $this->input->post('tanggal_baptis');
        $tempat_baptis = $this->input->post('tempat_baptis');
        $tanggal_sidi = $this->input->post('tanggal_sidi');
        $tempat_sidi = $this->input->post('tempat_sidi');
        $tanggal_menikah = $this->input->post('tanggal_menikah');
        $tempat_menikah = $this->input->post('tempat_menikah');
        $tanggal_pindah = $this->input->post('tanggal_pindah');
        $tempat_pindah = $this->input->post('tempat_pindah');
        $tanggal_meninggal = $this->input->post('tanggal_meninggal');
        $tempat_meninggal = $this->input->post('tempat_meninggal');

        // Input Alamat Lengkap
        $alamat = $this->input->post('alamat');
        $rt = $this->input->post('rt');
        $rw = $this->input->post('rw');
        $kelurahan = $this->input->post('kelurahan');
        $kecamatan = $this->input->post('kecamatan');
        $kota = $this->input->post('kota');
        $provinsi = $this->input->post('provinsi');

        $jemaat = array(
            'id_jemaat' => $id_jemaat,
            'id_anggota' => $id_anggota,
            'nama_depan' => $nama_depan,
            'nama_belakang' => $nama_belakang,
            'jenis_kelamin' => $jenis_kelamin,
            'pendidikan' => $pendidikan,
            'pekerjaan' => $pekerjaan,
            'telepon' => $telepon,
            'status' => $status,
            'sektor' => $sektor,
            'rayon' => $rayon
        );

        $tanggal = array(
            'id_jemaat' => $id_jemaat,
            'id_keluarga' => $id_anggota,
            'tanggal_lahir' => $tanggal_lahir,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_baptis' => $tanggal_baptis,
            'tempat_baptis' => $tempat_baptis,
            'tanggal_sidi' => $tanggal_sidi,
            'tempat_sidi' => $tempat_sidi,
            'tanggal_nikah' => $tanggal_menikah,
            'tempat_nikah' => $tempat_menikah,
            'tanggal_pindah' => $tanggal_pindah,
            'tempat_pindah' => $tempat_pindah,
            'tanggal_meninggal' => $tanggal_meninggal,
            'tempat_meninggal' => $tempat_meninggal
        );

        $alamat = array(
            'id_jemaat' => $id_jemaat,
            'alamat' => $alamat,
            'rt' => $rt,
            'rw' => $rw,
            'kelurahan' => $kelurahan,
            'kecamatan' => $kecamatan,
            'kota' => $kota,
            'provinsi' => $provinsi
        );

        // input ke table jemaat
        $this->modeljemaat->insert_data($jemaat, 'jemaat');

        $this->modeljemaat->insert_data($tanggal, 'tanggaldantempat');

        $this->modeljemaat->insert_data($alamat, 'alamatjemaat');

        redirect('jemaat');
    }

    public function edit($id){
       $data['jemaat'] = $this->modeljemaat->editJemaat($id);
       $data['tambahAnggota'] = $this->modeljemaat->tambahAnggota($id);
       $this->load->view('list-edit-data/index', $data);
    }

    public function edit_form($id)
    {
       $data['jemaat'] = $this->modeljemaat->editForm($id); 
       $this->load->view('form-edit-data/index', $data);
    }

    public function anggotaForm($id)
    {
        $data['sektor'] = $this->db->query("SELECT * FROM sektor")->result();
        $data['rayon'] = $this->db->query("SELECT * FROM rayon")->result(); 
        $data['jemaat'] = $this->modeljemaat->editForm($id);
        $this->load->view('anggotakeluarga/index', $data);
    }

    public function tambah_anggota()
    {
        // Input Sektor & Rayon
        $sektor = $this->input->post('sektor');
        $rayon = $this->input->post('rayon');

        // Input Jemaat
        $id_jemaat = $this->input->post('id_jemaat');
        $id_anggota = $this->input->post('id_anggota');
        $nama_depan = $this->input->post('nama_depan');
        $nama_belakang = $this->input->post('nama_belakang');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $pendidikan = $this->input->post('pendidikan');
        $pekerjaan = $this->input->post('pekerjaan');
        $telepon = $this->input->post('telepon');
        $status = $this->input->post('status');

        // Input Tanggal dan Tempat
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tanggal_baptis = $this->input->post('tanggal_baptis');
        $tempat_baptis = $this->input->post('tempat_baptis');
        $tanggal_sidi = $this->input->post('tanggal_sidi');
        $tempat_sidi = $this->input->post('tempat_sidi');
        $tanggal_menikah = $this->input->post('tanggal_menikah');
        $tempat_menikah = $this->input->post('tempat_menikah');
        $tanggal_pindah = $this->input->post('tanggal_pindah');
        $tempat_pindah = $this->input->post('tempat_pindah');
        $tanggal_meninggal = $this->input->post('tanggal_meninggal');
        $tempat_meninggal = $this->input->post('tempat_meninggal');

        $jemaat = array(
            'id_jemaat' => $id_jemaat,
            'id_anggota' => $id_anggota,
            'nama_depan' => $nama_depan,
            'nama_belakang' => $nama_belakang,
            'jenis_kelamin' => $jenis_kelamin,
            'pendidikan' => $pendidikan,
            'pekerjaan' => $pekerjaan,
            'telepon' => $telepon,
            'status' => $status,
            'sektor' => $sektor,
            'rayon' => $rayon
        );

        $tanggal = array(
            'id_jemaat' => $id_jemaat,
            'id_keluarga' => $id_anggota,
            'tanggal_lahir' => $tanggal_lahir,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_baptis' => $tanggal_baptis,
            'tempat_baptis' => $tempat_baptis,
            'tanggal_sidi' => $tanggal_sidi,
            'tempat_sidi' => $tempat_sidi,
            'tanggal_nikah' => $tanggal_menikah,
            'tempat_nikah' => $tempat_menikah,
            'tanggal_pindah' => $tanggal_pindah,
            'tempat_pindah' => $tempat_pindah,
            'tanggal_meninggal' => $tanggal_meninggal,
            'tempat_meninggal' => $tempat_meninggal
        );

        $this->modeljemaat->insert_data($jemaat, 'jemaat');

        $this->modeljemaat->insert_data($tanggal, 'tanggaldantempat');

        redirect('jemaat');

    }

    public function update_data()
    {
        $id = $this->input->post('id');
        $id_tanggal = $this->input->post('id_tanggal');
        // Input Sektor & Rayon
        $sektor = $this->input->post('sektor');
        $rayon = $this->input->post('rayon');

        // Input Jemaat
        $id_jemaat = $this->input->post('id_jemaat');
        $id_anggota = $this->input->post('id_anggota');
        $nama_depan = $this->input->post('nama_depan');
        $nama_belakang = $this->input->post('nama_belakang');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $pendidikan = $this->input->post('pendidikan');
        $pekerjaan = $this->input->post('pekerjaan');
        $telepon = $this->input->post('telepon');
        $status = $this->input->post('status');

        // Input Tanggal dan Tempat
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tanggal_baptis = $this->input->post('tanggal_baptis');
        $tempat_baptis = $this->input->post('tempat_baptis');
        $tanggal_sidi = $this->input->post('tanggal_sidi');
        $tempat_sidi = $this->input->post('tempat_sidi');
        $tanggal_menikah = $this->input->post('tanggal_menikah');
        $tempat_menikah = $this->input->post('tempat_menikah');
        $tanggal_pindah = $this->input->post('tanggal_pindah');
        $tempat_pindah = $this->input->post('tempat_pindah');
        $tanggal_meninggal = $this->input->post('tanggal_meninggal');
        $tempat_meninggal = $this->input->post('tempat_meninggal');

        $where = array('id' => $id);
        $where2 = array('id_tanggal' => $id_tanggal);
        $jemaat = array(
            'id_jemaat' => $id_jemaat,
            'id_anggota' => $id_anggota,
            'nama_depan' => $nama_depan,
            'nama_belakang' => $nama_belakang,
            'jenis_kelamin' => $jenis_kelamin,
            'pendidikan' => $pendidikan,
            'pekerjaan' => $pekerjaan,
            'telepon' => $telepon,
            'status' => $status,
            'sektor' => $sektor,
            'rayon' => $rayon
        );

        $tanggal = array(
            'id_jemaat' => $id_jemaat,
            'id_keluarga' => $id_anggota,
            'tanggal_lahir' => $tanggal_lahir,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_baptis' => $tanggal_baptis,
            'tempat_baptis' => $tempat_baptis,
            'tanggal_sidi' => $tanggal_sidi,
            'tempat_sidi' => $tempat_sidi,
            'tanggal_nikah' => $tanggal_menikah,
            'tempat_nikah' => $tempat_menikah,
            'tanggal_pindah' => $tanggal_pindah,
            'tempat_pindah' => $tempat_pindah,
            'tanggal_meninggal' => $tanggal_meninggal,
            'tempat_meninggal' => $tempat_meninggal
        );

        $this->modeljemaat->update_data('jemaat', $jemaat,$where);

        $this->modeljemaat->update_data('tanggaldantempat', $tanggal,$where2);

        redirect('jemaat');
    }

    public function hapus_anggota($id)
    {
        $where = array('id' => $id);
        $this->modeljemaat->delete_data($where, 'jemaat');
        redirect('jemaat');
    }
}

?>