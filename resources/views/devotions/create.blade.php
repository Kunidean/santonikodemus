
<div class="bg-[#009CAD]">
<h1>Renungan Baru</h1>
<form action="/renungan" method="post">
    @csrf
    Judul: <input type="text" name="title" /><br />
    Tanggal: <input type="date" name="date" /><br />
    Isi:
    <textarea rows="20" cols="50" name="content"></textarea><br />
    Doa:
    <textarea rows="5" cols="50" name="prayer"></textarea><br />
    <button type="submit">Submit</button>
</form>
</div>
