@extends('admin.layout.master')

@section('title', 'Edit Data Mata Pelajaran')

@section('content')
     <!-- page content -->
     <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Form Mata Pelajaran</h3>
                </div>

              
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        
                        <div class="x_content">
                            @foreach ($mapel as $m)
                                
                            <form class="" action="/admin/mata_pelajaran/update/{{ $m->id }}" method="post" novalidate>
                               @csrf
                               @method('PATCH')
                                <span class="section">Edit Data Mata Pelajaran</span>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Mata Pelajaran<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input value="{{ $m->nama_mapel }}" class="@error('nama_mapel') parsley-error @enderror form-control" data-validate-length-range="6" data-validate-words="2" name="nama_mapel" required="required" />
                                        @error('nama_mapel')
                                        <ul class="parsley-errors-list filled">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>   
                                        @enderror 
                                    </div>
                                </div>
                               
                          
                                <div class="ln_solid">
                                    <div class="form-group">
                                        <div class="col-md-6 offset-md-3">
                                            <button type='submit' class="btn btn-primary">Submit</button>
                                            <a href="/admin/mata_pelajaran" class="btn btn-danger">Batal</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection