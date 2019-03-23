<form action="{{ url('registrasi') }}" method="POST">
    <input name="_token" type="hidden" value="{{ csrf_token() }}">
    <input type="text" name="nama" id="nama" placeholder="nama lengkap">
    <input type="email" name="email" id="email" placeholder="rio@rio.co.id">
    <button type="submit">Registrasi</button>
</form>
