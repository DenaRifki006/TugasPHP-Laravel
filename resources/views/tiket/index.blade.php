@extends('layouts.admin')


@section('content')
<div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Basic Tables </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Jenis</th>
                          <th>Harga Tiket</th>
                          <th>Total Qty</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($data as $dt)
                        <tr>
                          <td>{{$dt->jenis_tiket}}</td>
                          <td>{{$dt->harga}}</td>
                          <td>{{$dt->total}}</td>
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