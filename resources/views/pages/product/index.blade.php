@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
    <div class="card w-100">
        <div class="card-body p-4">
        <h5 class="card-title fw-semibold mb-4">Product</h5>
        <a href="#" class="btn btn-primary" data-bs-target="#product" data-bs-toggle="modal">New Product</a><br><br><br>
        <div class="table-responsive">
            <table class="table text-nowrap mb-0 align-middle">
            <thead class="text-dark fs-4">
                <tr>
                <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">No</h6>
                </th>
                <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Image</h6>
                </th>
                <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Name</h6>
                </th>
                <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Category</h6>
                </th>
                <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Quantity</h6>
                </th>
                <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Price</h6>
                </th>
                <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Is Active</h6>
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
                    <h6 class="fw-normal mb-1">Image</h6>                     
                </td>
                <td class="border-bottom-0">
                    <h6 class="fw-normal mb-1">produk 1</h6>                     
                </td>
                <td class="border-bottom-0">
                    <h6 class="fw-normal mb-1">Minuman</h6>                     
                </td>
                <td class="border-bottom-0">
                    <h6 class="fw-normal mb-1">10</h6>                     
                </td>
                <td class="border-bottom-0">
                    <h6 class="fw-normal mb-1">Rp. 5.000</h6>                     
                </td>
                <td class="border-bottom-0">
                    <div class="d-flex align-items-center gap-2">
                    <span class="badge bg-primary rounded-3 fw-semibold">Edit</span>
                    </div>
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
    <div class="modal fade" id="product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Produk</h5>
                <button style="border: none; width: 30px; height: 30px;" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    {{-- <span aria-hidden="true">&times;</span> --}}
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    {{-- @csrf --}}
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" placeholder="Gambar" class="form-control" id="image"  name="image" aria-describedby="imageHelp">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Product</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="size" class="form-label">Category</label>
                        <select class="form-control form-select" id="size" name="size">
                            <option value="-" selected>Category A</option>
                            <option value="Premium">Premium</option>
                            <option value="Standar">Standar</option>
                            <option value="KECIL">KECIL</option>
                            <option value="BESAR">BESAR</option>
                            <!-- Tambahkan lebih banyak opsi jika diperlukan -->
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="description2" class="form-label">Quantity</label>
                        <input type="number" class="form-control" id="description2" name="description2"></input>
                    </div>
                    <div class="mb-3">
                        <label for="description3" class="form-label">Price</label>
                        <input type="number" class="form-control" id="description3" name="description3"></input>
                    </div>
                    <div class="mb-3">
                        <label for="size" class="form-label">Is Active</label>
                        <select class="form-control form-select" id="size" name="size">
                            <option value="-" selected>Active</option>
                            <option value="Premium">Premium</option>
                            <option value="Standar">Standar</option>
                            <option value="KECIL">KECIL</option>
                            <option value="BESAR">BESAR</option>
                            <!-- Tambahkan lebih banyak opsi jika diperlukan -->
                        </select>
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
