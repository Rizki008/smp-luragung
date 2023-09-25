<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->library('Pdf'); // MEMANGGIL LIBRARY YANG KITA BUAT TADI
		$this->load->model('m_penerimaan');
		$this->load->model('m_chatting');
	}

	// List all your items
	public function index()
	{
		$data = array(
			'title' => 'Data Hasil Kelulusan',
			'isi' => 'backend/laporan/v_laporan'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}

	// Add a new item
	public function cetak_jalur()
	{
		$jalur = $this->input->post('jalur');
		$tahun = $this->input->post('tahun');
		error_reporting(0); // AGAR ERROR MASALAH VERSI PHP TIDAK MUNCUL
		$pdf = new FPDF('L', 'mm', 'Letter');
		$pdf->AddPage();
		$pdf->SetFont('Arial', 'B', 16);
		$pdf->Cell(0, 7, 'HASIL PENDAFTARAN SISWA', 0, 1, 'C');
		$pdf->SetFont('Arial', 'I', 12);
		$pdf->Cell(0, 7, 'SMP 2 LURAGUNG, KUNINGAN', 0, 1, 'C');
		$pdf->Cell(10, 7, '', 0, 1);
		$pdf->SetFont('Arial', 'B', 10);
		$pdf->Cell(10, 6, 'No', 1, 0, 'C');
		$pdf->Cell(40, 6, 'Nama Siswa', 1, 0, 'C');
		$pdf->Cell(35, 6, 'NISN Siswa', 1, 0, 'C');
		$pdf->Cell(30, 6, 'Asal Sekolah', 1, 0, 'C');
		// $pdf->Cell(60, 6, 'Alamat', 1, 0, 'C');
		$pdf->Cell(40, 6, 'Jalur Pendaftaran', 1, 0, 'C');
		$pdf->Cell(40, 6, 'Status Kelulusan', 1, 0, 'C');
		$pdf->Cell(60, 6, 'Alasan Tidak Lulus', 1, 1, 'C');
		$pdf->SetFont('Arial', '', 10);
		$laporan = $this->m_penerimaan->hasil_jalur($tahun, $jalur);
		// echo $this->db->last_query();
		// die();
		$no = 0;
		foreach ($laporan as $data) {
			$no++;
			$pdf->Cell(10, 6, $no, 1, 0, 'C');
			$pdf->Cell(40, 6, $data->nama_siswa, 1, 0);
			$pdf->Cell(35, 6, $data->nisn, 1, 0);
			$pdf->Cell(30, 6, $data->asal_sekolah, 1, 0);
			// $pdf->Cell(60, 6, $data->lingkungan, 1, 0);
			$pdf->Cell(40, 6, $data->jalur, 1, 0);
			$pdf->Cell(40, 6, $data->hasil, 1, 0);
			$pdf->Cell(60, 6, $data->alasan_lulus, 1, 1);
		}
		$pdf->Output();
	}


	// Add a new item
	public function cetak_asal_sekolah()
	{
		$asal_sekolah = $this->input->post('asal_sekolah');
		error_reporting(0); // AGAR ERROR MASALAH VERSI PHP TIDAK MUNCUL
		$pdf = new FPDF('L', 'mm', 'Letter');
		$pdf->AddPage();
		$pdf->SetFont('Arial', 'B', 16);
		$pdf->Cell(0, 7, 'HASIL PENDAFTARAN SISWA', 0, 1, 'C');
		$pdf->SetFont('Arial', 'I', 12);
		$pdf->Cell(0, 7, 'SMP 2 LURAGUNG, KUNINGAN', 0, 1, 'C');
		$pdf->Cell(10, 7, '', 0, 1);
		$pdf->SetFont('Arial', 'B', 10);
		$pdf->Cell(10, 6, 'No', 1, 0, 'C');
		$pdf->Cell(40, 6, 'Nama Siswa', 1, 0, 'C');
		$pdf->Cell(35, 6, 'NISN Siswa', 1, 0, 'C');
		$pdf->Cell(30, 6, 'Asal Sekolah', 1, 0, 'C');
		// $pdf->Cell(60, 6, 'Alamat', 1, 0, 'C');
		$pdf->Cell(40, 6, 'Jalur Pendaftaran', 1, 0, 'C');
		$pdf->Cell(40, 6, 'Status Kelulusan', 1, 0, 'C');
		$pdf->Cell(60, 6, 'Alasan Tidak Lulus', 1, 1, 'C');
		$pdf->SetFont('Arial', '', 10);
		$laporan = $this->m_penerimaan->asal_sekolah($asal_sekolah);
		// echo $this->db->last_query();
		// die();
		$no = 0;
		foreach ($laporan as $data) {
			$no++;
			$pdf->Cell(10, 6, $no, 1, 0, 'C');
			$pdf->Cell(40, 6, $data->nama_siswa, 1, 0);
			$pdf->Cell(35, 6, $data->nisn, 1, 0);
			$pdf->Cell(30, 6, $data->asal_sekolah, 1, 0);
			// $pdf->Cell(60, 6, $data->lingkungan, 1, 0);
			$pdf->Cell(40, 6, $data->jalur, 1, 0);
			$pdf->Cell(40, 6, $data->hasil, 1, 0);
			$pdf->Cell(60, 6, $data->alasan_lulus, 1, 1);
		}
		$pdf->Output();
	}
}

/* End of file Laporan.php */
