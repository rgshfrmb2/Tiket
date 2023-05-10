@extends('layouts.master')

@section('content')
<!-- table-->
<div class="col-lg-12 grid-margin stretch-card">
						<div class="card">
						  <div class="card-body">
							<h4 class="card-title">KLIK CHECKIN DISINI</h4>
              <!-- <a href="{{ route('tiket.create') }}" class="btn btn-sm text-white bg-success"><i class='fa fa-edit'> Create</i></a> -->

              
                       
							<div class="table-responsive pt-3">
							  <table class="table table-bordered">
								<thead>
								  <tr>
									<th> No </th>
									<th> Nama Konser</th>
									<th> Tanggal Konser </th>
									<th> Htm </th>
									<th> Id Karcis </th>
									<th> Tanggal Pemesanan </th>
									<th> Nama Pemesan </th>
									<th> Telpon </th>
									<th> Email </th>
									<th> Status </th>
									<th> Aksi </th>

								</thead>
								<tbody>
                @foreach($check as $item)
<?php
$i = 0;
?>

								  <tr>
									<td> 
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
    <td>
    <a href="{{ route('checkin.agree', $item->id) }}" onclick="return confirm('Check In Sekarang?')">
                                    <button type="button" class="btn btn-succes">Klik Check In Disini</button>
                                </a>
    </td>
    </td>
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


