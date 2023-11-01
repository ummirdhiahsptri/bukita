<?php
class About extends Controller
{

    public function __construct()
    {
        if ($_SESSION['session_login'] != 'sudah_login') {
            Flasher::setMessage('Login', 'Tidak ditemukan.', 'danger');
            header('location: ' . base_url . '/login');
            exit;
        }
    }

    public function index()
    {
        $data['title'] = 'Halaman About me';
        $data['nama'] = 'UmmiRodhiahS';
        $data['alamat'] = 'Banjarmasin';
        $data['no_hp'] = '085651675423';

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
}
