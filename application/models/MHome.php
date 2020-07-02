<?php    
class MHome extends CI_Model {
	function index(){
        return $this->db->get('produk')->result_array();
    }

    public function hapus($id){
        return $this->db->delete('produk', array('id' =>  $id));
    }

    public function ubah($where)
    {   
        return $this->db->get_where('produk', array('id' => $where))->row_array();
    }

    public function proses_ubah($id)
    {
        $data = array(
            'nama' => $this->input->post("namaProduk"),
            'keterangan' => $this->input->post("ketProduk"),
            'harga' => $this->input->post("hargaProduk"),
            'keterangan' => $this->input->post("jumlahPRoduk")
        );
        $this->db->where('id', $id);
        $this->db->update('produk', $data);
    }

    public function tambah()
    {
        $data = array(
            'nama' => $this->input->post("namaProduk"),
            'keterangan' => $this->input->post("ketProduk"),
            'harga' => $this->input->post("hargaProduk"),
            'keterangan' => $this->input->post("jumlahPRoduk")
        );
        $this->db->insert('produk', $data);
        
    }
}
	