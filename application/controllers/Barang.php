<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        cek_login();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('Base_model', 'base');
    }

    public function index()
    {
        $data = [
            'title'       => 'Data Barang',
        ];
        $this->template->load('template', 'barang/data', $data);
    }

    public function add()
    {
        $data = [
            'title'       => 'Tambah Data Barang',
        ];
        $this->template->load('template', 'barang/add', $data);
    }

    public function add_action()
    {
        $post = $this->input->post(null, true);

        $kode = $this->base->createCode();

        $config['upload_path']          = './assets/uploads/barang/';
        $config['allowed_types']        = 'jpg|jpeg|png|gif|';
        $config['max_height']           = 10000;
        $config['file_name']            = 'barang-' . date('ymd') . '-' . $kode;

        $this->load->library('upload', $config);

        if (@$_FILES['gambarFile']['name'] != null) {
            if ($this->upload->do_upload('gambarFile')) {
                $params = [
                    'kode'          => $kode,
                    'nama_barang'   => $post['nama_barang'],
                    'merk'          => $post['merk'],
                    'stok'          => $post['stok'],
                    'kategori'      => $post['kategori'],
                    'tgl_masuk'     => $post['tgl_masuk'],
                    'spesifikasi'   => $post['spesifikasi'],
                    'foto'          => $post['foto']
                ];

                $this->base->add('barang', $params);

                if ($this->db->affected_rows() > 0) {
                    set_pesan('Data berhasil ditambahkan');
                } else {
                    set_pesan('Terjadi kesalahan', FALSE);
                }
            } else {
                echo 'error';
            }
        } else {
            echo 'error';
        }



        redirect('barang');
    }
}
