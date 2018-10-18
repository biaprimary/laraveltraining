


{!! Form::open(array('route' => array('siswa2.update',$siswa->id_siswa), 'method'=>'put')) !!}
<table>
  <!-- <tr>
    <td>ID Siswa</td>
    <td>{!! Form::text('id_siswa', $siswa->id_siswa) !!}</td>
  </tr> -->
  <tr>
    <td>Nama Siswa</td>
    <td>{!! Form::text('nama_siswa', $siswa->nama_siswa) !!}</td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td>{!! Form::text('jk_siswa', $siswa->jk_siswa) !!}</td>
  </tr>
  <tr>
    <td>Tanggal Lahir</td>
    <td>{!! Form::text('tgl_lahir_siswa', $siswa->tgl_lahir_siswa) !!}</td>
  </tr>
  <tr>
    <td align="right" colspan="2">{!! Form::submit('Edit') !!}</td>
  </tr>
</table>
{!! Form::close() !!}
