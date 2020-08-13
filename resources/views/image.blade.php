<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">

        <form action= "upload" method = "post" enctype="multipart/form-data">
            @csrf
            <input type = "file" name = "image" />
            <br>
            <input type = "submit" name = "Upload" />
        </form>
        

        <br><br>
        <br><br>
        <img src="{{asset('/storage/' .'wait.png')}}" class="img-thumbnail" alt="Responsive image" style="width: 50%; height: 50%;">


    </div>


</body>
</html>


