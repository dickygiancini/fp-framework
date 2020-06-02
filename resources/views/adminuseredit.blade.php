@extends('admintemplate.mainadminedituser')

@section('bodysec')

 <!-- Orders -->
 <div class="orders">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="card">
                                
                                <div class="card-body--">

                                    @foreach ($users as $user)
                                    <form action = "/adminuser/update" method="post">
                                    {{ csrf_field() }}

                                    <div class="card-body">
                                        <h4 class="box-title">Data User {{ $user->name}} </h4>
                                    </div>
                        
                                    <div class="modal-body"> 
                                        <input type="hidden" name="id" value="{{ $user->id }}">
                                        <label >Nama</label>
                                        <input type="text" class="form-control" required="required" name="name" value="{{ $user->name}}">                                  
                                        <label >Email</label>
                                        <input type="text" class="form-control" required="required" name="email" value="{{ $user->email}}">                                    
                                        <label >Password</label>
                                        <input type="text" class="form-control" required="required" name="password" value="{{ $user->password}}">                                      
                                    </div>
                                    <div class="modal-footer">
                                        <a class="btn btn-secondary" href="/adminuser">Kembali</a>
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