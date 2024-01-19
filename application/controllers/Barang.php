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
            'title'         => 'Data Barang',
            'barang'        => $this->base->get('barang')->result_array()
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
        require 'vendor/autoload.php';

        $post = $this->input->post(null, true);

        $kode = $this->base->createCode();

        $config['upload_path']          = './assets/uploads/barang/';
        $config['allowed_types']        = 'jpg|jpeg|png|gif|';
        $config['max_height']           = 10000;
        $config['file_name']            = 'barang-' . date('ymd') . '-' . $kode;

        $this->load->library('upload', $config);

        if (@$_FILES['gambarFile']['name'] != null) {
            if ($this->upload->do_upload('gambarFile')) {
                $post['gambarFile'] = $this->upload->data('file_name');
				$this->load->library('ciqrcode');

				//create QRCODE
				$config['cacheable']    		= true;
				$config['cachedir']             = './assets/';
				$config['errorlog']             = './assets/';
				$config['imagedir']             = './assets/uploads/qrcode/';
				$config['quality']              = true;
				$config['size']                 = '1024';
				$config['black']                = array(224,255,255);
				$config['white']                = array(70,130,180);
				$this->ciqrcode->initialize($config);

				$qrCode= $kode . ' - ' . $post['nama_barang'] . '.png';

				$params['data'] = $kode;
				$params['level'] = 'H';
				$params['size'] = 10;
				$params['savename'] = FCPATH.$config['imagedir'].$qrCode;
				$this->ciqrcode->generate($params);

                $params = [
                    'kode_barang'   => $kode,
                    'qr_code'       => $qrCode,
                    'nama_barang'   => $post['nama_barang'],
                    'stok'          => $post['stok'],
                    'kategori'      => $post['kategori'],
                    'tgl_masuk'     => $post['tgl_masuk'],
                    'spesifikasi'   => $post['spesifikasi'],
                    'foto'          => $post['gambarFile'],
                    'status'        => 0
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
