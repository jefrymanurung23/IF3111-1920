<?php
    class Post_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function get_posts($id = FALSE){
            if($id === FALSE){
                $query = $this->db->get('posts');
                return $query->result_array();
            }

            $query = $this->db->get_where('posts', array('id' => $id));
            return $query->row_array();
        }

        public function input_laporan($table, $data){
            $this->db->insert($table, $data);
        }

        public function hapus_data($deleted_row, $table)
        {
            $this->db->where($deleted_row);
            $this->db->delete($table);
        }
    }
?>