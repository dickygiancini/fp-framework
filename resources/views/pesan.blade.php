@extends('usertemplate.mainuser')

@section('bodysec')

<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        
                    </div>
                    <div class="row">
                    @foreach ($film as $data_film)
                        <form action="/tambah/{{ $data_film->id }}" method="post" >
                                {{ csrf_field() }}
                            <div class="form-group">
                                <label>Nama film</label>
                                <input type="" class="form-control" value="{{ $data_film->judul_film }}" name="nama_film">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Pesan</label>
                                <input type="date" class="form-control" placeholder="Tanggal Film" name="tanggal">
                            </div>
                            <div class="form-group">
                                <label>Jam Tayang</label>
                                <input type="time" class="form-control" value="{{ $data_film->jam }}" name="jam" id="myTime">
                            </div>
                            <div class="form-group">
                                <label>Jumlah Tiket</label>
                                <input type="number" class="form-control" placeholder="Jumlah" name="jumlah">
                            </div>
                            <button type="submit" value="submit" class="btn btn-primary">Pesan</button>
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>

@endsection