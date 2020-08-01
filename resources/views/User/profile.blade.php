@extends('layouts.masterKlorofil')

@section('content')
<div id="wrapper">
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="div col-md-8">
                        <!-- PROFILE HEADER -->
                        <div class="profile-header">
                            <div class="overlay"></div>
                            <div class="profile-main">
                                <img src="{{asset('images/'.$user->avatar) }}" class="img-circle" alt="Avatar" width="150px" height="150px">
                                <h3 class="name">{{ $user->name}}</h3>
                            </div>
                            <div class="profile-stat">
                                <div class="row">
                                    <div class="col-md-4 stat-item">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END PROFILE HEADER -->

                        <!-- PROFILE DETAIL -->
                        <div class="profile-detail">
                            <div class="profile-info">
                                <h4 class="heading">Basic Info</h4>
                                <div class="row">
                                    <ul class="list-unstyled list-justify">
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <strong>Nama</strong>
                                                </div>
                                                <div>
                                                    :
                                                    {{ $user->name}}<br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <strong>Jenis Kelamin </strong>
                                                </div>
                                                <div>
                                                    :
                                                    {{ $user->gender}}<br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <strong>Tanggal Lahir </strong>
                                                </div>
                                                <div>
                                                    :
                                                    {{ $user->tanggalLahir}}<br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <strong>Alamat </strong>
                                                </div>
                                                <div>
                                                    :
                                                    {{ $user->alamat}}<br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <strong>Instansi </strong>
                                                </div>
                                                <div>
                                                    :
                                                    {{ $user->instansi}}<br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <strong>Email </strong>
                                                </div>
                                                <div>
                                                    :
                                                    {{ $user->email}}<br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <strong>Instagram </strong>
                                                </div>
                                                <div>
                                                    :
                                                    {{ $user->instagram}}<br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <strong>No Handphone </strong>
                                                </div>
                                                <div>
                                                    :
                                                    {{ $user->noHandphone}}<br>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                </div>

                            </div>
                            <div class="row">
                                <div class="profile-info">
                                    <h4 class="heading">About</h4>
                                    <p>Interactively fashion excellent information after distinctive outsourcing.</p>
                                </div>
                            </div>

                            <div class="text-center"><a href="/user/users/{{ $user->id }}/edit" class="btn btn-primary">Edit Profile</a></div>
                        </div>
                        <!-- END PROFILE DETAIL -->
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection