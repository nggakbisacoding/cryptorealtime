<form method="POST" action="{{ route('store') }}">
    @csrf
    <input type="text" name="name" placeholder="Komik Name">
    <input type="submit" value="Simpan">
</form>