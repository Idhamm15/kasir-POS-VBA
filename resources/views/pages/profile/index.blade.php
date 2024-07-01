@extends('layouts.app')

@section('content')


    <div class="container">
        <form action="" method="POST" enctype="multipart/form-data">
            {{-- @csrf --}}
            <div class="mb-3">
                <label for="description2" class="form-label">fullname</label>
                <input type="text" class="form-control" id="description2" name="description2"></input>
            </div>  
            <div class="mb-3">
                <label for="name" class="form-label">Email</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="description3" class="form-label">New Password</label>
                <input type="text" class="form-control" id="description3" name="description3"></input>
            </div>
            <div class="mb-3">
                <label for="description3" class="form-label">Konfirmasi Password</label>
                <input type="text" class="form-control" id="description3" name="description3"></input>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
        </form>
    </div>

@endsection
