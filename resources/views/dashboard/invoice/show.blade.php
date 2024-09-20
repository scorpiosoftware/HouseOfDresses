<x-app-layout>


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

        

<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Customer name
                </th>
                <th scope="col" class="px-6 py-3">
                    Customer  Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Phone
                </th>
                <th scope="col" class="px-6 py-3">
                    Full Address
                </th>
                <th scope="col" class="px-6 py-3">
                    Order Date
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$record->customer_name}}
                </th>
                <td class="px-6 py-4">
                    {{$record->customer_email}}
                </td>
                <td class="px-6 py-4">
                   {{$record->phone}}
                </td>
                <td class="px-6 py-4">
                    {{$record->country}} - {{$record->city}} - {{$record->street}}
                </td>
                <td class="px-6 py-4">
                    {{$record->order_date}}
                </td>
            </tr>

        </tbody>
    </table>
</div>




        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-16 py-3">
                        <span class="sr-only">Image</span>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Product
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Color
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Size
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Qty
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="p-4">
                        <img src="{{URL::to('storage/'.$item->product->colors()->first()->main_image_url)}}" class="w-16 md:w-24 max-w-full max-h-full" alt="Apple Watch">
                    </td>
                    <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                        {{$item->product->name_en}}
                    </td>
                    <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                        {{$item->color}}
                    </td>
                    <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                        {{$item->size}}
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                              {{$item->quantity}}
                        </div>
                    </td>
                    <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                        $599
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Remove</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="w-full flex justify-between items-start text-black font-bold px-10 py-2">
            <p>Status : {{$record->status}}</p>  
          <p>Total : {{$record->total_amount}} $</p>  

        </div>
    </div>
    
</x-app-layout>
