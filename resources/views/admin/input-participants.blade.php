@extends('layout.admin-layout')

@section('konten')
    <div class="container-fluid primary-color py-3 h-100 rounded-top">
        <h5 style="margin-bottom: 0px;" class="text-light d-flex align-self-center text-uppercase fw-bold">
            Input Peserta - {{ auth()->user()->utusan_sekolah }}
        </h5>
    </div>
    <div class="container px-5 py-3">
        <form action="/submit" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="inputMis" class="form-label">MIS</label>
                <input type="text" class="form-control" id="inputMis" name="inputMis">
            </div>
            <div class="mb-3">
                <label for="inputNama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="inputNama" name="inputNama">
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="mb-3">
                        <label for="inputTempatLahir" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="inputTempatLahir" name="inputTempatLahir">
                    </div>
                </div>
                <div class="col-md">
                    <div class="mb-3">
                        <label for="inputTanggal" class="form-label">Tanggal Lahir</label>
                        <input type="text" class="form-control datepicker" id="inputTanggal" name="inputTanggal">
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="noTelp" class="form-label">No. Telepon</label>
                <input type="text" class="form-control" id="noTelp" name="noTelp">
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="inputJenisKelamin" class="form-label">Jenis Kelamin</label>
                        <select class="form-select" aria-label="Default select example" name="jenisKelamin">
                            <option selected>-- Pilih Jenis Kelamin --</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="inputGolDarah" class="form-label">Golongan Darag</label>
                        <select class="form-select" aria-label="Default select example" name="golDarah">
                            <option selected>-- Pilih Golongan Darah --</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="O">O</option>
                            <option value="AB">AB</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="inputAgama" class="form-label">Agama</label>
                        <select class="form-select" aria-label="Default select example" name="agama">
                            <option selected>-- Pilih Agama --</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="inputNoDarurat" class="form-label">No. Darurat</label>
                <input type="text" class="form-control" id="inputNoDarurat" name="inputNoDarurat">
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <input type="text" class="form-control" id="kelas" name="kelas">
                    </div>
                </div>
                <div class="col-md">
                    <div class="mb-3">
                        <label for="tingkat" class="form-label">Tingkat</label>
                        <input type="text" class="form-control" id="tingkat" name="tingkat">
                    </div>
                </div>
            </div>
            <div class="input-group mb-4">
                <label class="input-group-text" for="inputGroupFile01">Surat Dokter</label>
                <input type="file" class="form-control" name="suratDokter">
            </div>
            <div class="input-group mb-4">
                <label class="input-group-text" for="inputGroupFile01">Surat Ijin Ortu</label>
                <input type="file" class="form-control" name="suratOrtu">
            </div>
            <div class="input-group mb-4">
                <label class="input-group-text" for="inputGroupFile01">Foto 3x4</label>
                <input type="file" class="form-control" name="foto">
            </div>
            <button type="submit" class="btn btn-primary mr-auto">Submit</button>
        </form>
    </div>
@endsection
