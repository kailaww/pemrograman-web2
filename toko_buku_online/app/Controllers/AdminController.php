<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public function index()
    {
        //
    }

    public function dashboard(){
        return view('admin/dashboard');
    }

    public function daftarbuku(){
        $bookModel = model('BookModel');
        $data['books'] = $bookModel->findAll();

        return view('admin/daftarbuku');
    }

    public function createBuku(){
        $data = $this->request->getPost();
        $fileCover = $this->request->getFile('cover');

        if(!$fileCover->hasMoved()){
            $path = $fileCover->store('images');
            $data['cover'] = $path;
        }

        $bookModel = model('bookModel');

        if($bookModel->insert($data, false)){
            return redirect()->to('admin/daftar-buku')->with('berhasil', 'data berhasil disimpan');
        }else{
            return redirect()->to('admin/daftar-buku')->with('error', 'data gagal disimpan');
        }
       
    }

    public function transaksi(){
        return view('admin/transaksi');
    }

    public function pelanggan(){
        return view('admin/pelanggan');
    }
}
