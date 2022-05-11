@extends('layout.admin-layout')

@section('konten')
    <div class="container-fluid primary-color py-3 h-100 rounded-top">
        <div class="row align-items-center">
            <div class="col-md">
                <h5 style="margin-bottom: 0px;" class="text-light d-flex align-self-center text-uppercase fw-bold">
                    Daftar Peserta - SMAN 1 SIDOARJO
                </h5>
            </div>
            <div class="col-md d-flex justify-content-end">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn accent-second-color text-light text-uppercase">New Record</button>
                    <button type="button" class="btn accent-second-color text-light text-uppercase">Quick Action</button>
                </div>
            </div>
        </div>
        
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col"><input type="checkbox"></th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">MIS</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Tempat Lahir</th>
            <th scope="col" class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($participants as $item)    
                <tr>
                <th scope="row"> <input type="checkbox"> </th>
                <td>{{$item->nama}}</td>
                <td>{{$item->mis}}</td>
                <td>{{$item->tanggal_lahir}}</td>
                <td>{{$item->tempat_lahir}}</td>
                <td class="text-center"><i class="bi bi-three-dots"></i></td>
                </tr>
            @endforeach
        </tbody>
      </table>
@endsection
