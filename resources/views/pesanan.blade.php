@extends('usertemplate.mainuser')

@section('bodysec')    
                  <!-- Orders -->
                  <div class="orders">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="box-title mb-3">Tiket</h4>
            
                                               @foreach ($pesan as $data_pesan)
                                    
                                               <div class="card ml-5" style="width: 18rem;">
                                                   
                                                   <div class="card-body">
                                                       <table class="table">
                                                           
                                                           <tbody>
                                                             <tr>
                                                               <th><h5 class="card-title mt-3">Judul Film</h5></th>
                                                               <td><h5 class="card-title mt-3">{{ $data_pesan->nama_film }}</h5></td>
                                                             </tr>
                                                             <tr>
                                                               <th><h5 class="card-title mt-3">Tanggal</h5></th>
                                                               <td><h5 class="card-text mt-3 mb-3">{{ $data_pesan->tanggal }}</h5></td>
                                                             </tr>
                                                             <tr>
                                                               <th><h5 class="card-title mt-3">Jam Mulai</h5></th>
                                                               <td><h5 class="card-text mt-3 mb-3">{{ $data_pesan->jam }}</h5></td>
                                                             </tr>
                                                             <tr>
                                                               <th><h5 class="card-title mt-3">Jumlah</h5></th>
                                                               <td><h5 class="card-text mt-3 mb-3">{{ $data_pesan->jumlah }}</h5></td>
                                                             </tr>
                                                             <tr>
                                                               <th><h5 class="card-title mt-3">Harga</h5></th>
                                                               <td><h5 class="card-text mt-3 mb-3">{{ $data_pesan->harga }}</h5></td>
                                                             </tr>
                                                           </tbody>
                                                         </table>
                                                   </div>
                                               </div>
                                           
                                         @endforeach                
                                </div>
                            </div> <!-- /.card -->
                        </div>  <!-- /.col-lg-12 -->
                    </div>
                </div>

                @endsection
             
                                    
 