<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Upload extends BaseController
{
    public function index()
    {
        if ($this->request->getMethod() == 'post') {
            // disini kita lakukan proses upload

            $database = \COnfig\Database::connect();
            $gambar = $database->table('gambar');

            $pesan = 'Silahkan pilih file yang akan anda upload';
            foreach($this->request->getFileMultiple('gambar') as $file) {
                if ($file->isValid()) {
                    $file->move(WRITEPATH . 'uploads');

                    $data = [
                        'nama_file' => $file->getClientName(),
                        'tipe_file' => $file->getClientMimeType(),
                    ];

                    $gambar->insert($data);
                    $pesan = 'File berhasil disimpan';
                }
            }

            return redirect()->back()->with('pesan', $pesan);

        } else {
            return view('upload');
        }

    }
}
