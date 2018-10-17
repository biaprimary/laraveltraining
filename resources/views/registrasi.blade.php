<h1>Form Registrasi</h1>
<form method="post" action="{{route('registrasi.store')}}">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <label for="username">Username</label>
    <input type="text" id="username" name="username"><br>
  <label for="password">Password</label>
    <input type="password" id="password" name="password"><br>
  <label for="nama">Nama</label>
    <input type="text" id="nama" name="nama" value="{{old('nama')}}"><br>
  <label for="umur">Umur</label>
    <input type="text" id="umur" name="umur" value="{{old('umur')}}"><br>
  <input type="submit">
</form>
