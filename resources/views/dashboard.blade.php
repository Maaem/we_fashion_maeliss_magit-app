<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/f497fb9706.js" crossorigin="anonymous"></script>
    <title>Dashboard</title>
</head>
<body>
    <!-- header -->


        <nav class="bg-blue-950 border-gray-200 dark:bg-gray-900">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
                <div href="" class="flex items-center">
                    <span class="self-center text-2xl font-semibold whitespace-nowrap text-[#66EB9A] dark:text-white">We Fashion - Dashboard</span>
                </div>
                <ul class="flex flex-row font-medium mt-0 mr-6 space-x-8 text-sm">
                        <li>
                            <a href="{{ route('dashboard')}}" class="text-[#66EB9A] dark:text-white" aria-current="page">Produits</a>
                        </li>
                        <li>
                            <a href="{{ route('categories')}}" class="text-[#66EB9A] dark:text-white">Categories</a>
                        </li>
                    </ul>
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
                
                <a href="{{ route('accueil')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#66EB9A" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                    </svg>
                </a>
            </div>
        </nav>


    <!-- fin header -->

    <!-- section -->

    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8 mt-12">

        <!--  -->
        <div class="ml-4 mt-4 flex-shrink-0 m-8 flex justify-end">
            <a href="{{ route('createproduct') }}" class="relative inline-flex items-center rounded-md text-[#66EB9A] px-3 py-2 text-sm font-semibold bg-blue-950 shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Nouveau</a>
        </div>
        <!--  -->

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nom
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Catégorie
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Prix
                        </th>
                        <th scope="col" class="px-6 py-3">
                            État
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($products as $product)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $product->name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $product->category_id }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $product->price }}€
                        </td>
                        <td class="px-6 py-4">
                            {{ $product->state }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('form', $product->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Modifier</a>
                        </td>
                        <form action="{{ route('dashboard.destroy', $product->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <td class="px-6 py-4">
                                <button onclick="return confirm('Are you sure you want to delete this product?')" class="font-medium text-red-600 dark:text-blue-500 hover:underline">Supprimer</button>
                            </td>
                        </form>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <!-- fin section -->

    {{ $products->links() }}

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>
</html>