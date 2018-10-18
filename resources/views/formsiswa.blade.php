<!-- <form method="post" action="{{route('insert-siswa')}}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
  <table>
    <tr>
      <td>ID Siswa</td>
      <td><input type="text" name="id_siswa"></td>
    </tr>
    <tr>
      <td>Nama Siswa</td>
      <td><input type="text" name="nama_siswa"></td>
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td><input type="text" name="jk_siswa"></td>
    </tr>
    <tr>
      <td>Tanggal Lahir</td>
      <td><input type="text" name="tgl_lahir_siswa"></td>
    </tr>
    <tr>
      <td align="right" colspan="2"><input type="submit" value="simpan"></td>
    </tr>
  </table>
</form> -->



{!! Form::open(array('route' => array('siswa2.store'), 'method'=>'post')) !!}
<table>
  <!-- <tr>
    <td>ID Siswa</td>
    <td>{!! Form::text('id_siswa') !!}</td>
  </tr> -->
  <tr>
    <td>Nama Siswa</td>
    <td>{!! Form::text('nama_siswa') !!}</td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td>{!! Form::text('jk_siswa') !!}</td>
  </tr>
  <tr>
    <td>Tanggal Lahir</td>
    <td>{!! Form::text('tgl_lahir_siswa') !!}</td>
  </tr>
  <tr>
    <td align="right" colspan="2">{!! Form::submit('Tambah') !!}</td>
  </tr>
</table>
{!! Form::close() !!}
