@extends('admintemplate.mainadmin')

@section('bodysec')

                <!-- Orders -->
                <div class="orders">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="box-title mb-3">Data Film</h3>
                                

                                @foreach ($film as $data_film)
                                    
                                        <div class="card ml-5" style="width: 18rem;">
                                            
                                            <div class="card-body">
                                                <img src="{{ url('data_file/'.$data_film->poster) }}"  class="card-img-top mb-3" alt="...">
                                               
                                                <table class="table">
                                                    
                                                    <tbody>
                                                      <tr>
                                                        <th><h5 class="card-title mt-3">Judul Film</h5></th>
                                                        <td><h5 class="card-title mt-3">{{ $data_film->judul_film }}</h5></td>
                                                      </tr>
                                                      <tr>
                                                        <th><h5 class="card-title mt-3">Overview</h5></th>
                                                        <td><h5 class="card-text mt-3 mb-3">{{ $data_film->overview }}</h5></td>
                                                      </tr>
                                                      <tr>
                                                        <th><h5 class="card-title mt-3">Jam Mulai</h5></th>
                                                        <td><h5 class="card-text mt-3 mb-3">{{ $data_film->jam }}</h5></td>
                                                      </tr>
                                                      <tr>
                                                        <th><h5 class="card-title mt-3">Harga</h5></th>
                                                        <td><h5 class="card-text mt-3 mb-3">{{ $data_film->harga }}</h5></td>
                                                      </tr>
                                                      <tr>
                                                        <th><h5 class="card-title mt-3">Studio</h5></th>
                                                        <td><h5 class="card-text mt-3 mb-3">{{ $data_film->studio->nama_studio }}</h5></td>
                                                      </tr>
                                                      <tr>   
                                                        <th colspan="2">
                                                            <a class="btn btn-primary" href="/adminfilm/edit/{{ $data_film->id }}">Edit</a>
                                                            <a class="btn btn-danger" href="/adminfilm/hapus/{{ $data_film->id }}">Hapus</a>
                                                        </td>
                                                      </tr>
                                                    </tbody>
                                                  </table>

                                                  
                                                {{-- <h5 class="card-title mt-3">Judul Film</h5>
                                                <h5 class="card-title mt-3">{{ $data_film->judul_film }}</h5>
                                                
                                                <h5 class="card-title mt-3">Overview</h5>
                                                <h5 class="card-text mt-3 mb-3">{{ $data_film->overview }}</h5>

                                                <h5 class="card-title mt-3">Jam Mulai</h5>
                                                <h5 class="card-text mt-3 mb-3">{{ $data_film->jam }}</h5>
                                                
                                                <a class="btn btn-primary" href="/adminfilm/edit/{{ $data_film->id }}">Edit</a>
                                                <a class="btn btn-danger" href="/adminfilm/hapus/{{ $data_film->id }}">Hapus</a> --}}
                                            

                                            </div>
                                        </div>
                                    
                                  @endforeach
                                  
                                </div>

                                <div class="card-body--">
                                    
                                </div>
                            </div> <!-- /.card -->
                        </div>  <!-- /.col-lg-8 -->

                        <div class="col-xl-4">
                            <div class="row">
                                <div class="col-lg-6 col-xl-12">
                                    <div class="card br-0">
                                        <div class="card-body">

                                            <h3 class="box-title mb-3">Tambah Data Film</h3>

                                            <div class="chart-container ov-h">
                                           
                                                
                                                    <form class="row" action="" method="post" enctype="multipart/form-data">
                                                        {{ csrf_field() }}
                
                                                        <div class="card ml-10" style="width: 20rem;">
                                                            
                                                            <div class="card-body">
                                                                <h5 class="card-title mt-3">Poster Film</h5>
                                                                                                                                
                                                                <div class="form-group">
                                                                    <input type="file" class="" name="poster" required>
                                                                </div>
                
                                                                <h5 class="card-title mt-3">Judul Film</h5>
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="judul_film" placeholder="Judul Film" required>
                                                                </div>
                
                                                                <h5 class="card-text mt-3">Overview</h5>
                                                                <div class="form-group mt-3">
                                                                    <input type="textarea" class="form-control" name="overview" placeholder="Overview" required>
                                                                </div>

                                                                <h5 class="card-text mt-3">Jam</h5>
                                                                <div class="form-group mt-3">
                                                                    <input type="time" class="form-control" name="jam" placeholder="Jam" id="myTime" required>
                                                                </div>

                                                                <h5 class="card-text mt-3">Harga</h5>
                                                                <div class="form-group mt-3">
                                                                    <input type="number" class="form-control" name="harga" placeholder="harga"  required>
                                                                </div>
                                                                
                                                                <div class="form-group mt-3">
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