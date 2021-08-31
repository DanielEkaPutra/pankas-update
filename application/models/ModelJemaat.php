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

    }

?>