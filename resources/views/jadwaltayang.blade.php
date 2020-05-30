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
                                    <h4 class="box-title">Jadwal Tayang</h4>
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
                                            @foreach($jadwaltayang as $jt)
                                                <tr>
                                                    <td class="serial">{{ $jt->ID_JADWAL}}</td>
                                                   
                                                   
                                                    <td>  <span class="name">{{ $jt->NAMAFILM}}</span> </td>
                                                    <td> <span class="product">{{ $jt->TANGGAL}}</span> </td>
                                                    <td><span class="time">{{ $jt->JAMTAYANG}}</span></td>
                                                    <td>
                                                        <span class="badge badge-complete">Edit</span>
                                                        <span class="badge badge-pending">Delete</span>
                                                    </td>
                                                </tr>
                                            @endforeach
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