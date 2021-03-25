@extends('layouts.index')

@section('content')
    <div class="row">
        <div class="col-12 bg-white">
            <div class="card">
                <div class="card-header bg-primary">
                    <a href="home">
                        <button class="btn btn-success float-left mr-2">
                            Back
                        </button>
                    </a>
                </div>
                <div class="card-body">
                    <form action="karyawan/upload/data" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="uploadData">Upload File</label>
                            <input type="file" name="file" class="form-control">
                        </div>
                        <input type="submit" value="SimpanData" class="btn btn-primary float-right">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection