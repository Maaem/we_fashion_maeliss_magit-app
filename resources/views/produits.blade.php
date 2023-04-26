<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">    
    <title>WE FASHION</title>
</head>
<body class="font-mono">

<div class="bg-white">

    <!-- Header -->

    @include('components/header')

    <!-- Fin Header -->


    <main>

            <div class="bg-white">
            <div class="pb-16 pt-28 sm:pb-24">
                <div class="mx-auto mt-8 max-w-2xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                <div class="lg:grid lg:auto-rows-min lg:grid-cols-12 lg:gap-x-8">
                    <div class="lg:col-span-5 lg:col-start-8">
                    <div class="flex justify-between">
                        <h1 class="text-xl font-medium text-gray-900">Basic Tee</h1>
                        <p class="text-xl font-medium text-gray-900">$35</p>
                    </div>
                    </div>

                    <!-- Image gallery -->
                    <div class="mt-8 lg:col-span-7 lg:col-start-1 lg:row-span-3 lg:row-start-1 lg:mt-0">
                    <h2 class="sr-only">Images</h2>

                    <div class="grid grid-cols-1 lg:grid-cols-2 lg:grid-rows-2 lg:gap-8">
                        <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-featured-product-shot.jpg" alt="Back of women&#039;s Basic Tee in black." class="lg:col-span-2 lg:row-span-2 rounded-lg">
                        <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-product-shot-01.jpg" alt="Side profile of women&#039;s Basic Tee in black." class="hidden lg:block rounded-lg">
                        <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-product-shot-02.jpg" alt="Front of women&#039;s Basic Tee in black." class="hidden lg:block rounded-lg">
                    </div>
                    </div>

                    <div class="mt-8 lg:col-span-5">
                    <form>
                        <!-- Size picker -->
                        <div class="mt-8">
                        <div class="flex items-center justify-between">
                            <h2 class="text-sm font-medium text-gray-900">Size</h2>
                            <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">See sizing chart</a>
                        </div>

                        <fieldset class="mt-2">
                            <legend class="sr-only">Choose a size</legend>
                            <div class="grid grid-cols-3 gap-3 sm:grid-cols-6">
                            <!--
                                In Stock: "cursor-pointer", Out of Stock: "opacity-25 cursor-not-allowed"
                                Active: "ring-2 ring-indigo-500 ring-offset-2"
                                Checked: "border-transparent bg-indigo-600 text-white hover:bg-indigo-700", Not Checked: "border-gray-200 bg-white text-gray-900 hover:bg-gray-50"
                            -->
                            <label class="flex items-center justify-center rounded-md border py-3 px-3 text-sm font-medium uppercase sm:flex-1 cursor-pointer focus:outline-none">
                                <input type="radio" name="size-choice" value="XXS" class="sr-only" aria-labelledby="size-choice-0-label">
                                <span id="size-choice-0-label">XXS</span>
                            </label>
                            <!--
                                In Stock: "cursor-pointer", Out of Stock: "opacity-25 cursor-not-allowed"
                                Active: "ring-2 ring-indigo-500 ring-offset-2"
                                Checked: "border-transparent bg-indigo-600 text-white hover:bg-indigo-700", Not Checked: "border-gray-200 bg-white text-gray-900 hover:bg-gray-50"
                            -->
                            <label class="flex items-center justify-center rounded-md border py-3 px-3 text-sm font-medium uppercase sm:flex-1 cursor-pointer focus:outline-none">
                                <input type="radio" name="size-choice" value="XS" class="sr-only" aria-labelledby="size-choice-1-label">
                                <span id="size-choice-1-label">XS</span>
                            </label>
                            <!--
                                In Stock: "cursor-pointer", Out of Stock: "opacity-25 cursor-not-allowed"
                                Active: "ring-2 ring-indigo-500 ring-offset-2"
                                Checked: "border-transparent bg-indigo-600 text-white hover:bg-indigo-700", Not Checked: "border-gray-200 bg-white text-gray-900 hover:bg-gray-50"
                            -->
                            <label class="flex items-center justify-center rounded-md border py-3 px-3 text-sm font-medium uppercase sm:flex-1 cursor-pointer focus:outline-none">
                                <input type="radio" name="size-choice" value="S" class="sr-only" aria-labelledby="size-choice-2-label">
                                <span id="size-choice-2-label">S</span>
                            </label>
                            <!--
                                In Stock: "cursor-pointer", Out of Stock: "opacity-25 cursor-not-allowed"
                                Active: "ring-2 ring-indigo-500 ring-offset-2"
                                Checked: "border-transparent bg-indigo-600 text-white hover:bg-indigo-700", Not Checked: "border-gray-200 bg-white text-gray-900 hover:bg-gray-50"
                            -->
                            <label class="flex items-center justify-center rounded-md border py-3 px-3 text-sm font-medium uppercase sm:flex-1 cursor-pointer focus:outline-none">
                                <input type="radio" name="size-choice" value="M" class="sr-only" aria-labelledby="size-choice-3-label">
                                <span id="size-choice-3-label">M</span>
                            </label>
                            <!--
                                In Stock: "cursor-pointer", Out of Stock: "opacity-25 cursor-not-allowed"
                                Active: "ring-2 ring-indigo-500 ring-offset-2"
                                Checked: "border-transparent bg-indigo-600 text-white hover:bg-indigo-700", Not Checked: "border-gray-200 bg-white text-gray-900 hover:bg-gray-50"
                            -->
                            <label class="flex items-center justify-center rounded-md border py-3 px-3 text-sm font-medium uppercase sm:flex-1 cursor-pointer focus:outline-none">
                                <input type="radio" name="size-choice" value="L" class="sr-only" aria-labelledby="size-choice-4-label">
                                <span id="size-choice-4-label">L</span>
                            </label>
                            <!--
                                In Stock: "cursor-pointer", Out of Stock: "opacity-25 cursor-not-allowed"
                                Active: "ring-2 ring-indigo-500 ring-offset-2"
                                Checked: "border-transparent bg-indigo-600 text-white hover:bg-indigo-700", Not Checked: "border-gray-200 bg-white text-gray-900 hover:bg-gray-50"
                            -->
                            <label class="flex items-center justify-center rounded-md border py-3 px-3 text-sm font-medium uppercase sm:flex-1 cursor-not-allowed opacity-25">
                                <input type="radio" name="size-choice" value="XL" disabled class="sr-only" aria-labelledby="size-choice-5-label">
                                <span id="size-choice-5-label">XL</span>
                            </label>
                            </div>
                        </fieldset>
                        </div>

                        <button type="submit" class="mt-8 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Add to cart</button>
                    </form>

                    <!-- Product details -->
                    <div class="mt-10">
                        <h2 class="text-sm font-medium text-gray-900">Description</h2>

                        <div class="prose prose-sm mt-4 text-gray-500">
                        <p>The Basic tee is an honest new take on a classic. The tee uses super soft, pre-shrunk cotton for true comfort and a dependable fit. They are hand cut and sewn locally, with a special dye technique that gives each tee it's own look.</p>
                        <p>Looking to stock your closet? The Basic tee also comes in a 3-pack or 5-pack at a bundle discount.</p>
                        </div>
                    </div>
                    </div>
                </div>
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