@extends('admin.layout.master')

@section('title', 'Data Sub Mata Pelajaran')

@section('content')
    
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="top_tiles">
            <h1>Data Akun </h1>
          </div>

          <div class="col-md-12 col-sm-12 ">
              <a href="/admin/akun/create" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Tambah Data
                  Siswa</a>
              <div class="x_panel">
                <div class="x_title">
                  @if (session('status'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  @endif
                  <h2>Tabel Data <small>Akun Siswa</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                          <div class="card-box table-responsive">
              
                  <table id="datatable" class="table table-striped table-bordered " style="width:100%">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>NISN</th>
                        <th>Nama</th>
                        <th>Password</th>
                        <th>role</th>
             
                        <th style="width: 35%">Action</th>
                      </tr>
                    </thead>


                    <tbody>
                      {{-- @foreach ($subMapel as $sm)
                          
                      <tr >
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $sm->mapel->nama_mapel }}</td>
                        <td>{{ $sm->nama_submapel }}</td>
                        
                        <td style="text-align: left">
                          <a href="/admin/sub_mata_pelajaran/edit/{{ $sm->id }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                          <form action="/admin/sub_mata_pelajaran/delete/{{$sm->id}}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </button>
                        </form>
                        </td>
                      </tr>
                      
                      @endforeach --}}
                    </tbody>
                  </table>
                </div>
                </div>
            </div>
          </div>

          
              </div>
            </div>
          </div>

      

          <div class="col-md-12 col-sm-12 ">
              <a href="/admin/akunGuru/create" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Tambah Data
                  Guru</a>
              <div class="x_panel">
                <div class="x_title">
                  @if (session('status'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  @endif
                  <h2>Tabel Data <small>Akun Guru</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                          <div class="card-box table-responsive">
              
                  <table id="datatable" class="table table-striped table-bordered " style="width:100%">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Password</th>
                        <th>role</th>
             
                        <th style="width: 35%">Action</th>
                      </tr>
                    </thead>


                    <tbody>
                      @foreach ($subMapel as $sm)
                          
                      <tr >
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $sm->mapel->nama_mapel }}</td>
                        <td>{{ $sm->nama_submapel }}</td>
                        
                        <td style="text-align: left">
                          <a href="/admin/sub_mata_pelajaran/edit/{{ $sm->id }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                          <form action="/admin/sub_mata_pelajaran/delete/{{$sm->id}}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </button>
                        </form>
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
            </div>
          </div>
        </div>



      
@endsection