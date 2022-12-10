<h1>Upload Foto</h1>
<form action="/photoacts" method="post" enctype="multipart/form-data">
    @csrf
    Foto: <input type="file" name="name" /><br />
    @foreach($newacts as $newact)
        <input type="radio" name="act_id" value="{{$newact->id}}"> {{$newact->act_name}}<br />
    @endforeach
    <button type="submit">Submit</button>
</form>