<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action= "upload" method = "post" enctype="multipart/form-data">
            @csrf
            <input type = "file" name = "image" />
            <br>
            <input type = "submit" name = "Upload" />
        </form>
    </div>
</body>
</html>