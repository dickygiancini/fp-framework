@extends('admintemplate.mainadminedituser')

@section('bodysec')
                <!-- Orders -->
                <div class="orders">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="box-title mb-3">Edit Studio</h4>
                
                                    @foreach ($studio as $data_studio)
                                    <form class="row" action="/adminstudio/update/{{ $data_studio->id }}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        {{-- {{ method_field('PUT') }} --}}

                                        <div class="card ml-5" style="width: 18rem;">
                                            
                                            <div class="card-body">
 
                                                <input type="hidden" name="id" id="id" value="{{ $data_studio->id }}">

                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="nama_studio" value="{{ $data_studio->nama_studio }}" placeholder="Nama Studio" required>
                                                </div>

                                                <div class="form-group">
                                                    <a class="btn btn-secondary" href="/adminstudio">Kembali</a>
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
