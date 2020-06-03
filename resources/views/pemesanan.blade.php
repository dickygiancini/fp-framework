@extends('admintemplate.mainadmin')

@section('bodysec')

 <!-- Orders -->
 <div class="orders">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="box-title">Pemesanan </h4>
                                </div>
                                <div class="card-body--">
                                    <div class="table-stats order-table ov-h">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Judul Film</th>
                                                    <th>Tanggal</th>
                                                    <th>Jam Mulai</th>
                                                    <th>Jumlah</th>
                                                    <th>Harga</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            @php
                                                $no = 1;
                                            @endphp
                                            
                                            @foreach ($pesan as $data_pesan)
                                            <tbody>
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $data_pesan->nama_film }}</td>
                                                    <td>{{ $data_pesan->tanggal }}</td>
                                                    <td>{{ $data_pesan->jam }}</td>
                                                    <td>{{ $data_pesan->jumlah }}</td>
                                                    <td>{{ $data_pesan->harga }}</td>
                                                    <td class="badge badge-complete">Sudah Bayar</td>
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

                @endsection