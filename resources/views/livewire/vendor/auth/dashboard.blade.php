<div>
    <x-slot name='title'>Dashboard</x-slot>
    <div class="flex flex-col">
        <!-- Stats Row Starts Here -->
        <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">
            <div class="shadow-lg bg-red-vibrant border-l-8 hover:bg-red-vibrant-dark border-red-vibrant-dark mb-2 p-2 md:w-1/4 mx-2">
                <div class="p-4 flex flex-col">
                    <a href="#" class="no-underline text-white text-2xl">
                        ${{$total_sales}}
                    </a>
                    <a href="#" class="no-underline text-white text-lg">
                        Total Sales
                    </a>
                </div>
            </div>
            <div class="shadow bg-success border-l-8 hover:bg-success-dark border-success-dark mb-2 p-2 md:w-1/4 mx-2">
                <div class="p-4 flex flex-col">
                    <a href="#" class="no-underline text-white text-2xl">
                        {{$total_products}}
                    </a>
                    <a href="#" class="no-underline text-white text-lg">
                        Total Products
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
