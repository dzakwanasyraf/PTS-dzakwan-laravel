@extends('layouts.index')

@section('content')
    

    <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3><br>
                <a href="addKaryawan"><button class="btn btn-default">Add Data</button></a>
                <a href="Karyawan/export/xlsx"><button class="btn btn-default">XLSX</button></a>
                <a href="Karyawan/export/csv"><button class="btn btn-default">CSV</button></a>
                <a href="Karyawan/export/pdf"><button class="btn btn-default">PDF</button></a>
                <a href="upload"><button class="btn btn-default float-right">Upload Data</button></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama Karyawan</th>
                    <th>Hadir </th>
                    <th>Izin</th>
                    <th>Bolos</th>
                    <th>Telat</th>
                    <th>keterangan</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{$item->namaKaryawan}}</td>
                            <td>{{$item->hadirMasuk}}
                            </td>
                            <td>{{$item->izinMasuk}}</td>
                            <td>{{$item->bolosMasuk}}</td>
                            <td>{{$item->telatMasuk}}</td>
                            <td>{{$item->bolosMasuk + $item->telatMasuk < 3 ? "karyawan terbaik" : 
                                    ( $item->bolosMasuk + $item->telatMasuk > 7 ? "karyawan terburuk" :
                                    ( $item->hadirMasuk < 60 ? "karyawan terburuk" : 
                                    ""))
                                }}
                            </td>
                            <td>
                                <a href="editKaryawan\{{$item->id}}"><button class="btn-primary btn">edit</button></a>
                                <a href="deleteKaryawan\{{$item->id}}"><button class="btn-danger btn">delete</button></a>
                            </td>
                        </tr>   
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
@endsection