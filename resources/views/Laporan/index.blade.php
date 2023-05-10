@extends('layouts.master')

@section('content')
<!-- table-->
<div class="col-lg-12 grid-margin stretch-card">
						<div class="card">
						  <div class="card-body">
							<h4 class="card-title">LAPORAN PEMBELIAN</h4>
              <a href="{{ route('tiket.create') }}" class="btn btn-sm text-white bg-success"><i class='fa fa-edit'> Create</i></a>

							<div class="table-responsive pt-3">
							  <table class="table table-bordered">
								<thead>
								  <tr>
									<th> No </th>
									<th> Nama Konser</th>
									<th> Tanggal Konser </th>
									<th> Htm </th>
									<th> Id Tiket </th>
                  <th> Nama Pemesan</th>
									<th> Tanggal Pemesanan </th>
									<th> Telpon </th>
									<th> Email </th>
									<th> Status </th>

								</thead>
								<tbody>
                @foreach($laporan as $item)
<?php
$i = 0;
?>

								  <tr>
                  <td>{{ $loop->iteration }}</td>
    <td>{{$item->nama_konser}}</td>
    <td>{{$item->tgl}}</td>
    <td>{{$item->htm}}</td>
    <td>{{$item->id_tiket}}</td>
    <td>{{$item->nama_pembeli}}</td>
    <td>{{$item->created_at}}</td>
    <td>{{$item->tlp}}</td>
    <td>{{$item->email}}</td>
    <td>{{$item->status}}</td>
    
                  </td>
		
								  </tr>
								</tbody>
                @endforeach

							  </table>
							</div>
						  </div>
						</div>
					  </div>
@endsection


