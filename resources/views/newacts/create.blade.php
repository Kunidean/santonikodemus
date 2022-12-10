<h1>Tambahkan Aktivitas Gereja</h1>
<form action="/aktivitas" method="post">
    @csrf
    Nama Aktivitas: <input type="text" name="act_name" /><br />
    Tanggal Aktivitas: <input type="date" name="act_date" /><br />
    Kategori: <input type="text" name="category" /><br />
    Deskripsi:
    <textarea rows="20" cols="50" name="description"></textarea><br />
    <button type="submit">Submit</button>
</form>