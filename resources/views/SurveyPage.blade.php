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
    <title>Bonita | Survey</title>
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
                        Survey For: {{auth()->user()->name}}
                    </span>
            </li>
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

<main>
    <div class="mx-4">
        <div
            class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24"
        >
            <header class="text-center">
                <h2 class="text-2xl font-bold uppercase mb-1">Survey</h2>
                <p class="mb-4">answer some questions</p>
                
            </header>
            <form method="POST" action="survey">
                @csrf
                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                <div class="mb-6">
                <label for="hair_type" class="inline-block text-lg mb-2">Choose your Hair Type</label>
                <select name="hair_type" required id="hair_Type" class="border border-gray-200 rounded p-2 w-full">
                    <option></option>
                    <option value="Straight">Straight</option>
                    <option value="Wavy">Wavy</option>
                    <option value="Coily">Coily</option>
                    <option value="Curly">Curly</option>
                </select>
                    @error('hair_type')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                <label for="hair_Structure" class="inline-block text-lg mb-2">Choose your Hair Structure</label>
                <select name="hair_Structure" required id="hair_Structure" class="border border-gray-200 rounded p-2 w-full">
                    <option></option>
                    <option value="Fine">Fine</option>
                    <option value="Medium">Medium</option>
                    <option value="Coarse">Coarse</option>
                </select>
                    @error('hair_Structure')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                <label for="hair_Moisture" class="inline-block text-lg mb-2">Choose your Hair Moisture</label>
                <select name="hair_Moisture" required id="hair_Moisture" class="border border-gray-200 rounded p-2 w-full">
                    <option></option>
                    <option value="Dry">Dry</option>
                    <option value="Balanced">Balanced</option>
                    <option value="Oily">Oily</option>
                </select>
                    @error('hair_Moisture')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                <label for="hair_Thickness" class="inline-block text-lg mb-2">Choose your Hair Thickness</label>
                <select name="hair_Thickness" required id="hair_Thickness" class="border border-gray-200 rounded p-2 w-full">
                    <option></option>
                    <option value="Thin">Thin</option>
                    <option value="Medium">Medium</option>
                    <option value="Thick">Thick</option>
                </select>
                    @error('hair_Thickness')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                <label for="is_dyed" class="inline-block text-lg mb-2">Is your hair dyed</label>
                <select name="is_dyed" required id="is_dyed" class="border border-gray-200 rounded p-2 w-full">
                    <option></option>
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                </select>
                    @error('is_dyed')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="age" class="inline-block text-lg mb-2"> age </label>                        
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="age"
                           value="{{old('age')}}"/>

                    @error('age')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>               

                <div class="mb-6">
                    <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                        Submit
                    </button>
            </form>

        </div>
    </div>
</main>

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
