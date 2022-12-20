<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="resources/css/app.css">
  <link rel="preconnect" href="resources/css/font.css">
  <link rel="preconnect" href="resources/css/gambar.css">
  <link rel="preconnect" href="resources/js/app.js">
  <script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=allerta:400|plus-jakarta-sans:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet" />
<style>
  body {
    font-family: 'Plus Jakarta Sans', sans-serif;
  }
</style>
</head>
<h1>Renungan Baru</h1>
        <form action="/renungan" method="post">
            @csrf
            Judul: <input type="text" name="title" /><br />
            Tanggal: <input type="date" name="date" /><br />
            Isi:
            <div>
            <textarea rows="20" cols="50" name="content"></textarea><br />
            Doa:
            <textarea rows="5" cols="50" name="prayer"></textarea><br />
            <button type="submit">Submit</button>
        </form>
