<h1>Edit Berita</h1>
<form action="/activities/{{$activity->id}}" method="post">
    @method('PUT')
    @csrf
    Judul: <input type="text" name="title" value="{{$activity->title}}"/><br />
    Tanggal Tulis: <input type="date" name="post_date" value="{{$activity->post_date}}"/><br />
    Penulis: <input type="text" name="author" value="{{$activity->author}}"/><br />
    Isi:
    <textarea rows="20" cols="50" name="description">{{$activity->description}}</textarea><br />
    <button type="submit">Submit</button>
</form>