@extends('admintemplate.mainadmin')

@section('bodysec')

 <!-- Orders -->
 <div class="orders">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="box-title">Pemesanan </h4>
                                </div>
                                <div class="card-body--">
                                    <div class="table-stats order-table ov-h">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                    <th class="serial">#</th>
                                                    <th class="avatar">Avatar</th>
                                                    <th>Nama</th>
                                                    <th>Jenis Film</th>
                                                    <th>Qty</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="serial">1.</td>
                                                   
                                                    <td> #5469 </td>
                                                    <td>  <span class="name">Louis Stanley</span> </td>
                                                    <td> <span class="product">Bintang Disurga</span> </td>
                                                    <td><span class="count">2</span></td>
                                                    <td>
                                                        <span class="badge badge-complete">Sudah Bayar</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="serial">2.</td>
                                                   
                                                    <td> #5468 </td>
                                                    <td>  <span class="name">Gregory Dixon</span> </td>
                                                    <td> <span class="product">Menembus Langit</span> </td>
                                                    <td><span class="count">2</span></td>
                                                    <td>
                                                        <span class="badge badge-complete">Sudah Bayar</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="serial">3.</td>
                                                   
                                                    <td> #5467 </td>
                                                    <td>  <span class="name">Catherine Dixon</span> </td>
                                                    <td> <span class="product">Bukan Empat Mata</span> </td>
                                                    <td><span class="count">3</span></td>
                                                    <td>
                                                        <span class="badge badge-complete">Sudah Bayar</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="serial">4.</td>
                                                   
                                                    <td> #5466 </td>
                                                    <td>  <span class="name">Mary Silva</span> </td>
                                                    <td> <span class="product">Magic Mouse</span> </td>
                                                    <td><span class="count">2</span></td>
                                                    <td>
                                                        <span class="badge badge-pending">Belum Bayar</span>
                                                    </td>
                                                </tr>
                                                <tr class=" pb-0">
                                                    <td class="serial">5.</td>
                                                
                                                    <td> #5465 </td>
                                                    <td>  <span class="name">Johnny Stephens</span> </td>
                                                    <td> <span class="product">Burn the stage movie</span> </td>
                                                    <td><span class="count">5</span></td>
                                                    <td>
                                                        <span class="badge badge-complete">Sudah Bayar</span>
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

                @endsection