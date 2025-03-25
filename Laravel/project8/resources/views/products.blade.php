<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include("cdn")
</head>
<body>
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Discount</th>
                    <th>Rating</th>
                    <th>Stock</th>
                    <th>Warranty</th>
                    <th>Shipping</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product["id"]}}</td>
                        <td>{{ $product["title"]}}</td>
                        <td>{{ $product["description"]}}</td>
                        <td>{{ $product["category"]}}</td>
                        <td>{{ $product["price"]}}</td>
                        <td>{{ $product["discountPercentage"]}}</td>
                        <td>{{ $product["rating"]}}</td>
                        <td>{{ $product["stock"]}}</td>
                        <td>{{ $product["warrantyInformation"]}}</td>
                        <td>{{ $product["shippingInformation"]}}</td>
                        <td><img src={{ $product["thumbnail"]}} class="w-100 h-100"></td>
                        <td><button class="btn btn-primary">View</button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>