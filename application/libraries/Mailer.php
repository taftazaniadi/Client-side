<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Mailer
{
    protected $_ci;
    protected $email_pengirim = 'm.taftazani123@gmail.com'; // Isikan dengan email pengirim
    protected $nama_pengirim = 'Muhammad Taftazani Adi'; // Isikan dengan nama pengirim
    protected $password = 'poltergeist'; // Isikan dengan password email pengirim

    public function __construct()
    {
        $this->_ci = &get_instance(); // Set variabel _ci dengan Fungsi2-fungsi dari Codeigniter
        require_once(APPPATH . 'third_party/Exception.php');
        require_once(APPPATH . 'third_party/PHPMailer.php');
        require_once(APPPATH . 'third_party/SMTP.php');
    }

    public function send($data)
    {
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->Username = $this->email_pengirim; // Email Pengirim
        $mail->Password = 'vfmopfflcjuquvza'; // Isikan dengan Password email pengirim
        $mail->Port = 465;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        // $mail->SMTPDebug = 2; // Aktifkan untuk melakukan debugging
        $mail->setFrom($this->email_pengirim, $this->nama_pengirim);
        $mail->addAddress($data['email_penerima'], '');
        $mail->isHTML(true); // Aktifkan jika isi emailnya berupa html
        $mail->Subject = $data['subjek'];
        $mail->Body = $data['deskripsi'];
        $mail->AddEmbeddedImage('image/logo.png', 'logo', 'logo.png'); // Aktifkan jika ingin menampilkan gambar dalam email
        $send = $mail->send();
        if ($send) { // Jika Email berhasil dikirim
            $response = array('status' => 'Sukses', 'message' => 'Email berhasil dikirim');
        } else { // Jika Email Gagal dikirim
            $response = array('status' => 'Gagal', 'message' => 'Email gagal dikirim');
        }
        return $response;
    }

    public function send_with_attachment($data, $email)
    {
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->Username = $this->email_pengirim; // Email Pengirim
        $mail->Password = 'vfmopfflcjuquvza'; // Isikan dengan Password email pengirim
        $mail->Port = 465;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        // $mail->SMTPDebug = 2; // Aktifkan untuk melakukan debugging
        $mail->setFrom($this->email_pengirim, $this->nama_pengirim);
        $mail->addAddress($email, '');
        $mail->isHTML(true); // Aktifkan jika isi emailnya berupa html
        $mail->Subject = 'Pengajuan Peminjaman Inventaris AMCC';
        $mail->Body = $data['deskripsi'];
        $mail->AddEmbeddedImage('image/logo.png', 'logo', 'logo.png'); // Aktifkan jika ingin menampilkan gambar dalam email
        $mail->addAttachment($data['surat']);
        $send = $mail->send();
        if ($send) { // Jika Email berhasil dikirim
            $response = array('status' => 'Sukses', 'message' => 'Email berhasil dikirim');
        } else { // Jika Email Gagal dikirim
            $response = array('status' => 'Gagal', 'message' => 'Email gagal dikirim');
        }
        return $response;
    }
}
