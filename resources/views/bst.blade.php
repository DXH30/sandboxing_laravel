<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <h1>Form pengiriman data Bst</h1>
        <p>Input data bst .txt disini</p>
        <div class="form-group">
            <label for="file_data">Input file Bst : </label>
            <input type="file" name="file_data" id="file_data" required>
        </div>
        <input type="submit" value="kirim">
    </form>
</body>
</html>
