@extends('layout.master')
@section('title', 'Dosen')
@section('content')

    <!--Jumbotron-->

    <section class="jumbotron text-center">
        <div class="container">
          <h1 class="display-8">DOSEN</h1>
          <p class="lead">Halaman ini menampilkan data Dosen</p>
        </div>
      </section>
    <!--Jumbotron-->

    <div class="container">
    <div class="row justify-content-center my-3">
      <div class="col-10">
        <a href="/dosen/create" class="btn text-white float-end" style="background-color: #640101">Tambah</a>
      </div>
    </div>
        <div class="row justify-content-center">
            <div class="col-12">
              <div class="card">
                <div class="card-body">

                <table class="table">
                    <thead class="table-light">
                      <tr>
                          <th scope="col">NIDN</th>
                        <th scope="col">Nama Dosen</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Tempat Lahir</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $dosen)
                      <tr>
                        <td>{{ $dosen->nidn }}</td>
                        <td>{{ $dosen->nama }}</td>
                        <td>{{ $dosen->jenis_kelamin }}</td>
                        <td>{{ $dosen->alamat }}</td>
                        <td>{{ $dosen->tempat_lahir }}</td>
                        <td>{{ $dosen->tanggal_lahir }}</td>
                        <td>{{ $dosen->photo }}</td>
                        <td>
                          <a href="dosendelete/{{$dosen->id}}" class="btn text-white float-end" style="background-color: #640101">Hapus</a>
                        </td>
                        <td>
                          <a href="dosenEdit/{{$dosen->id}}" class="btn text-white float-end" style="background-color: #640101">Edit</a>
                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>
    </div>

@endsection
