<br>
<a href="{{route('form-siswa')}}">Tambah</a>
<br>
<br>
<table border="1">
  <tr>
    <td>nama</td>
    <td>jenis kelamin</td>
    <td>tgl lahir</td>
    <td>Edit</td>
    <td>Hapus</td>
  </tr>
  @foreach ($siswa as $siswa)
  <tr>
    <td>{{$siswa->nama_siswa}}</td>
    <td>{{$siswa->jk_siswa}}</td>
    <td>{{$siswa->tgl_lahir_siswa}}</td>
    <!-- <td><a href="{{route('hapus-siswa',$siswa->id_siswa)}}">Hapus</a></td> -->
    <td>{!! Form::open(array('route' => array('edit-siswa',$siswa->id_siswa), 'method'=>'get')) !!}
        {!! Form::submit('Edit') !!}
        {!! Form::close() !!}</td>
    <td>{!! Form::open(array('route' => array('siswa2.destroy',$siswa->id_siswa), 'method'=>'delete')) !!}
        {!! Form::submit('Delete') !!}
        {!! Form::close() !!}</td>
  </tr>
  @endforeach

</table>
