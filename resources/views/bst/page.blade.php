@extends('layouts.app')
@section('content')
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <h1>Form pengiriman data Bst</h1>
        <p>Input data bst .txt disini, fungsi ini digunakan untuk menginpt data dari csv txt langsung ke database.
        Sebelum mencoba fungsi ini harap php artisan migrate:fresh terlebih dahulu</p>
        <div class="form-group">
            <label for="file_data">Input file Bst : </label>
            <input type="file" name="file_data" id="file_data" required>
        </div>
        <input type="submit" value="kirim">
    </form>
@endsection
