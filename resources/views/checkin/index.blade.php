@extends('layouts.admin')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@endsection

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
                    <table class="table" id="data">
                      <thead>
                        <tr>
                          <th>Kode Pemesanan </th>
                          <th>Nama</th>
                          <th>No.Hp</th>
                          <th>Jenis Tiket</th>
                          <th>Tanggal</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($data as $dt)
                        <tr>
                          <td>{{$dt->kode_pemesanan}}</td>
                          <td>{{$dt->nama}}</td>
                          <td>{{$dt->no_hp}}</td>
                          <td>{{$dt->jenis_tiket}}</td>
                          <td>{{$dt->tanggal_pemesanan}}</td>
                          <td>
                                @if($dt->status == 1)
                                    <label class="badge badge-success">Valid</label>
                                @endif
                                @if($dt->status == 2)
                                    <label class="badge badge-danger">Expired</label>
                                @endif
                          </td>
                          <td>
                                @if($dt->status == 1)
                                <form action="{{route('checkin-ticket')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="status" value="2">
                                    <input type="hidden" name="id" value="{{$dt->id}}">
                                    <button class="btn btn-sm btn-success">Masuk</button>
                                </form>

                                @endif
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

@section('js')
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function () {
    $('#data').DataTable();
});
</script>
@endsection