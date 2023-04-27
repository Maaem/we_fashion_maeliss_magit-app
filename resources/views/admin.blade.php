<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>   
    <title>WE FASHION - ADMIN</title>
</head>
<body class="font-mono bg-blue-950">
    
<div class="flex min-h-full items-center justify-center px-4 py-12 sm:px-6 lg:px-8 mt-36">
  <div class="w-full max-w-sm space-y-10">
    <div>
      <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-white">Connexion</h2>
    </div>
    <div class="bg-white px-6 py-12 shadow sm:rounded-lg sm:px-12">
    <form class="space-y-6" action="{{ route('auth.login') }}" method="POST">
      @csrf
      <div class="relative -space-y-px rounded-md shadow-sm">
        <div class="pointer-events-none absolute inset-0 z-10 rounded-md ring-1 ring-inset ring-gray-300"></div>
        <div>
          <label for="email" class="sr-only">Email</label>
          <input id="email" name="email" type="email" autocomplete="email" required class="relative block w-full rounded-t-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-100 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Email" value="{{ old('email') }}">
            @error("email")
              {{ ($message) }}
            @enderror
        </div>
        <div>
          <label for="password" class="sr-only">Mot de Passe</label>
          <input id="password" name="password" type="password" autocomplete="current-password" required class="relative block w-full rounded-b-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-100 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Mot de passe">
             @error("password")
              {{ ($message) }}
            @enderror
        </div>
      </div>

      <div class="flex items-center justify-between">
        <div class="flex items-center">
        </div>

        <div class="text-sm leading-6">
        </div>
      </div>

      <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-blue-950 px-3 py-1.5 text-sm font-semibold leading-6 text-white hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Se connecter</button>
      </div>
    </form>
    </div>
  </div>
</div>



    
</body>
</html>