<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>WE FASHION</title>
</head>
<body>
 <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
<div class="bg-white">
  <!--
    Mobile Hommeu

    Off-canvas Hommeu for mobile, show/hide based on off-canvas Hommeu state.
  -->
  <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
    <!--
      Off-canvas Hommeu backdrop, show/hide based on off-canvas Hommeu state.

      Entering: "transition-opacity ease-linear duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "transition-opacity ease-linear duration-300"
        From: "opacity-100"
        To: "opacity-0"
    -->
    <div class="fixed inset-0 bg-black bg-opacity-25"></div>

    <div class="fixed inset-0 z-40 flex">
      <!--
        Off-canvas Hommeu, show/hide based on off-canvas Hommeu state.

        Entering: "transition ease-in-out duration-300 transform"
          From: "-translate-x-full"
          To: "translate-x-0"
        Leaving: "transition ease-in-out duration-300 transform"
          From: "translate-x-0"
          To: "-translate-x-full"
      -->
      <div class="relative flex w-full max-w-xs flex-col overflow-y-auto bg-white pb-12 shadow-xl">
        <div class="flex px-4 pb-2 pt-5">
          <button type="button" class="-m-2 inline-flex items-center justify-center rounded-md p-2 text-gray-400">
            <span class="sr-only">Close Hommeu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>

        <div class="space-y-6 border-t border-gray-200 px-4 py-6">
          <div class="flow-root">
            <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Company</a>
          </div>
          <div class="flow-root">
            <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Stores</a>
          </div>
        </div>

        <div class="space-y-6 border-t border-gray-200 px-4 py-6">
          <div class="flow-root">
            <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Create an account</a>
          </div>
          <div class="flow-root">
            <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Sign in</a>
          </div>
        </div>

        <div class="space-y-6 border-t border-gray-200 px-4 py-6">
        </div>
      </div>
    </div>
  </div>

  <!-- Hero section -->
  <div class="relative bg-gray-900">
    <!-- Decorative image and overlay -->
    <div aria-hidden="true" class="absolute inset-0 overflow-hidden">
      <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-hero-full-width.jpg" alt="" class="h-full w-full object-cover object-center">
    </div>
    <div aria-hidden="true" class="absolute inset-0 bg-gray-900 opacity-50"></div>

    <!-- Navigation -->
    <header class="relative z-10">
      <nav aria-label="Top">
        <!-- Top navigation -->

        <!-- Secondary navigation -->
        <div class="bg-black">
          <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            
            <div>
              <div class="flex h-16 items-center justify-between">
                
                <!-- Logo (lg+) -->
                <div class="flex flex-1 items-center justify-start">
                    <a href="#" class="hidden text-sm font-medium text-[#66EB9A] lg:block">WE FASHION</a>
                </div>

                <div class="hidden h-full lg:flex">
                  <!-- Flyout Hommeus -->
                  <div class="inset-x-0 bottom-0 px-4">
                    <div class="flex h-full justify-center space-x-8">
                      <div class="flex">
                        <div class="relative flex">
                          <button type="button" class="relative z-10 flex items-center justify-center text-sm font-medium text-white transition-colors duration-200 ease-out" aria-expanded="false">
                            <a href="{{ route('soldes') }}">Soldes</a>
                            <!-- Open: "bg-white", Closed: "" -->
                            <span class="absolute inset-x-0 -bottom-px h-0.5 transition duration-200 ease-out" aria-hidden="true"></span>
                          </button>
                        </div>

                        <!--
                          'Femme' flyout Hommeu, show/hide based on flyout Hommeu state.

                          Entering: "transition ease-out duration-200"
                            From: "opacity-0"
                            To: "opacity-100"
                          Leaving: "transition ease-in duration-150"
                            From: "opacity-100"
                            To: "opacity-0"
                        -->
                        <div class="absolute inset-x-0 top-full text-sm text-gray-500">
                          <!-- Presentational eleHommet used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter eleHommet to hide the top of the shadow -->
                          <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>

                        </div>
                      </div>
                      <div class="flex">
                        <div class="relative flex">
                          <button type="button" class="relative z-10 flex items-center justify-center text-sm font-medium text-white transition-colors duration-200 ease-out" aria-expanded="false">
                          <a href="{{ route('femme') }}">Femme</a>
                            <!-- Open: "bg-white", Closed: "" -->
                            <span class="absolute inset-x-0 -bottom-px h-0.5 transition duration-200 ease-out" aria-hidden="true"></span>
                          </button>
                        </div>

                        <!--
                          'Femme' flyout Hommeu, show/hide based on flyout Hommeu state.

                          Entering: "transition ease-out duration-200"
                            From: "opacity-0"
                            To: "opacity-100"
                          Leaving: "transition ease-in duration-150"
                            From: "opacity-100"
                            To: "opacity-0"
                        -->
                        <div class="absolute inset-x-0 top-full text-sm text-gray-500">
                          <!-- Presentational eleHommet used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter eleHommet to hide the top of the shadow -->
                          <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>

                          <div class="relative bg-white">
                           
                          </div>
                        </div>
                      </div>

                      <a href="{{ route('homme') }}" class="flex items-center text-sm font-medium text-white">Homme</a>
                    </div>
                  </div>
                </div>

                <!-- Logo (lg-) -->



                <div class="flex flex-1 items-center justify-end">

                  <div class="flex items-center lg:ml-8">

                    <!-- Panier -->
                    <div class="ml-4 flow-root lg:ml-8">
                      <a href="#" class="group -m-2 flex items-center p-2">
                        <svg class="h-6 w-6 flex-shrink-0 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>
                        <span class="ml-2 text-sm font-medium text-white">0</span>
                        <span class="sr-only">items in Panier, view bag</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>

  </div>

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
      <a href="#" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg sm:aspect-h-3 sm:aspect-w-2">
          <img src="https://tailwindui.com/img/ecommerce-images/category-page-01-image-card-01.jpg" alt="Person using a pen to cross a task off a productivity paper card." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900">
          <h3>Focus Paper Refill</h3>
          <p>$13</p>
        </div>
        <p class="mt-1 text-sm italic text-gray-500">3 sizes available</p>
      </a>
      <a href="#" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg sm:aspect-h-3 sm:aspect-w-2">
          <img src="https://tailwindui.com/img/ecommerce-images/category-page-01-image-card-02.jpg" alt="Paper card sitting upright in walnut card holder on desk." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900">
          <h3>Focus Card Holder</h3>
          <p>$64</p>
        </div>
        <p class="mt-1 text-sm italic text-gray-500">Walnut</p>
      </a>
      <a href="#" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg sm:aspect-h-3 sm:aspect-w-2">
          <img src="https://tailwindui.com/img/ecommerce-images/category-page-01-image-card-03.jpg" alt="Textured gray felt pouch for paper cards with snap button flap and elastic pen holder loop." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900">
          <h3>Focus Carry Case</h3>
          <p>$32</p>
        </div>
        <p class="mt-1 text-sm italic text-gray-500">Heather Gray</p>
      </a>

      <!-- More products... -->
    </div>
  </div>
</div>

  </main>

  

</div>

</body>
</html>