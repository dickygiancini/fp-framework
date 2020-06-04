@extends('admintemplate.mainadmin')

@section('bodysec')

                <!-- Orders -->
                <div class="orders">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="box-title mb-3">Studio</h3>
                                </div>
                                <div class="card-body--">
                                    <div class="table-stats order-table ov-h">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                    <th class="serial">#</th>
                                                    <th>Film ID</th>
                                                    <th>Nama Studio</th>
                                                    <th>Opsi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                @foreach ($studio as $index => $data_studio)
                                                      <tr>
                                                        <td><h5 class="card-title mt-3">{{ $index + 1 }}</h5></td>
                                                        <td><h5 class="card-title mt-3">{{ $data_studio->film_id }}</h5></td>
                                                        <td><h5 class="card-title mt-3">{{ $data_studio->nama_studio }}</h5></td>
                                                        <td colspan="2">
                                                            <a class="btn btn-primary" href="/adminstudio/edit/{{ $data_studio->id }}">Edit</a>
                                                            @if($data_studio->film_id === 0)
                                                            <a class="btn btn-danger" href="/adminstudio/hapus/{{ $data_studio->id }}">Hapus</a>
                                                            @endif
                                                        </td>
                                                      </tr> 
                                  @endforeach
                                            </tbody>
                                        </table>                                 
                                            </div>
                                        </div>
                                  
                                </div>

                                <div class="card-body--">
                                    
                                </div>
                            </div> <!-- /.card -->

                        <div class="col-xl-4">
                            <div class="row">
                                <div class="col-lg-6 col-xl-12">
                                    <div class="card br-0">
                                        <div class="card-body">

                                            <h3 class="box-title mb-3">Tambah Studio</h3>

                                            <div class="chart-container ov-h">
                                           
                                                
                                                    <form class="row" action="" method="post" enctype="multipart/form-data">
                                                        {{ csrf_field() }}
                
                                                        <div class="card ml-10" style="width: 20rem;">
                                                            
                                                            <div class="card-body">
                
                                                                <input type="hidden" name="film_id" id="film_id" value="0">

                                                                <h5 class="card-title mt-3">Nama Studio</h5>
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="nama_studio" placeholder="Nama Studio" required>
                                                                </div>
                
                                                                <div class="form-group">
                                                                    <button type="submit" value="submit" class="btn btn-success">Tambah</button>
                                                                </div>
                
                                                            </div>
                                                        </div>
                                                    </form>
                                                  

                                            </div>
                                        </div>
                                    </div><!-- /.card -->
                                </div>                                
                            </div>
                        </div> <!-- /.col-md-4 -->
                    </div>
                </div>
                <!-- /.orders -->
                @endsection
