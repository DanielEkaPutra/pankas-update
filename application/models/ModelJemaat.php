<?php

    class ModelJemaat extends CI_Model {

        // Get All Data
        public function lihatData(){
            $sql = "SELECT jemaat.id_jemaat , jemaat.nama_depan, jemaat.nama_belakang, sektor.nama FROM jemaat
                    LEFT JOIN sektor ON jemaat.sektor = sektor.id
                    WHERE jemaat.status = 1";
            return $this->db->query($sql)->result();
            
        }

        // Get Data Per Page
        public function getJemaat($limit, $start, $keyword = null){
            if($start == null){
                $start = 0;
            }
            if($keyword){
                $page = "SELECT jemaat.id_jemaat , jemaat.nama_depan, jemaat.nama_belakang, sektor.nama FROM jemaat
                LEFT JOIN sektor ON jemaat.sektor = sektor.id
                WHERE jemaat.status = 1
                AND jemaat.nama_depan LIKE '$keyword%'
                OR jemaat.nama_belakang LIKE '$keyword%'
                LIMIT $start, $limit";
                return $this->db->query($page)->result();
            } else {
                $page = "SELECT jemaat.id_jemaat , jemaat.nama_depan, jemaat.nama_belakang, sektor.nama FROM jemaat
                LEFT JOIN sektor ON jemaat.sektor = sektor.id
                WHERE jemaat.status = 1
                LIMIT $start, $limit";
                return $this->db->query($page)->result();
            }
            
        }

        public function hitungJemaat(){
            return $this->db->get_where('jemaat', array('status' => '1'))->num_rows();
        }

        public function editJemaat($id){
            $page = "SELECT jemaat.id, jemaat.id_jemaat, jemaat.id_anggota , jemaat.nama_depan, jemaat.nama_belakang, sektor.nama FROM jemaat
            LEFT JOIN sektor ON jemaat.sektor = sektor.id
            WHERE jemaat.id_jemaat=$id";
            return $this->db->query($page)->result();
        }

        public function editForm($id){
            // $page = "SELECT * FROM jemaat
            // LEFT JOIN sektor ON jemaat.sektor = sektor.id
            // LEFT JOIN tanggaldantempat ON jemaat.id = tanggaldantempat.id
            // LEFT JOIN alamatjemaat ON jemaat.id_jemaat = alamatjemaat.id_jemaat
            // WHERE jemaat.id=$id";
            $this->db->select('*');
            $this->db->from('jemaat');
            $this->db->join('sektor', 'jemaat.sektor = sektor.id');
            $this->db->join('tanggaldantempat', 'jemaat.id = tanggaldantempat.id');
            $this->db->join('alamatjemaat', 'jemaat.id_jemaat = alamatjemaat.id_jemaat');
            $this->db->where('jemaat.id', $id);
            return $query = $this->db->get()->row();
            // return $this->db->query($page)->result();
        }

        public function insert_data($data,$table){
            return $this->db->insert($table,$data);
        }

    }

?>