<table class="table" style="border:1px solid #ddd">
    <thead>
        <tr>
            <th>NAMA LENGKAP</th>
            <th>EMAIL</th>
            <th>JENIS KELAMIN</th>
            <th>TANGGAL LAHIR</th>
            <th>ALAMAT</th>
            <th>INSTANSI</th>
            <th>INSTAGRAM</th>
            <th>NO HANDPHONE</th>
        </tr>
    </thead>
    <tbody>
        @foreach($user as $s)
        <tr>
            <td>{{$s->name}}</td>
            <td>{{$s->email}}</td>
            <td>{{$s->gender}}</td>
            <td>{{$s->tanggalLahir}}</td>
            <td>{{$s->alamat}}</td>
            <td>{{$s->instansi}}</td>
            <td>{{$s->instagram}}</td>
            <td>{{$s->noHandphone}}</td>
        </tr>
        @endforeach
    </tbody>


</table>