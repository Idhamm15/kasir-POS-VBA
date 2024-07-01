@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
    <div class="card w-100">
        <div class="card-body p-4">
        <h5 class="card-title fw-semibold mb-4">Order</h5>
        <a href="#" class="btn btn-primary" data-bs-target="#artikel1" data-bs-toggle="modal">New Category</a><br><br><br>
        <div class="table-responsive">
            <table class="table text-nowrap mb-0 align-middle">
            <thead class="text-dark fs-4">
                <tr>
                <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">No</h6>
                </th>
                <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Waktu</h6>
                </th>
                <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Metode Pembayaran</h6>
                </th>
                <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Total Price</h6>
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
                    <h6 class="fw-normal mb-1">Minuman</h6>                     
                </td>
                <td class="border-bottom-0">
                    <h6 class="fw-normal mb-1">Minuman</h6>                     
                </td>
                <td class="border-bottom-0">
                    <h6 class="fw-normal mb-1">Minuman</h6>                     
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
@endsection
