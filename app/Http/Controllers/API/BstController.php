<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bst;

class BstController extends Controller
{
    //
    public function read(Request $request) {
        $data_out = Bst::get();
        $response = array(
            'msg' => "Sukses ambil data",
            'status' => true,
            'bst' => $data_out
        );
        return response()->json($response);
    }

    public function input(Request $request) {
        $data_in = Bst::updateOrCreate(
            array(
                'id' => $request->input('id')
            ), array(
                'KDPROPKDKAB' => $request->input('KDPROPKDKAB'),
                'KDPROP' => $request->input('KDPROP'),
                'KDKAB' => $request->input('KDKAB'),
                'KDKEC' => $request->input('KDKEC'),
                'KDDESA' => $request->input('KDDESA'),
                'NAMA_PROVINSI' => $request->input('NAMA_PROVINSI'),
                'NAMA_KABKOTA' => $request->input('NAMA_KABKOTA'),
                'NAMA_KECAMATAN' => $request->input('NAMA_KECAMATAN'),
                'NAMA_DESA' => $request->input('NAMA_DESA'),
                'ALAMAT_LENGKAP' => $request->input('ALAMAT_LENGKAP'),
                'ALAMAT_CAPIL' => $request->input('ALAMAT_CAPIL'),
                'ID_DTKS' => $request->input('ID_DTKS'),
                'ID_KELUARGA' => $request->input('ID_KELUARGA'),
                'ID_ART' => $request->input('ID_ART'),
                'NIK' => $request->input('NIK'),
                'NAMA' => $request->input('NAMA'),
                'HASIL' => $request->input('HASIL'),
                'start_time' => $request->input('start_time'),
                'end_time' => $request->input('end_time'),
                'status_usulan' => $request->input('status_usulan'),
                'status_data' => $request->input('status_data'),
                'WIL' => $request->input('WIL'),
                'MITRA' => $request->input('MITRA'),
                'NOREKENING' => $request->input('NOREKENING'),
                'FLAG' => $request->input('FLAG'),
                'FLAG_PENYALURAN' => $request->input('FLAG_PENYALURAN'),
                'FLAG_PKH_PERLUASAN' => $request->input('FLAG_PKH_PERLUASAN'),
                'NOPESERTA_PKH_SEP' => $request->input('NOPESERTA_PKH_SEP'),
                'NOREKENING_PKH_SEP' => $request->input('NOREKENING_PKH_SEP'),
                'FLAG_MB9' => $request->input('FLAG_MB9'),
            ));

        if ($data_in->save()) {
            $msg = array(
                'msg' => "Berhasil input data",
                'status' => true
            );
        } else {
            $msg = array(
                'msg' => "Gagal input data",
                'status' => false
            );
        }
        return response()->json($msg);
    }

    public function delete(Request $request, $id) {
        $data_del = Bst::find($id);
        if ($data_del !== null) {
            if ($data_del->delete()) {
                $msg = array(
                    'msg' => "Data yang ingin dihapus berhasil dihapus",
                    'status' => true
                );
            } else {
                $msg = array(
                    'msg' => "Data yang ingin dihaps gagal dihapus",
                    'status' => true
                );
            }
        } else {
            $msg = array(
                'msg' => "Data yang ingin dihaps tidak ditemukan",
                'status' => false
            );
        } 
        return response()->json($msg);
    }
}
