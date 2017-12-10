<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		        $this->load->library('dompdf_gen');
		$this->load->model('Transaksi_model');
		if($this->session->userdata('logged_in') == false){
			redirect('welcome');
		}
	}

	public function index(){
		$data = array(
			'title'			=> 'Transaksi',
			'primary_view'	=> 'transaksi/transaksi_view',
			'total'			=> $this->Transaksi_model->getTotal(),
			'pmnList'		=> $this->Transaksi_model->getPeminjaman(),
			'pmbList'		=> $this->Transaksi_model->getPengembalian()
		);
		$this->load->view('template_view', $data);
	}
	 public function cetakpinjam(){
        $data['title'] = 'Cetak PDF Barang'; //judul title
        $data['pinjam'] = $this->Transaksi_model->getPeminjaman(); //query model semua barang
 
        $this->load->view('transaksi/cetak_pinjam', $data);
 
        $paper_size  = 'A4'; //paper size
        $orientation = 'landscape'; //tipe format kertas
        $html = $this->output->get_output();
 
        $this->dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan.pdf", array('Attachment'=>0));
    }
     public function cetakkembali(){
        $data['title'] = 'Cetak PDF Barang'; //judul title
        $data['kembali'] =  $this->Transaksi_model->getPengembalian(); //query model semua barang
 
        $this->load->view('transaksi/cetak_kembali', $data);
 
        $paper_size  = 'A4'; //paper size
        $orientation = 'landscape'; //tipe format kertas
        $html = $this->output->get_output();
 
        $this->dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan.pdf", array('Attachment'=>0));
    }

}

/* End of file Transaksi.php */
/* Location: ./application/controllers/Transaksi.php */