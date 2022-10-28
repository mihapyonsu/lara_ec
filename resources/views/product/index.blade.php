<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>商品一覧 | {{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a href="{{ route('product.index') }}" class="navbar-brand">{{ config('app.name', 'Laravel') }}</a>
            <a href="#" class="fas fa-shopping-cart"></a>
        </div>
    </nav>

</body>

<div class="jumbotron top-img">
    <div class="top__title text-center">
        All Product
    </div>
    <div class="row">
        @foreach ($products as $product)
            <a href="#" class="col-lg-4 col-md-6">
                <div class="card">
                    <img src="{{ asset($product->image) }}" alt="" class="card-img">
                    <div class="card-body">
                        <p class="card-title">{{ $product->name }}</p>
                        <p class="card-text">¥{{ number_format($product->price) }}</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>

</html>
