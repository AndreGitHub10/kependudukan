@extends('layouts.app')

@section('content')

	<div class="col-md-12 col-12">
	    <div class="card">
	    	@php($user = \Auth::user())
	    	@php($rw = $user->rw)
	    	@php($rt = $user->rt)
	        <div class="card-header">
	            <h4 class="card-title">Data Diri {{ "Penduduk RT $rt / RW $rw" }} 
	           	</h4>
	        </div>
	        <div class="card-content">
	            <div class="card-body">
	                <form class="form form-horizontal" method="post" action="{{ route('user.store') }}" enctype="multipart/form-data" name="kirim">
	                	@csrf
	                    <div class="form-body">
	                        <div class="row">
	                            <div class="col-md-3">
	                                <label>Nama</label>
	                            </div>
	                            <div class="col-md-9 form-group">
	                                <input type="text" id="nama" class="form-control" name="nama" placeholder="Nama">
	                            </div>
	                            <div class="col-md-3">
	                                <label>Email</label>
	                            </div>
	                            <div class="col-md-9 form-group">
	                                <input type="text" inputmode="numeric" id="email" class="form-control" name="email" placeholder="Email">
	                            </div>
	                            <div class="col-md-3">
	                                <label>Pilih User</label>
	                            </div>
	                            <div class="col-md-9 form-group">
	                            
	                                <select class="form-select" id="role" name="role">
											<option value="3">RT</option>
											<option value="2">RW</option>
										</select>
	                            </div>
	                            <div class="col-md-3">
	                                <label>Password</label>
	                            </div>
	                            <div class="col-md-9 form-group">
	                                <input type="password" id="password" class="form-control" name="password" placeholder="Masukkan password">
	                            </div>

	                            <div class="col-md-3">
	                                
	                            </div>
	                            <div class="col-md-5 form-group">
	                                
	                            </div>
	                            <div class="col-md-4 form-group">
		                            <div class="input-group">
			                            
		                            	
		                            </div>
	                            </div>
	                            <div class="col-md-3">
	                                <label>Nomor HP</label>
	                            </div>
	                            <div class="col-md-9 form-group">
	                                <input type="text" id="kontak" class="form-control"
	                                    name="kontak" placeholder="Nomor HP">
	                            </div>
	                            <div class="col-md-3">
	                                <label>RT/RW</label>
	                            </div>
	                            <fieldset class="col-md-4 form-group">
	                            	<div class="input-group">
	                            		<label class="input-group-text" for="rt">RT</label>
										<select class="form-select" id="rt" name="rt">				
											<option value="01">01</option>
											<option value="02">02</option>
											<option value="03">03</option>
											<option value="04">04</option>
											<option value="05">05</option>
										</select>
	                            	</div>
	                            </fieldset>
	                            <fieldset class="col-md-5 form-group">
	                            	<div class="input-group">
		                            	<label class="input-group-text" for="rw">RW</label>
										<select class="form-select" id="rw" name="rw">
											<option value="01">01</option>
											<option value="02">02</option>
											<option value="03">03</option>
											<option value="04">04</option>
											<option value="05">05</option>
										</select>
									</div>
								</fieldset>
	                            <div class="col-sm-12 d-flex justify-content-end">
	                                <button type="button" class="btn btn-primary me-1 mb-1" data-bs-toggle="modal" data-bs-target="#default">Simpan</button>
	                                <div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                        <div class="modal-dialog " role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myModalLabel1">Konfirmasi</h5>
                                                    <button type="button" class="close rounded-pill"
                                                        data-bs-dismiss="modal" aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>
                                                        Simpan Data?
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn" data-bs-dismiss="modal">
                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Close</span>
                                                    </button>
                                                    <button type="submit" class="btn btn-primary ml-1" data-bs-dismiss="modal" onclick="document.kirim.submit()">
                                                        <i class="bx bx-check d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Accept</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
	                            </div>
	                        </div>
	                    </div>
	                </form>
	            </div>
	        </div>
	    </div>
	</div>
@endsection

