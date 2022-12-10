<h1>Tambahkan Berita Baru</h1>
<form action="/berita" method="post" enctype="multipart/form-data">
    @csrf
    Judul: <input type="text" name="title" /><br />
    Tanggal Tulis: <input type="date" name="post_date" /><br />
    Penulis: <input type="text" name="author" /><br />
    Isi:
    <textarea rows="20" cols="50" name="description"></textarea><br />
    Foto: <input type="file" name="photo" />
    <button type="submit">Submit</button>
</form>