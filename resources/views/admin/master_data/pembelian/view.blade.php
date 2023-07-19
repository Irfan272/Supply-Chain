@extends('admin.layout.master')

@section('title', 'View Data Sekolah')

@section('content')
     <!-- page content -->
     <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>View Sekolah</h3>
                </div>

              
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        
                        <div class="x_content">
                            @foreach ($sekolah as $s)
                                
                                <span class="section">View Data Sekolah</span>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Sekolah<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input disabled readonly value="{{ $s->nama_sekolah }}" class="form-control" data-validate-length-range="6" data-validate-words="2" name="nama_sekolah" required="required" />
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">NPSN<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input disabled readonly value="{{ $s->npsn }}" class="form-control" data-validate-length-range="6" data-validate-words="2" name="npsn" required="required" />
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Alamat<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <textarea disabled readonly required="required" name='alamat' style="width: 100%">{{ $s->alamat }}</textarea></div>
                                </div>
                                
                                <div class="ln_solid">
                                    <div class="form-group">
                                        <div class="col-md-6 offset-md-3">
                                            <a href="/admin/sekolah" class="btn btn-primary">Kembali</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection