<h1>Edit Aktivitas Gereja</h1>
<form action="/newacts/{{$newact->id}}" method="post">
    @method('PUT')
    @csrf
    Nama Aktivitas: <input type="text" name="act_name" value="{{$newact->act_name}}"/><br />
    Tanggal Aktivitas: <input type="date" name="act_date" value="{{$newact->act_date}}"/><br />
    Kategori: <input type="text" name="category" value="{{$newact->category}}"/><br />
    Deskripsi:
    <textarea rows="20" cols="50" name="description">{{$newact->description}}</textarea><br />
    <button type="submit">Submit</button>
</form>