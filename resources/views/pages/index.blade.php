@extends('layouts.app')

@section('content') 

<h1>hello, {{ Auth::user()->fullname }}</h1>

<div class="row">

  <div class="col-lg-3">
    <!-- Monthly Earnings -->
    <div class="card">
      <div class="card-body">
        <div class="row alig n-items-start">
          <div class="col-8">
            <h5 class="card-title mb-9 fw-semibold"> Total Produk </h5>
            <h4 class="fw-semibold mb-3">10</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3">
    <!-- Monthly Earnings -->
    <div class="card">
      <div class="card-body">
        <div class="row alig n-items-start">
          <div class="col-8">
            <h5 class="card-title mb-9 fw-semibold"> Total Order </h5>
            <h4 class="fw-semibold mb-3">8</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3">
    <!-- Monthly Earnings -->
    <div class="card">
      <div class="card-body">
        <div class="row alig n-items-start">
          <div class="col-8">
            <h5 class="card-title mb-9 fw-semibold"> Omset </h5>
            <h4 class="fw-semibold mb-3">Rp. 666.000</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3">
    <!-- Monthly Earnings -->
    <div class="card">
      <div class="card-body">
        <div class="row alig n-items-start">
          <div class="col-8">
            <h5 class="card-title mb-9 fw-semibold"> Pengeluaran </h5>
            <h4 class="fw-semibold mb-3">Rp. 299.000</h4>
          </div>
        </div>
      </div>
    </div>
  </div>

  
  
</div>

<div class="row">
  <div class="col-lg-6 d-flex align-items-strech">
      <div class="card w-100">
          <div class="card-body">
              <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                  <div class="mb-3 mb-sm-0">
                      <h5 class="card-title fw-semibold">Sales Overview</h5>
                  </div>
                  <div>
                      <select class="form-select">
                          <option value="1">March 2023</option>
                          <option value="2">April 2023</option>
                          <option value="3">May 2023</option>
                          <option value="4">June 2023</option>
                      </select>
                  </div>
              </div>
              <div>
                  <canvas id="charts"></canvas>
              </div>
          </div>
      </div>
  </div>

  <div class="col-lg-6 d-flex align-items-strech">
      <div class="card w-100">
          <div class="card-body">
              <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                  <div class="mb-3 mb-sm-0">
                      <h5 class="card-title fw-semibold">Expense Overview</h5>
                  </div>
                  <div>
                      <select class="form-select">
                          <option value="1">March 2023</option>
                          <option value="2">April 2023</option>
                          <option value="3">May 2023</option>
                          <option value="4">June 2023</option>
                      </select>
                  </div>
              </div>
              <div>
                  <canvas id="charts2"></canvas>
              </div>
          </div>
      </div>
  </div>
</div>

@push('addon-script')
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    // Data for Sales Chart
    const salesData = {
        labels: ['March 2023', 'April 2023', 'May 2023', 'June 2023'],
        datasets: [{
            label: 'Omset',
            data: [5000, 7000, 8000, 6000],
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        }]
    };

    // Data for Expense Chart
    const expenseData = {
        labels: ['March 2023', 'April 2023', 'May 2023', 'June 2023'],
        datasets: [{
            label: 'Expense',
            data: [2000, 3000, 4000, 2500],
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1
        }]
    };

    // Config for Sales Chart
    const salesConfig = {
        type: 'bar',
        data: salesData,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    };

    // Config for Expense Chart
    const expenseConfig = {
        type: 'bar',
        data: expenseData,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    };

    // Render Sales Chart
    const salesChart = new Chart(
        document.getElementById('charts'),
        salesConfig
    );

    // Render Expense Chart
    const expenseChart = new Chart(
        document.getElementById('charts2'),
        expenseConfig
    );
  </script>
@endpush
@endsection
