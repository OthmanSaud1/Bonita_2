<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        <a href="/"><img class="w-60 ml-6" src="images/logo.png" alt="" class="logo" /></a>
        <ul class="flex space-x-6 mr-6 text-lg">

            @auth
                <li>
                    <span class="font-bold uppercase">
                        Welcome {{ auth()->user()->name }}
                    </span>
                </li>
                @if (auth()->user()->role == 0)
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


    <section class="bg-white dark:bg-gray-900">
        <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-2xl mx-auto mt-24">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add a new product</h2>
            <form action="post_product" method="POST">
                @csrf
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6 ">
                    <div class="sm:col-span-2">
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Name</label>
                        <input type="text" name="name" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Type product name" required="">
                        <label for="brand"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Brand</label>
                        <input type="text" name="brand" id="brand"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Product brand" required="">
                    </div>

                    <div class="w-full">
                        <label for="price"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                        <input type="number" name="price" id="price"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="$10" required="">
                    </div>
                    <div>
                        <label for="age" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Age?
                            (older than) </label>
                        <input type="number" name="age" id="age"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="12" required="">
                    </div>
                    <div>
                        <label for="category"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                        <select id="category" name="category"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected=""></option>
                            <option value="Shampoo">Shampoo</option>
                            <option value="Conditioner">Conditioner</option>
                            <option value="Leave_In_Conditioner">Leave_In_Conditioner</option>
                            <option value="Gel">Gel</option>
                            <option value="Hair_Volume">Hair Volume</option>
                            <option value="Hair_wash">Hair Wash</option>
                        </select>
                    </div>
                    <div>
                        <label for="Type"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type</label>
                        <select id="Type" name="Type"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected=""></option>
                            <option value="Protein">Protein</option>
                            <option value="moisturizer">moisturizer</option>
                        </select>
                    </div>
                    <div>
                        <label for="has_sulfate"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contains
                            Sulfate?</label>
                        <select id="has_sulfate" name="has_sulfate"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected=""></option>
                            <option value="0">NO</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
                    <div>
                        <label for="has_silicon"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contains
                            Silicon?</label>
                        <select id="has_silicon" name="has_silicon"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected=""></option>
                            <option value="0">NO</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>

                    <div>
                        <label for="web_site"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Web site name:</label>
                        <input type="text" name="web_site" id="web_site"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Ex: IHerb" required="">
                    </div>
                    <div>
                        <label for="URL"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Web site URL:</label>
                        <input type="text" name="URL" id="URL"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="URL" required="">
                    </div>

                    <div class="sm:col-span-2">

                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            for="Image">Upload Image</label>
                        <input required name="image"
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            id="Image" type="file">

                    </div>

                    <div class="sm:col-span-2">

                        <label for="description"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <textarea id="description" rows="8"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Your description here"></textarea>
                    </div>
                </div>
                <button type="submit"
                    class="mt-5 bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                    Submit
                </button>
            </form>
        </div>
    </section>



    {{-- <div>
        ADMIN HOMEPAGE
        @foreach ($products as $product)
            <div style="width: 50%; margin-left: auto; margin-right: auto; border: 2px solid black;">
                {{ $product['product_name'] }}

            </div>
            <p></p><br>
        @endforeach

    </div> --}}

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
