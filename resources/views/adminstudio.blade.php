@extends('admintemplate.mainadmin')

@section('bodysec')

    <!-- Orders -->
    <div class="orders">
        <div class="row">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Data Studio</h4>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th>ID Studio</th>
                                        <th>ID Film</th>
                                        <th>Nama Studio</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($studio as $data_studio)
                                    <tr>
                                        <td>{{ $data_studio->id}}</td>
                                        <td>{{ $data_studio->film_id }}</td>
                                        <td>{{ $data_studio->nama_studio }}</td>
                                        <td>
                                            <a class="badge badge-complete" href="/adminstudio/edit/{{ $data_studio->id }}">Edit</a>
                                            <a class="badge badge-pending" href="/adminstudio/hapus/{{ $data_studio->id }}">Hapus</a>
                                        </td>                                                    
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div> <!-- /.table-stats -->
                    </div>
                </div> <!-- /.card -->
            </div>  <!-- /.col-lg-8 -->

            <div class="col-xl-4">
                <div class="row">
                    <div class="col-lg-6 col-xl-12">
                        <div class="card br-0">
                            <div class="card-body">
                                <div class="chart-container ov-h">
                        

                                        <h3 class="box-title mb-3">Tambah Data Studio</h3>

                                        <div class="chart-container ov-h">
                                       
                                            
                                                <form class="row" action="" method="post">
                                                    {{ csrf_field() }}
            
                                                    <div class="card ml-10" style="width: 20rem;">
                                                        
                                                        <div class="card-body">
            
                                                            <h5 class="card-title mt-3">ID Film (Masukkan sesuai ID Film)</h5>
                                                            <div class="form-group">
                                                                <input type="number" class="form-control" name="film_id" placeholder="ID Film" required>
                                                            </div>
            
                                                            <h5 class="card-text mt-3">Nama Film</h5>
                                                            <div class="form-group mt-3">
                                                                <input type="text" class="form-control" name="nama_studio" placeholder="Nama Studio" required>
                                                            </div>
                                   
                                                            <div class="form-group mt-3">
                                                                <button type="submit" value="submit" class="btn btn-success">Tambah</button>
                                                            </div>
            
                                                        </div>
                                                    </div>
                                                </form>
                                              

                                        </div>


                                   
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
