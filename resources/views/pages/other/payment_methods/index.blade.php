@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">Payment Methods</h5>
            <a href="#" class="btn btn-primary" data-bs-target="#artikel1" data-bs-toggle="modal">New Payment Methods</a><br><br><br>
            <div class="table-responsive">
                <table class="table text-nowrap mb-0 align-middle">
                <thead class="text-dark fs-4">
                    <tr>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">No</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Name Payment</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Action</h6>
                    </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td class="border-bottom-0"><h6 class="fw-normal mb-0">1</h6></td>
                    <td class="border-bottom-0">
                        <h6 class="fw-normal mb-1">Cash</h6>                     
                    </td>
                    <td class="border-bottom-0">
                        <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-primary rounded-3 fw-semibold">Edit</span>
                        </div>
                    </td>
                    </tr>                   
                </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>
    </div>

    <!-- Modal Tambah Data -->
    <div class="modal fade" id="artikel1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
                <button style="border: none; width: 30px; height: 30px;" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    {{-- <span aria-hidden="true">&times;</span> --}}
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    {{-- @csrf --}}
                    <div class="mb-3">
                    <label for="image" class="form-label">Gambar</label>
                    <input type="file" placeholder="Gambar" class="form-control" id="image"  name="image" aria-describedby="imageHelp">
                    </div>
                    <div class="mb-3">
                    <label for="name" class="form-label">Nama Artikel</label>
                    <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="description2" class="form-label">Deskripsi 2</label>
                        <textarea class="form-control" id="description2" name="description2" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="description3" class="form-label">Deskripsi 3</label>
                        <textarea class="form-control" id="description3" name="description3" rows="3"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
    </div>
@endsection
