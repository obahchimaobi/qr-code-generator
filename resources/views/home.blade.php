<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QR Code Generator</title>

    {{-- BOOTSTRAP CDN --}}
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">

    {{-- GOOGLE FONT --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    {{-- FAVICON --}}
    <link rel="shortcut icon" href="{{ asset('assets/icon/qrcode.png') }}" type="image/x-icon">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>
    
    <div class="container mt-5 pt-5">
        <div class="m-auto text-center">
            <h5>QR CODE GENERATOR</h5>

            <form action="{{ route('qrcode.generate') }}" method="post" class="m-auto mt-4 col-xl-8">

                @csrf
                <input type="text" name="text" class="form-control p-3 shadow-none" @required(true) placeholder="Add Text">

                <div class="mt-3 d-grid">
                    <button class="btn btn-primary btn-lg">Generate QR Code</button>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>