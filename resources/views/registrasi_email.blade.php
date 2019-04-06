<form action="{{ url('sendmail') }}" method="POST">
    <input name="_token" type="hidden" value="{{ csrf_token() }}">
    <input type="text" name="nama" id="nama" placeholder="nama lengkap"><br>
    <input type="email" name="email" id="email" placeholder="rio@rio.co.id" width="1000"><br>
    <button type="submit">Registrasi</button>
</form>
