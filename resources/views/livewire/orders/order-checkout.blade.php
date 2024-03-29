<x-app-layout>
    <div class="bg-gray-100">
        <div class="py-6 container mx-auto">
            <div class="text-black font-bold my-8 ml-5" aria-label="Breadcrumb">
                <ol class="list-none p-0 inline-flex">
                    <li class="flex items-center">
                        <p>Pagrindinis</p>
                        <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                            <path
                                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                        </svg>
                    </li>
                    <li class="flex items-center">
                        <p>Prekės</p>
                        <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                            <path
                                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                        </svg>
                    </li>
                    <li>
                        <p class="text-gray-500" aria-current="page">Apmokėjimas</p>
                    </li>
                </ol>
            </div>
            <br>
        </div>
    </div>

    <div class="w-full bg-gray-100">
        <div class="flex">
            <div class="container mx-auto bg-white overflow-hidden">
                <main class="my-8 m-8">
                    <div class="px-6">
                        <h3 class="text-gray-700 text-2xl font-medium mb-4">Apmokėjimas</h3>
                        <hr>
                        <div class="flex flex-col lg:flex-row mt-8">
                            <div class="w-full lg:w-1/2 order-2">
                                @livewire('user-info', ['user' => $user], key($user->id))
                                @livewire('orders.order-add')
                            </div>

                            <div class="w-full mb-8 flex-shrink-0 order-1 lg:w-1/2 lg:mb-0 lg:order-2">
                                <div class="flex justify-center lg:justify-end">
                                    <div class="max-w-md w-full px-4 py-3">
                                        <div class="flex items-center mb-6">
                                            <button class="flex text-md text-black font-bold focus:outline-none"><span
                                                    class="items-center justify-center text-white bg-blue-500 rounded-full h-5 w-5 mr-2">1</span>
                                                Pristatymas</button>
                                            <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 320 512">
                                                <path
                                                    d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                                            </svg>
                                            <button class="flex text-md text-gray-700 focus:outline-none"><span
                                                    class="flex items-center justify-center border-2 border-blue-500 rounded-full h-5 w-5 mr-2">2</span>
                                                Apmokėjimas</button>
                                        </div>

                                        <div class="border p-4">
                                            <div class="flex items-center justify-between">
                                                <h3 class="text-gray-700 font-medium">Krepšelyje ({{ $cartTotal }})
                                                </h3>
                                            </div>
                                            @foreach ($order as $orderitem)
                                                <div class="flex justify-between mt-6">
                                                    <div class="flex">
                                                        @foreach ($orderitem->images as $img)
                                                            <img class="h-20 w-20 object-contain rounded"
                                                                src="{{ asset($img->path) }}" alt="">
                                                        @break
                                            @endforeach
                                            <div class="mx-3">
                                                <h3 class="text-sm text-gray-600">
                                                    {{ $orderitem->products->title }}
                                                </h3>

                                                @livewire('orders.order-minus-plus', ['order_item' =>
                                                $orderitem],key($orderitem->id))

                                            </div>
                                        </div>

                                        <span
                                            class="text-black font-semibold">{{ $orderitem->products->price }}€</span>
                                    </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>
            </div>
        </div>
        </main>
    </div>
    </div>
    </div>
</x-app-layout>
