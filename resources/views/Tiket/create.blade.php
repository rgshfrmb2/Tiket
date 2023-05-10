<!-- form -->
@extends('layouts.master')

@section('content')
<div class="col-12 grid-margin stretch-card">
						<div class="card">
						  <div class="card-body">
							<h4 class="card-title">Horizontal Form</h4>
							<p class="card-description">
                HALAMAN BOOKING TIKET
							</p>
							<form method="post" action="{{ route('tiket.store') }}" enctype="multipart/form-data">
                   @csrf
							  <div class="form-group row">
								<label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama Konser</label>
								<div class="col-sm-9">
								  <input type="text" class="form-control" id="exampleInputNamaKonser" placeholder="Nama Konser" name="nama_konser">
								</div>
							  </div>
							  <div class="form-group row">
								<label for="exampleInputEmail2" class="col-sm-3 col-form-label">Tanggal Konser</label>
								<div class="col-sm-9">
								  <input type="date" class="form-control" id="exampleInputTanggalKonser" name="tgl">
								</div>
                <div class="form-group row">
								<label for="exampleInputMobile" class="col-sm-3 col-form-label">HTM</label>
								<div class="col-sm-9">
								  <input type="text" class="form-control" id="exampleInputNamaPemesan" name="htm">
								</div>
							  </div>
							  </div>
							  <div class="form-group row">
								<label for="exampleInputMobile" class="col-sm-3 col-form-label">Nama Pemesan</label>
								<div class="col-sm-9">
								  <input type="text" class="form-control" id="exampleInputNamaPemesan" placeholder="Nama Pemesan" name="nama_pembeli">
								</div>
							  </div>
							  <div class="form-group row">
								<label for="exampleInputPassword2" class="col-sm-3 col-form-label">Email</label>
								<div class="col-sm-9">
								  <input type="email" class="form-control" id="exampleInputEmail" placeholder="Email" name="email">
								</div>
							  </div>
							  <div class="form-group row">
								<label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Telpon</label>
								<div class="col-sm-9">
								  <input type="number" class="form-control" id="exampleInputMobile" placeholder="Mobile Number" name="tlp">
								</div>
							  </div>
							 
							  <button type="submit" class="btn btn-primary me-2 right">Submit</button>
							  <button class="btn btn-light">Cancel</button>
							</form>
						  </div>
						</div>
					  </div>

  @endsection