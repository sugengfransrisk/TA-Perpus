<?php
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	    public function __construct() {
        parent::__construct();
        $this->load->model('mlaporan');
        $this->load->library('dompdf_gen');
    }
 
    public function index()
    {
        $data['title'] = 'Lapor gan'; //judul title
        $data['qbarang'] = $this->mlaporan->getAllItem(); //query model semua barang
        $this->load->view('vlaporan',$data);
    }
 
    // fungsi cetak pdf
   
}

}

/* End of file laporan.php */
/* Location: ./application/controllers/laporan.php */