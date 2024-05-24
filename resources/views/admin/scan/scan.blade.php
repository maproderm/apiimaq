{{-- @extends('administrator.index')
@section('title','Productos | MaProDerm')
@section('content')



    <body>
        <h1>Scan Barcode</h1>
        <div id="interactive" class="viewport"></div>
        <p id="product-description"></p>

        <script>
            Quagga.init({
                inputStream: {
                    name: "Live",
                    type: "LiveStream",
                    target: document.querySelector('#interactive')    // Or '#yourElement' (optional)
                },
                decoder: {
                    readers: ["code_128_reader"] // List of active readers
                }
            }, function (err) {
                if (err) {
                    console.log(err);
                    return
                }
                console.log("Initialization finished. Ready to start");
                Quagga.start();
            });

            Quagga.onDetected(function (data) {
                var code = data.codeResult.code;
                fetch('/scan', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ barcode: code })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        document.getElementById('product-description').innerText = data.description;
                    } else {
                        document.getElementById('product-description').innerText = 'Product not found';
                    }
                });
            });
        </script>
    </body>




@endsection --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scan Barcode</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/quagga/0.12.1/quagga.min.js"></script>
</head>
<body>
    <h1>Scan Barcode</h1>
    <div id="interactive" class="viewport"></div>
    <p id="product-description"></p>

    <script>
        Quagga.init({
            inputStream: {
                name: "Live",
                type: "LiveStream",
                target: document.querySelector('#interactive')    // Or '#yourElement' (optional)
            },
            decoder: {
                readers: ["code_128_reader"] // List of active readers
            }
        }, function (err) {
            if (err) {
                console.log(err);
                return
            }
            console.log("Initialization finished. Ready to start");
            Quagga.start();
        });

        Quagga.onDetected(function (data) {
            var code = data.codeResult.code;
            fetch('/scan', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ barcode: code })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    document.getElementById('product-description').innerText = data.description;
                } else {
                    document.getElementById('product-description').innerText = 'Product not found';
                }
            });
        });
    </script>
</body>
</html>


