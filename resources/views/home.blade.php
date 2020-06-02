@extends('usertemplate.mainuser')

@section('bodysec')    
                  <!-- Orders -->
                  <div class="orders">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="box-title mb-3">Film yang sedang Tayang</h4>
                                    @foreach ($film as $data_film)
                                      <div class="container">
                                        <div class="row justify-content-md-center">
                                            <div class="col col-md-7 col-sm-7 col-xs-7">
                                              <div class="blog_post">
                                                <center>
                                                  <br><h2>{{ $data_film->judul_film }}</h2></br>
                                                  <img src="{{ url('data_file/'.$data_film->poster) }}" class="card-img col-md-10" alt="...">
                                                  <div class="single-fasilitas-image"></div>
                                                <div class="blog_details">
                                                <p>{{ $data_film->overview }}</p>
                                                  <p>Jam Tayang {{ $data_film->jam }}</p>
                                                </div>
                                                <tr>
                                                <th colspan="2">
                                                    <a class="btn btn-primary" href="">Pilih</a>
                                                </td>
                                              </tr>
                                                </center>
                                              </div>
                                            </div>
                                          </div>
                                      </div>
                                    @endforeach
                                </div>
                            </div> <!-- /.card -->
                        </div>  <!-- /.col-lg-12 -->
                    </div>
                </div>

                @endsection
                <!-- /.orders -->
             <!-- {{-- <h5 class="card-title mt-3">Judul Film</h5>
                                        <h5 class="card-title mt-3">{{ $data_film->judul_film }}</h5>
                                        
                                        <h5 class="card-title mt-3">Overview</h5>
                                        <h5 class="card-text mt-3 mb-3">{{ $data_film->overview }}</h5>

                                        <h5 class="card-title mt-3">Jam Mulai</h5>
                                        <h5 class="card-text mt-3 mb-3">{{ $data_film->jam }}</h5>
                                        
                                        <a class="btn btn-primary" href="/adminfilm/edit/{{ $data_film->id }}">Edit</a>
                                        <a class="btn btn-danger" href="/adminfilm/hapus/{{ $data_film->id }}">Hapus</a> --}} -->



                                        <!-- @foreach ($film as $data_film)
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
                                                <th colspan="2">
                                                    <a class="btn btn-primary" href="">Pilih</a>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                          </div>
                                </div>
                            
                          @endforeach -->
                                    
 