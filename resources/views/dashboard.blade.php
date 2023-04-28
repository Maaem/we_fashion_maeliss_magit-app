<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <title>Dashboard</title>
</head>
<body>
    <!-- header -->


        <nav class="bg-blue-950 border-gray-200 dark:bg-gray-900">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
                <a href="https://flowbite.com" class="flex items-center">
                    <span class="self-center text-2xl font-semibold whitespace-nowrap text-[#66EB9A] dark:text-white">We Fashion - Dashboard</span>
                </a>
                <div class="flex items-center">
                    @auth
                    <a href="tel:5541251234" class="mr-6 text-sm  text-gray-500 dark:text-white">Bonjour {{ \Illuminate\Support\Facades\Auth::user()->name }}</a>
                    <form action="{{ route('auth.logout')}}" method="post">
                        @method('delete')
                        @csrf
                        <button class="text-sm  text-[#66EB9A] dark:text-blue-500">Se deconnecter</button> 
                    </form>
                    @endauth

                    @guest
                        <a href="{{ route('auth.login')}}" class="text-sm  text-[#66EB9A] dark:text-blue-500">Se connecter</a>
                    @endguest
                </div>
            </div>
        </nav>
        <nav class="bg-gray-700 dark:bg-gray-700">
            <div class="max-w-screen-xl px-4 py-3 mx-auto">
                <div class="flex items-center">
                    <ul class="flex flex-row font-medium mt-0 mr-6 space-x-8 text-sm">
                        <li>
                            <a href="#" class="text-[#66EB9A] dark:text-white hover:underline" aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#" class="text-[#66EB9A] dark:text-white hover:underline">Company</a>
                        </li>
                        <li>
                            <a href="#" class="text-[#66EB9A] dark:text-white hover:underline">Team</a>
                        </li>
                        <li>
                            <a href="#" class="text-[#66EB9A] dark:text-white hover:underline">Features</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


    <!-- fin header -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>
</html>