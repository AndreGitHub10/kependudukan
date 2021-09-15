@extends('layouts.app')

@section('content')

	<div class="col-md-12 col-12">
	    <div class="card">
	        <div class="card-header">
	            <h4 class="card-title">Data Diri 
	           	</h4>
	        </div>
	        <div class="card-content">
	            <div class="card-body">
	                <form class="form form-horizontal" method="post" action="{{ route('store') }}" enctype="multipart/form-data" name="kirim">
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
	                                <label>NIK</label>
	                            </div>
	                            <div class="col-md-9 form-group">
	                                <input type="text" inputmode="numeric" id="nik" class="form-control" name="nik" placeholder="NIK" maxlength="16" minlength="16">
	                            </div>
	                            <div class="col-md-3">
	                                <label>Nomor KK</label>
	                            </div>
	                            <div class="col-md-9 form-group">
	                                <input type="text" inputmode="numeric" id="kk" class="form-control" name="kk" placeholder="Nomor KK" maxlength="16" minlength="16">
	                            </div>
	                            <div class="col-md-3">
	                                <label>Tempat dan Tanggal Lahir</label>
	                            </div>
	                            <div class="col-md-5 form-group">
	                                <input type="text" id="tempat" class="form-control" name="tempat_lahir" placeholder="Tempat lahir">
	                            </div>
	                            <div class="col-md-4 form-group">
		                            <div class="input-group">
			                            <label class="input-group-text">
			                            	<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-calendar-date" viewBox="0 0 16 16">
												<path d="M6.445 11.688V6.354h-.633A12.6 12.6 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61h.675zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82h-.684zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23z"/>
												<path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
											</svg>
		                            	</label>
		                            	<input type="date" name="tanggal_lahir" class="form-control">
		                            </div>
	                            </div>
	                            <div class="col-md-3">
	                                <label>Nomor HP</label>
	                            </div>
	                            <div class="col-md-9 form-group">
	                                <input type="text" id="kontak" class="form-control"
	                                    name="kontak" maxlength="13" placeholder="Nomor HP">
	                            </div>
	                            <div class="col-md-3">
	                                <label>RT/RW</label>
	                            </div>
	                            <fieldset class="col-md-4 form-group">
	                            	<div class="input-group">
	                            		<label class="input-group-text" for="rt">RT</label>
										<select class="form-select" id="rt" name="rt">				
											<option>01</option>
											<option>02</option>
											<option>03</option>
											<option>04</option>
											<option>05</option>
										</select>
	                            	</div>
	                            </fieldset>
	                            <fieldset class="col-md-5 form-group">
	                            	<div class="input-group">
		                            	<label class="input-group-text" for="rw">RW</label>
										<select class="form-select" id="rw" name="rw">
											<option>01</option>
											<option>02</option>
											<option>03</option>
											<option>04</option>
											<option>05</option>
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