@extends('layouts.app')
@section('content')
    <form method="post" action="{{route('upload')}}" enctype="multipart/form-data">
@csrf
        <label for="gambarBerita">Gambar Berita</label>
        <input id="gambarBerita" type="file" name="gambarBerita">
        <label for="judulBerita">Judul Berita</label>
        <input id="judulBerita" type="text" name="judulBerita">
        <input type="submit" value="Kirim">
    </form>
@foreach($storage as $s)
<ul>
<li>Path : {{$s['path'] ?? ''}}</li>
<li>Size : {{$s['size'] ?? ''}}</li>
<li>Exts : {{$s['extension'] ?? ''}}</li>
<li>judul_berita  : {{$cekstorage->getMetadata($s['path'])['metadata']['Judul_berita'] ?? ''}}</li>
<li>path : {{$cekstorage->getMetadata($s['path'])["path"] ?? ''}}</li>
<li>dirname : {{$cekstorage->getMetadata($s['path'])["dirname"] ?? ''}}</li>
<li>basename : {{$cekstorage->getMetadata($s['path'])["basename"] ?? ''}}</li>
<li>extension : {{$cekstorage->getMetadata($s['path'])["extension"] ?? ''}}</li>
<li>filename : {{$cekstorage->getMetadata($s['path'])["filename"] ?? ''}}</li>
<li>timestamp : {{$cekstorage->getMetadata($s['path'])["timestamp"] ?? ''}}</li>
<li>size : {{$cekstorage->getMetadata($s['path'])["size"] ?? ''}}</li>
<li>mimetype : {{$cekstorage->getMetadata($s['path'])["mimetype"] ?? ''}}</li>
<li>storageclass : {{$cekstorage->getMetadata($s['path'])["storageclass"] ?? ''}}</li>
<li>etag : {{$cekstorage->getMetadata($s['path'])["etag"] ?? ''}}</li>
<li>versionId : {{$cekstorage->getMetadata($s['path'])["versionid"] ?? ''}}</li>
<li>type : {{$cekstorage->getMetadata($s['path'])["type"] ?? ''}}</li>
<li><a href="{{$cekstorage->url($s['path']) ?? ''}}">Buka</a></li>
<li>Hapus : <a href="{{route('s3-hapus', ['path' => $s['path']])}}">Hapus</a></li>
</ul>
@endforeach
@endsection
