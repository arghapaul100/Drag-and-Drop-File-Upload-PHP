<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" 
    integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./asset/style.css">
    <title>Document</title>
</head>
<body>

<section id="main">
    <div class="" id="sec_main">
        <div id="parent" draggable="true">
            <div>
                <div id="browse_image_container" class="justify-content-center align-items-center d-flex">
                    <i class="fas fa-cloud-upload-alt" id="browse_image"></i>
                </div>
                <h3 id="text" class="text-center">Drag and Drop Here</h3>
                <div id="btn_container" class="justify-content-center align-items-center d-flex">
                    <button class="btn" id="btn_upload">Upload</button>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center d-flex m-3">
            <div class="col-lg-6 alert alert-success" id="alert" style="display:none"></div>
        </div>
        
    </div>
</section>

<script src="./asset/main.js"></script>

</body>
</html>