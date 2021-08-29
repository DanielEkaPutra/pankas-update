<?php

    class ModelJemaat extends CI_Model {

        public function lihatData(){
            $sql = "SELECT jemaat.id_jemaat , jemaat.nama_depan, sektor.nama FROM jemaat
                    LEFT JOIN sektor ON jemaat.sektor = sektor.id
                    WHERE jemaat.status = 1";
            return $this->db->query($sql)->result();
            
        }

    }

?>