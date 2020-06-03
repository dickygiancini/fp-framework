@extends('admintemplate.mainadmin')

@section('bodysec')

  <!-- Content -->
  <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
              
                <div class="clearfix"></div>
                <!-- Orders -->
                <div class="orders">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="box-title">Film yang sedang Tayang</h4>
                                </div>
                                <div class="card-body--">
                                    <div class="table-stats order-table ov-h">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nama Film</th>
                                                    <th>Waktu</th>
                                                    <th>Harga</th>
                                                </tr>
                                            </thead>

                                            @foreach ($film as $data_film)
                                            <tbody>
                                            
                                                <tr>
                                                    <td>{{ $data_film->id }}</td>
                                                    <td>{{ $data_film->judul_film }}</td>
                                                    <td>{{ $data_film->jam }}</td>
                                                    <td>{{ $data_film->harga }}</td>
                                                </tr>
                                            
                                            </tbody>
                                            @endforeach
                                        </table>
                                    </div> <!-- /.table-stats -->
                                </div>
                            </div> <!-- /.card -->
                        </div>  <!-- /.col-lg-8 -->

                        
                    </div>
                </div>
                
                <!-- /.orders -->
               
        <!-- /.content -->
        <div class="clearfix"></div>

                @endsection