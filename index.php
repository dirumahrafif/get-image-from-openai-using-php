<?php
session_start();
$_SESSION['current_host'] = '1';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Create Your Image Here...</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
</head>

<body class="bg-secondary">
    <div class="container mx-auto text-center px-5 pt-3 pb-2 shadow mt-5 bg-white rounded"
        style="width:800px;max-width: 90%">
        <h3 class="mb-3">🍃 Insert Your Keyword Here 🍃</h3>
        <div class="mb-3">
            <input type="text" class="form-control border border-primary-subtle border-5 " id="idwords"
                placeholder="horse dancing" />
        </div>
        <div class="input-group mb-3">
            <select class="form-select" id="idsize">
                <option value="256x256">Small Size</option>
                <option value="512x512">Medium Size</option>
                <option value="1024x1024">Large Size</option>
            </select>
            <select class="form-select" id="idnum">
                <option value="1">1 image</option>
                <option value="2">2 images</option>
                <option value="3">3 images</option>
                <option value="4">4 images</option>
                <option value="5">5 images</option>
                <option value="6">6 images</option>
                <option value="7">7 images</option>
                <option value="8">8 images</option>
                <option value="9">9 images</option>
                <option value="10">10 images</option>
            </select>
        </div>
        <div class="mb-3">
            <button class="btn btn-warning btn-lg btn-create">Get Image</button>
        </div>

        <div class="py-2">
            <span class="loading"></span>
            <div class="contents pt-2 row"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="javascript.js"></script>
</body>

</html>