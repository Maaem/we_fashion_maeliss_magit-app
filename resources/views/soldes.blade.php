<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>WE FASHION</title>
</head>
<body class="font-mono">

<div class="bg-white">

  <!-- Header -->

  @include('components/header')

  <!-- Fin Header -->
 

  <main>

    <!-- Textes -->
    <section aria-labelledby="collection-heading" class="mx-auto max-w-7xl px-4 pt-24 sm:px-6 sm:pt-32 lg:px-8">
      <h2 id="collection-heading" class="text-2xl font-bold tracking-tight text-gray-900">Shop by Collection</h2>
      <p class="mt-4 text-base text-gray-500">Each season, we collaborate with world-class designers to create a collection inspired by the natural world.</p>
    </section>

<!-- Listes des produits aléatoires -->
<div class="bg-white">
  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    <h2 id="products-heading" class="sr-only">Products</h2>

    <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">
    <a href="{{ route('produits') }}" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg sm:aspect-h-3 sm:aspect-w-2">
          <img src="https://tailwindui.com/img/ecommerce-images/category-page-01-image-card-02.jpg" alt="Paper card sitting upright in walnut card holder on desk." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900">
          <h3>Focus Card Holder</h3>
          <p>$64</p>
        </div>
        <p class="mt-1 text-sm italic text-gray-500">Walnut</p>
      </a>
      <a href="{{ route('produits') }}" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg sm:aspect-h-3 sm:aspect-w-2">
          <img src="https://tailwindui.com/img/ecommerce-images/category-page-01-image-card-02.jpg" alt="Paper card sitting upright in walnut card holder on desk." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900">
          <h3>Focus Card Holder</h3>
          <p>$64</p>
        </div>
        <p class="mt-1 text-sm italic text-gray-500">Walnut</p>
      </a>
      <a href="{{ route('produits') }}" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg sm:aspect-h-3 sm:aspect-w-2">
          <img src="https://tailwindui.com/img/ecommerce-images/category-page-01-image-card-02.jpg" alt="Paper card sitting upright in walnut card holder on desk." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900">
          <h3>Focus Card Holder</h3>
          <p>$64</p>
        </div>
        <p class="mt-1 text-sm italic text-gray-500">Walnut</p>
      </a>

      <!-- More products... -->
    </div>
  </div>
</div>

  </main>

  <!-- Footer -->

  @include('components/footer')

<!-- Fin Footer -->

  

</div>

</body>
</html>