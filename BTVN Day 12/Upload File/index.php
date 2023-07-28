<html>
<head>
    <title>Upload Image</title>
    <style>
        body {
            font-family: Time New Roman;
            text-align: center;
            margin-top: 60px;
        }

        h1 {
            color:violet;
        }

        #image {
            margin-bottom: 15px;
            width: 300px;
            height: 25;
        }


        #uploaded-image img {
            max-width: 300px;
            margin: 10px;
            border: 1px solid #007FFF;
            border-radius: 4px;
            padding: 5px;
           
        }
    </style>
</head>
<body>
    <h1>Tải hình ảnh</h1>
    <form action="upload.php" method="post">
        <input type="file" name="image" id="image">
        <br>
        <input type="submit" name="submit" value="Tải lên">
    </form>


    <div id="uploaded-image">
        <!-- Hiển thị hình ảnh tải lên ở đây -->
    </div>
</body>
</html>