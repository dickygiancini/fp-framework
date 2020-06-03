@extends('admintemplate.mainadminedituser')

@section('bodysec')
                <!-- Orders -->
                <div class="orders">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="box-title mb-3">Edit Data Film</h4>
                
                                    @foreach ($film as $data_film)
                                    <form class="row" action="/adminfilm/update/{{ $data_film->id }}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        {{-- {{ method_field('PUT') }} --}}

                                        <div class="card ml-5" style="width: 18rem;">
                                            
                                            <div class="card-body">
 
                                                <input type="hidden" name="id" id="id" value="{{ $data_film->id }}">
                                                
                                                <div class="form-group">
                                                    <label for="poster">Poster Film</label>
                                                    <input type="file" class="" name="poster" value="{{ $data_film->poster }}" required>
                                                </div>

                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="judul_film" value="{{ $data_film->judul_film }}" placeholder="Judul Film" required>
                                                </div>

                                                <div class="form-group mt-3">
                                                    <input type="textarea" class="form-control" name="overview" value="{{ $data_film->overview }}" placeholder="Overview" required>
                                                </div>

                                                <div class="form-group mt-3">
                                                    <input type="time" class="form-control" name="jam" value="{{ $data_film->jam }}" placeholder="Jam" required>
                                                </div>

                                                <div class="form-group mt-3">
                                                    <input type="number" class="form-control" name="harga" value="{{ $data_film->harga }}" placeholder="harga" required>
                                                </div>

                                                <div class="form-group mt-3">
                                                    <a class="btn btn-secondary" href="/adminfilm">Kembali</a>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>                                                
                                                </div>

                                            </div>
                                        </div>
                                    </form>
                                    @endforeach
                                    

                                </div>
                            </div> <!-- /.card -->
                        </div>  <!-- /.col-lg-12 -->

                    </div>
                </div>
                <!-- /.orders -->
                @endsection