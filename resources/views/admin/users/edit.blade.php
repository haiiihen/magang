@extends('layouts.masterKlorofil')

@section('content')
<div id="wrapper">
    <div class="main">
        <div class="main-content-center">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="div col-md-8">
                        <!-- INPUTS -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="name">{{ $user->name}}</h3>
                            </div>
                            <div class="panel-body">
                                <form action="{{ route('admin.users.update', ['user' => $user->id]) }}" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="div col-md-9">
                                            @csrf
                                            {{ method_field('put') }}
                                            @foreach($roles as $role)
                                            <div class="form-check">
                                                <input type="checkbox" name="roles[]" value="{{ $role->id }}" {{ $user->hasAnyRole($role->name)?'checked':''}}>
                                                <label> {{ $role->name }}</label>
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="div col-md-3">
                                            <img src="{{asset('images/'.$user->avatar) }}" class="img-circle" alt="Profile Pict" width="100px" height="100px">
                                        </div>
                                    </div>
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama</label>
                                            <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap" value="{{$user->name}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                                            <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                                                <option value="L" @if($user->jenis_kelamin == 'Laki-Laki') selected @endif>Laki-Laki</option>
                                                <option value="P" @if($user->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tanggal Lahir</label>
                                            <input name="tanggalLahir" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Lahir" value="{{$user->tanggalLahir}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Alamat</label>
                                            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$user->alamat}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Instansi</label>
                                            <input name="instansi" type="form-control" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Instansi" value="{{$user->instansi}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input name="email" type="form-control" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" value="{{$user->email}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Instagram</label>
                                            <input name="instagram" type="form-control" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Instagram" value="{{$user->instagram}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">No Handphone</label>
                                            <input name="noHandphone" type="form-control" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Handphone" value="{{$user->noHandphone}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Avatar</label>
                                            <input type="file" name="avatar" class="form-control">
                                        </div>
                                            <br><button style="float:right" type="submit" class="btn btn-primary">Update</<button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- END INPUTS -->
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection