<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participants;


class ParticipantsController extends Controller
{
    //
    public function index()
    {
        return view('admin.input-participants', [
            'title' => 'Input Data'
        ]);
    }

    public function store(Request $request)
    {
        $mis = $request->input('inputMis');
        $nama = $request->input('inputNama');
        $tempatLahir = $request->input('inputTempatLahir');
        $tanggal = $request->input('inputTanggal');
        $jenis_kelamin = $request->jenisKelamin;
        $golDarah = $request->golDarah;
        $agama = $request->agama;
        $noDarurat = $request->input('inputNoDarurat');
        $noTelp = $request->input('noTelp');
        $kelas = $request->input('kelas');
        $tingkat = $request->input('tingkat');
        $suratDokter = $request->file('suratDokter')->getClientOriginalName();
        $suratOrtu = $request->file('suratOrtu')->getClientOriginalName();
        $foto = $request->file('foto')->getClientOriginalName();

        $request->file('suratDokter')->storeAs('public/surat-dokter', $suratDokter);
        $request->file('suratOrtu')->storeAs('public/surat-ortu', $suratOrtu);
        $request->file('foto')->storeAs('public/foto', $foto);

        $tglLahir = strtotime($tanggal);

        $participant = new Participants();
        $participant->mis = $mis;
        $participant->nama = $nama;
        $participant->tempat_lahir = $tempatLahir;
        $participant->tanggal_lahir = date('Y-m-d', $tglLahir);
        $participant->jenis_kelamin = $jenis_kelamin;
        $participant->gol_darah = $golDarah;
        $participant->agama = $agama;
        $participant->no_telp = $noTelp;
        $participant->no_darurat = $noDarurat;
        $participant->kelas = $kelas;
        $participant->tingkat = $tingkat;
        $participant->surat_dokter = $suratDokter;
        $participant->surat_ijin_ortu = $suratOrtu;
        $participant->foto = $foto;
        $participant->asal_sekolah = auth()->user()->utusan_sekolah;
        $participant->save();
        return redirect('/inputData');

    }
}
