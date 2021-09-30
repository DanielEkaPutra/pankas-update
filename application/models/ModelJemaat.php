<?php
defined('BASEPATH') or exit('No direct script access allowed');

    class ModelJemaat extends CI_Model {

        // Get All Data
        public function lihatData(){
            $sql = "SELECT jemaat.id_jemaat , jemaat.nama_depan, jemaat.nama_belakang, sektor.nama FROM jemaat
                    LEFT JOIN sektor ON jemaat.sektor = sektor.id_sektor
                    WHERE jemaat.status = 1";
            return $this->db->query($sql)->result();
            
        }

        // Get Data Per Page
        public function getJemaat($limit, $start, $sektor, $rayon){
            if($start == null){
                $start = 0;
            }
                $page = "SELECT jemaat.id_jemaat , jemaat.nama_depan, jemaat.nama_belakang, sektor.nama FROM jemaat
                LEFT JOIN sektor ON jemaat.sektor = sektor.id_sektor
                WHERE jemaat.status = 1
                AND jemaat.sektor = '$sektor'
                AND jemaat.rayon = '$rayon'
                LIMIT $start, $limit";
                return $this->db->query($page)->result();  
            
        }
      

        public function hitungJemaat(){
            return $this->db->get_where('jemaat', array('status' => '1'))->num_rows();
        }

        public function editJemaat($id){
            $page = "SELECT jemaat.id, jemaat.id_jemaat, jemaat.status, jemaat.id_anggota , jemaat.nama_depan, jemaat.nama_belakang, jemaat.rayon, jemaat.telepon, sektor.nama, alamatjemaat.alamat, alamatjemaat.rt, alamatjemaat.rw, alamatjemaat.kelurahan, alamatjemaat.kecamatan, alamatjemaat.kota, alamatjemaat.provinsi FROM jemaat
            LEFT JOIN sektor ON jemaat.sektor = sektor.id_sektor
            LEFT JOIN alamatjemaat ON jemaat.id_jemaat = alamatjemaat.id_jemaat
            WHERE jemaat.id_jemaat=$id";
            return $this->db->query($page)->result();
        }

        public function editForm($id){
            $this->db->select('*');
            $this->db->from('jemaat');
            $this->db->join('sektor', 'jemaat.sektor = sektor.id_sektor');
            $this->db->join('tanggaldantempat', 'jemaat.id = tanggaldantempat.id_tanggal');
            $this->db->join('alamatjemaat', 'jemaat.id_jemaat = alamatjemaat.id_jemaat');
            $this->db->where('jemaat.id', $id);
            return $query = $this->db->get()->row();
        }

        public function insert_data($data,$table){
            return $this->db->insert($table,$data);
        }

        public function tambahAnggota($id){
            $this->db->select('*');
            $this->db->from('jemaat');
            $this->db->where('jemaat.id_jemaat',$id);
            return $query = $this->db->get()->row();
        }

        public function update_data(her$table,$data,$we)
        {
            return $this->db->update($table,$data,$where);
        }

        public function delete_data($where,$table)
        {
            $this->db->where($where);
            $this->db->delete($table);
        }

    }

?>
