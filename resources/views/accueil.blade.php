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
            <a href="#" class="-m-2 block p-2 font-medium text-white">Company</a>
          </div>
          <div class="flow-root">
            <a href="#" class="-m-2 block p-2 font-medium text-white">Stores</a>
          </div>
        </div>

        <div class="space-y-6 border-t border-gray-200 px-4 py-6">
          <div class="flow-root">
            <a href="#" class="-m-2 block p-2 font-medium text-white">Create an account</a>
          </div>
          <div class="flow-root">
            <a href="#" class="-m-2 block p-2 font-medium text-white">Sign in</a>
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
                    <a href="{{ route('accueil') }}" class="hidden text-sm font-medium text-[#66EB9A] lg:block">WE FASHION</a>
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
      <h2 id="collection-heading" class="text-2xl font-bold tracking-tight text-black">Shop by Collection</h2>
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
        <div class="mt-4 flex items-center justify-between text-base font-medium text-black">
          <h3>Focus Paper Refill</h3>
          <p>$13</p>
        </div>
        <p class="mt-1 text-sm italic text-gray-500">3 sizes available</p>
      </a>
      <a href="#" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg sm:aspect-h-3 sm:aspect-w-2">
          <img src="https://tailwindui.com/img/ecommerce-images/category-page-01-image-card-02.jpg" alt="Paper card sitting upright in walnut card holder on desk." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <div class="mt-4 flex items-center justify-between text-base font-medium text-black">
          <h3>Focus Card Holder</h3>
          <p>$64</p>
        </div>
        <p class="mt-1 text-sm italic text-gray-500">Walnut</p>
      </a>
      <a href="#" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg sm:aspect-h-3 sm:aspect-w-2">
          <img src="https://tailwindui.com/img/ecommerce-images/category-page-01-image-card-03.jpg" alt="Textured gray felt pouch for paper cards with snap button flap and elastic pen holder loop." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <div class="mt-4 flex items-center justify-between text-base font-medium text-black">
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

<!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<footer class="bg-black" aria-labelledby="footer-heading">
  <h2 id="footer-heading" class="sr-only">Footer</h2>
  <div class="mx-auto max-w-7xl px-6 pb-8 pt-20 sm:pt-24 lg:px-8 lg:pt-32">
    <div class="xl:grid xl:grid-cols-3 xl:gap-8">
      <div class="grid grid-cols-2 gap-8 xl:col-span-2">
        <div class="md:grid md:grid-cols-2 md:gap-8">
          <div>
            <h3 class="text-sm font-semibold leading-6 text-white">Informations</h3>
            <ul role="list" class="mt-6 space-y-4">
              <li>
                <a href="#" class="text-sm leading-6 text-white hover:text-white">Mentions Légales</a>
              </li>
              <li>
                <a href="#" class="text-sm leading-6 text-white hover:text-white">Presse</a>
              </li>
              <li>
                <a href="#" class="text-sm leading-6 text-white hover:text-white">Fabrication</a>
              </li>
            </ul>
          </div>
          <div class="mt-10 md:mt-0">
            <h3 class="text-sm font-semibold leading-6 text-white">Service Client</h3>
            <ul role="list" class="mt-6 space-y-4">
              <li>
                <a href="#" class="text-sm leading-6 text-white hover:text-white">Contactez-nous</a>
              </li>
              <li>
                <a href="#" class="text-sm leading-6 text-white hover:text-white">Livraison &amp; Retour</a>
              </li>
              <li>
                <a href="#" class="text-sm leading-6 text-white hover:text-white">Conditions de vente</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="md:grid md:grid-cols-2 md:gap-8">

        </div>
      </div>
      <div class="mt-10 xl:mt-0">
        <h3 class="text-sm font-semibold leading-6 text-white">inscrivez vous à la newsletter</h3>
        <form class="mt-6 sm:flex sm:max-w-md">
          <label for="email-address" class="sr-only">Email </label>
          <input type="email" name="email-address" id="email-address" autocomplete="email" required class="w-full min-w-0 appearance-none rounded-md border-0 bg-white px-3 py-1.5 text-base text-white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:w-64 sm:text-sm sm:leading-6 xl:w-full" placeholder="Enter your email">
          <div class="mt-4 sm:ml-4 sm:mt-0 sm:flex-shrink-0">
            <button type="submit" class="flex w-full items-center justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">S'abonner</button>
          </div>
        </form>
      </div>
    </div>
    <div class="mt-16 border-t border-gray-900/10 pt-8 sm:mt-20 md:flex md:items-center md:justify-between lg:mt-24">
      <div class="flex space-x-6 md:order-2">
        <a href="#" class="text-gray-400 hover:text-gray-500">
          <span class="sr-only">Facebook</span>
          <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
          </svg>
        </a>
        <a href="#" class="text-gray-400 hover:text-gray-500">
          <span class="sr-only">Instagram</span>
          <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>
      <p class="mt-8 text-xs leading-5 text-gray-500 md:order-1 md:mt-0">&copy; 2020 Your Company, Inc. All rights reserved.</p>
    </div>
  </div>
</footer>



  

</div>

</body>
</html>