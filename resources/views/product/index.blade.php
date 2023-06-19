<?php
/** @var \Illuminate\Database\Eloquent\Collection $products */
?>

<x-app-layout>

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
            <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12 mb-8">
                <a href="#" class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-blue-400 mb-2">
                    Welcome!
                </a>
                <h1 class="text-gray-900 dark:text-white text-3xl md:text-5xl font-extrabold mb-2">Discover Our Beauty Collection</h1>
                <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-6">Welcome to Sassy Cosmetics, where beauty meets elegance. Explore our exquisite collection of high-quality products designed to enhance your natural beauty. Discover the latest trends, expert tips, and personalized recommendations. Unleash your unique style and feel confident in your own skin. Join us on this beauty journey today!</p>
            </div>
            <div class="grid md:grid-cols-2 gap-8 mb-8">
                <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
                    <a href="#" class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 mb-2">
                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M4 2a2 2 0 00-2 2v11a3 3 0 106 0V4a2 2 0 00-2-2H4zm1 14a1 1 0 100-2 1 1 0 000 2zm5-1.757l4.9-4.9a2 2 0 000-2.828L13.485 5.1a2 2 0 00-2.828 0L10 5.757v8.486zM16 18H9.071l6-6H16a2 2 0 012 2v2a2 2 0 01-2 2z"></path>
                        </svg>

                    </a>
                    <h2 class="text-gray-900 dark:text-white text-3xl font-extrabold mb-2">About Us</h2>
                    <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-4">At Sassy Cosmetics, we are dedicated to delivering exceptional beauty products that empower and inspire. Discover your true beauty with our carefully curated selection.</p>
                    {{-- <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline font-medium text-lg inline-flex items-center">Read more
                        <svg aria-hidden="true" class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a> --}}
                </div>
                <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
                    <a href="#" class="bg-purple-100 text-purple-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-purple-400 mb-2">
                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z"></path>
                        </svg>

                    </a>
                    <h2 class="text-gray-900 dark:text-white text-3xl font-extrabold mb-2">Contact Us</h2>
                    <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-4">Email Address : support@cosmetics.my</p>
                    <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-4">Phone Number : +60 10 555 9873</p>
                    <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-4">Address : Kuala Lumpur</p>
                    {{-- <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline font-medium text-lg inline-flex items-center">Read more
                        <svg aria-hidden="true" class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a> --}}
                </div>
            </div>

            <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12 mb-8">
                <a class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-blue-400 mb-2">
                    Available
                </a>
                <h1 class="text-gray-900 dark:text-white text-3xl font-extrabold mb-2">Products</h1>
                <?php if ($products->count() === 0): ?>
                <div class="text-center text-gray-600 py-16 text-xl">
                    There are no products published
                </div>
                <?php else: ?>
                    <div
                        class="grid gap-8 grig-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 p-5"
                    >
                        @foreach($products as $product)
                            <!-- Product Item -->
                            <div
                                x-data="productItem({{ json_encode([
                                    'id' => $product->id,
                                    'slug' => $product->slug,
                                    'image' => $product->image,
                                    'title' => $product->title,
                                    'price' => $product->price,
                                    'addToCartUrl' => route('cart.add', $product)
                                ]) }})"
                                class="border border-1 border-gray-200 rounded-md hover:border-purple-600 transition-colors bg-white"
                            >
                                <a href="{{ route('product.view', $product->slug) }}"
                                class="aspect-w-3 aspect-h-2 block overflow-hidden">
                                    <img
                                        src="{{ $product->image }}"
                                        alt=""
                                        class="object-cover rounded-lg hover:scale-105 hover:rotate-1 transition-transform"
                                    />
                                </a>
                                <div class="p-4">
                                    <h3 class="text-lg">
                                        <a href="{{ route('product.view', $product->slug) }}">
                                            {{$product->title}}
                                        </a>
                                    </h3>
                                    <h5 class="font-bold">${{$product->price}}</h5>
                                </div>
                                <div class="flex justify-between py-3 px-4">
                                    <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" @click="addToCart()">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                            <!--/ Product Item -->
                        @endforeach
                    </div>
                    {{$products->links()}}
                <?php endif; ?>

            </div>


        </div>
    </section>
</x-app-layout>
