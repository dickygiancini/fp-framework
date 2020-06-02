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
                                    <h4 class="box-title">Nampilin Movie sama jadwal Jadwal Tayang coba disini</h4>
                                </div>
                                <div class="card-body--">
                                    <div class="table-stats order-table ov-h">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                    
                                                    
                                                    <th>ID</th>
                                                    <th>Nama Film</th>
                                                    <th>Tanggal</th>
                                                    <th>Waktu</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            
                                                <tr>
                                                    <td class="serial"></td>
                                                   
                                                   
                                                    <td>  <span class="name"></span> </td>
                                                    <td> <span class="product"></span> </td>
                                                    <td><span class="time"></span></td>
                                                    <td>
                                                     
                                                    </td>
                                                </tr>
                                            
                                            </tbody>
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