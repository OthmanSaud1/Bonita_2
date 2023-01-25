<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#ef3b2d",
                    },
                },
            },
        };
    </script>
    <title>Bonita | Find The Right Products For Your Hair</title>
</head>
<body class="mb-48">
<nav class="flex justify-between items-center mb-4">
    <a href="/"
    ><img class="w-60 ml-6" src="images/logo.png" alt="" class="logo"
        /></a>
    <ul class="flex space-x-6 mr-6 text-lg">

        @auth
            <li>
                    <span class="font-bold uppercase">
                        Welcome {{auth()->user()->name}}
                    </span>
            </li>
            @if(auth()->user()->role == 0)
                <p>
                    You are an admin!
                </p>
            @endif
            <li>
                <form class="inline" method="POST" action="logout">
                    @csrf
                    <button type="submit">
                        <i class="fa-solid fa-sign-out"></i> Logout
                    </button>

                </form>
            </li>

        @endauth
    </ul>
</nav>



<div>
ADMIN HOMEPAGE
    @foreach($products as $product)
        <div style="width: 50%; margin-left: auto; margin-right: auto; border: 2px solid black;">
            {{$product['product_name']}}

        </div>
        <p></p><br>
    @endforeach

</div>

{{-- <footer
class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center"
>
<p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>

<a
    href="create.html"
    class="absolute top-1/3 right-10 bg-black text-white py-2 px-5"
    >Post Job</a
>
</footer> --}}
</body>
</html>
