@extends('admintemplate.mainadmin')

@section('bodysec')
                <!-- Orders -->
                <div class="orders">
                    <div class="row">
                        <div class="col-xl-16">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="box-title">Data User</h4>
                                </div>
                                <div class="card-body--">
                                    <div class="table-stats order-table ov-h">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Email</th>
                                                    <th>Password</th>
                                                    <th>Opsi</th>
                                                </tr>
                                            </thead>
                                            @php
                                                $no = 1;
                                            @endphp
                                            <tbody>
                                                @foreach ($users as $user)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->password }}</td>
                                                    <td>
                                                        <a class="badge badge-complete" href="/adminuser/edit/{{ $user->id }}">Edit</a>
                                                        <a class="badge badge-pending" href="/adminuser/hapus/{{ $user->id }}">Hapus</a>
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
 @endsection