@extends('layouts.masterKlorofil')


@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- TABLE HOVER -->
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="right">
                                <a href="/admin/exportExcel" class="btn btn-sm btn-primary">Export Excel</a>
                                <a href="/admin/exportPdf" class="btn btn-sm btn-primary">Export PDF</a>
                                <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">
                                    <i class="lnr lnr-plus-circle"></i>
                                </button>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover" id="datatable">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Role</th>
                                        <th>Instansi</th>
                                        <th>Email</th>
                                        <th>Instagram</th>
                                        <th>No Handphone</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <th>{{ $user->name }}</th>
                                        <th>{{ implode('. ', $user->roles()->get()->pluck('name')->toArray()) }}</th>
                                        <th>{{ $user->instansi }}</th>
                                        <th>{{ $user->email }}</th>
                                        <th>{{ $user->instagram }}</th>
                                        <th>{{ $user->noHandphone }}</th>
                                        <th>
                                            <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-primary btn-sm">
                                                Edit
                                            </a>
                                            <a href="{{ route('admin.impersonate', $user->id) }}" class="btn btn-success btn-sm">
                                                Impersonate User
                                            </a>
                                            <a href="#" class="btn btn-danger btn-sm delete" user-id="{{$user->id}}">Delete</a>
                                        </th>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END TABLE HOVER -->
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Anggota-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                
                <div class="modal-body">
                    <form action="/admin/create" method="POST" enctype="multipart/form-data" id="datatable">
                        {{csrf_field()}}
                        <div class="form-group {{$errors->has('name') ? ' has-error' : ''}}">
                            <label for="exampleInputEmail1">Nama Lengkap</label>
                            <input name="name" type="text" class="form-control" value="{{old('name')}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group {{$errors->has('jenis_kelamin') ? 'has-error' : ''}}">
                            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                                <option value="Laki-Laki" {{(old('jenis_kelamin') == 'Laki-Laki') ? ' selected' : ''}}>Laki-Laki</option>
                                <option value="Perempuan" {{(old('jenis_kelamin') == 'Perempuan') ? ' selected' : ''}}>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group {{$errors->has('tanggalLahir') ? ' has-error' : ''}}">
                            <label for="exampleInputEmail1">Tanggal Lahir</label>
                            <input name="tanggalLahir" type="date" class="form-control" value="{{old('tanggalLahir')}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Lahir">
                        </div>
                        <div class="form-group {{$errors->has('alamat') ? ' has-error' : ''}}">
                            <label for="exampleFormControlTextarea1">Alamat</label>
                            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{old('alamat')}}</textarea>
                        </div>
                        <div class="form-group {{$errors->has('instansi') ? ' has-error' : ''}}">
                            <label for="exampleInputEmail1">Instansi</label>
                            <input name="instansi" type="text" class="form-control" value="{{old('instansi')}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Instansi">
                        </div>
                        <div class="form-group {{$errors->has('email') ? ' has-error' : ''}}">
                            <label for="exampleInputEmail1">Email</label>
                            <input name="email" type="email" class="form-control" value="{{old('email')}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                        </div>
                        <div class="form-group {{$errors->has('instagram') ? ' has-error' : ''}}">
                            <label for="exampleInputEmail1">Instagram</label>
                            <input name="instagram" type="text" class="form-control" value="{{old('instagram')}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Instagram">
                        </div>
                        <div class="form-group {{$errors->has('noHandphone') ? ' has-error' : ''}}">
                            <label for="exampleInputEmail1">WhatsApp/No Handphone</label>
                            <input name="noHandphone" type="text" class="form-control" value="{{old('noHandphone')}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="WhatsApp/No Handphone">
                        </div>
                        <div class="form-group{{$errors->has('avatar') ? ' has-error' : ''}}">
                            <label for="exampleFormControlTextarea1">Avatar</label>
                            <input type="file" name="avatar" class="form-control">
                            @if($errors->has('avatar'))
                            <span class="help-block">{{$errors->first('avatar')}}</span>
                            @endif
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</<button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('footer')
<script>
    $(document).ready(function() {
        $('#datatable').DataTable();

        $('.delete').click(function() {
            var user_id = $(this).attr('user-id');
            swal({
                    title: "Are you sure?",
                    text: "akan menghapus data member dengan id " + user_id + " ?? ",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    console.log(willDelete);
                    if (willDelete) {
                        window.location = "/admin/users/" + user_id + "/destroy";
                    }
                });
        });
    
    });

    
</script>

@endsection