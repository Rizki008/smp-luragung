<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class KirimEmail extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		require APPPATH . 'libraries/phpmailer/src/Exception.php';
		require APPPATH . 'libraries/phpmailer/src/PHPMailer.php';
		require APPPATH . 'libraries/phpmailer/src/SMTP.php';

		$this->load->model('m_chatting');
		$this->load->model('m_penerimaan');
	}

	public function index()
	{
		$data = array(
			'title' => 'Kirim pesan lulus',
			'isi' => 'form_email'
		);
		$this->load->view('backend/v_wrapper', $data);
	}


	public function send($id_siswa)
	{
		$this->m_penerimaan->detail_calon_siswa($id_siswa);
		// PHPMailer object
		$response = false;
		$mail = new PHPMailer();

		// SMTP configuration
		$mail->isSMTP();
		$mail->Host     = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'kr044401@gmail.com'; // user email anda
		$mail->Password = 'nwndyllwwmglssoq'; // diisi dengan App Password yang sudah di generate
		$mail->SMTPSecure = 'ssl';
		$mail->Port     = 465;

		$mail->setFrom('kr044401@gmail.com', 'SMP NEGERI 2 Luragung'); // user email anda
		$mail->addReplyTo('kr044401@gmail.com', ''); //user email anda

		// Email subject
		$mail->Subject = 'Informasi Penerimaan Siswa | SMP Negeri 2 Luragung.com'; //subject email

		// Add a recipient
		$mail->addAddress($this->input->post('email')); //email tujuan pengiriman email
		$mail->addAddress($this->input->post('email_orangtua')); //email tujuan pengiriman email

		// Set email format to HTML
		$mail->isHTML(true);

		// Email body content
		$mailContent = "<p>Hallo <b>" . $this->input->post('nama') . "</b> berikut ini adalah informasi terkait pendaftaran Anda:</p>
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>" . $this->input->post('nama') . "</td>
			</tr>
			<tr>
				<td>Status</td>
				<td>:</td>
				<td>" . $this->input->post('status') . "</td>
			</tr>
			<tr>
				<td>Alasan Lulus / Tidak Lulus</td>
				<td>:</td>
				<td>" . $this->input->post('alasan_lulus') . "</td>
			</tr>
		</table>
   		<p>Terimakasih <b>" . $this->input->post('nama') . "</b> telah mendaftar sebagai calon siswa baru di SMP NEGERI 2 Luragung.</p>"; // isi email
		$mail->Body = $mailContent;

		// Send email
		if (!$mail->send()) {
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
			echo 'Pesan Terkirim';
			redirect('penerimaan/diterima');
			// echo "<a href='http://localhost/smp-luragung/penerimaan' class='btn btn-success'>Kembali</a>";
		}
	}
}
