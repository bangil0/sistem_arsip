<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_admin extends CI_Model {

        public function get_chart1(){
            // $sql ="SELECT count(tgl_kegiatan) as total, MONTH(tgl_kegiatan) AS bulan FROM arsip GROUP BY bulan";
            // $result = mysql_query($sql);
            // return $result;

            // $con = mysql_connect("localhost", "root", "") or  
            // die("Could not connect: " . mysql_error());  
            // mysql_select_db("simsip");  
            // $result = mysql_query("SELECT count(tgl_kegiatan) as total, MONTH(tgl_kegiatan) AS bulan FROM arsip GROUP BY bulan");  
            // echo "<h2>Here is a list of the topics:</h2>";  
            // while ($row = mysql_fetch_array($result)) {  
            //     echo $row['name']."<br />";  
            // }  
            $this->db->select('count(tgl_kegiatan) as total, MONTH(tgl_kegiatan) AS bulan');
            $this->db->from('arsip');
            $this->db->group_by("bulan");
            // $this->db->where('userNama', $username);
            $query = $this->db->get();
            
            return $query->row();

        }
        
        public function get_admin($username){
        $this->db->select('*');
		$this->db->from('iuser');
		$this->db->where('userNama', $username);
		$query = $this->db->get();
		
		return $query->row();
        }
        
        public function update_admin($id,$data){
            $this->db->where('userId',$id);
            $update = $this->db->update('iuser',$data);
            return $update;
        }
}
