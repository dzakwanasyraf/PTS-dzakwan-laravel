@extends('layouts.index')

@section('content')

    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="saveKaryawan" method="POST">
                  {{-- PENTING!! --}}
                  @csrf
                <div class="card-body">
                    {{-- nama murid --}}
                  <div class="form-group">
                    <label for="namaKaryawan">Nama Karyawan</label>
                    <input type="text" class="form-control" id="namaKaryawan" placeholder="Enter Name" name="namaKaryawan">
                  </div>

                  <div class="form-group">
                    <label for="hadirMasuk">Hadir</label>
                    <input type="number" max="100" class="form-control" id="hadirMasuk" placeholder="Enter Nilai" name="hadirMasuk">
                  </div>
                  {{-- nilai tugas --}}
                  <div class="form-group">
                    <label for="izinMasuk">Izin</label>
                    <input type="number" max="100" class="form-control" id="izinMasuk" placeholder="Enter Nilai" name="izinMasuk">
                  </div>
                  {{-- nilai pts --}}
                  <div class="form-group">
                    <label for="bolosMasuk">Bolos</label>
                    <input type="number" max="100" class="form-control" id="bolosMasuk" placeholder="Enter Nilai" name="bolosMasuk">
                  </div>
                  {{-- nilai uas --}}
                  <div class="form-group">
                    <label for="telatMasuk">Telat</label>
                    <input type="number" max="100" class="form-control" id="telatMasuk" placeholder="Enter Nilai" name="telatMasuk">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>

@endsection