@extends('admintemplate.mainadminedituser')

@section('bodysec')

 <!-- Orders -->
 <div class="orders">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="card">
                                
                                <div class="card-body--">

                                    @foreach ($studio as $data_studio)
                                    <form action = "/adminstudio/update/{{ $data_studio->id }}" method="post">
                                    {{ csrf_field() }}

                                    <div class="card-body">
                                        <h4 class="box-title">Edit Data Studio</h4>
                                    </div>
                        
                                    <div class="modal-body"> 
                                        <input type="hidden" name="id" value="{{ $data_studio->id }}">
                                        <label >ID Film</label>
                                        <input type="text" class="form-control" required="required" name="film_id" value="{{ $data_studio->film_id}}">                                  
                                        <label >Nama Studio</label>
                                        <input type="text" class="form-control" required="required" name="nama_studio" value="{{ $data_studio->nama_studio}}">                                                                          
                                    </div>
                                    <div class="modal-footer">
                                        <a class="btn btn-secondary" href="/adminstudio">Kembali</a>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                        
                                </form>
                                @endforeach

                                </div>
                            </div> <!-- /.card -->
                        </div>  <!-- /.col-lg-8 -->
                    </div>
                </div>
                <!-- /.orders -->

@endsection