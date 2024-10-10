<x-app-layout>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 d:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 d:bg-gray-700 d:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 text-nowrap">
                        Customer name
                    </th>
                    <th scope="col" class="px-6 py-3 text-nowrap">
                        Customer Email
                    </th>
                    <th scope="col" class="px-6 py-3 text-nowrap">
                        Phone
                    </th>
                    <th scope="col" class="px-6 py-3 text-nowrap">
                        Full Address
                    </th>
                    <th scope="col" class="px-6 py-3 text-nowrap">
                        Order Date
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b d:bg-gray-800 d:border-gray-700">
                    <th scope="row"
                        class="px-6 py-4 font-medium text-gray-900  text-nowrap whitespace-nowrap d:text-white">
                        {{ $record->customer_name }}
                    </th>
                    <td class="px-6 py-4 text-nowrap">
                        {{ $record->customer_email }}
                    </td>
                    <td class="px-6 py-4 text-nowrap">
                        {{ $record->phone }}
                    </td>
                    <td class="px-6 py-4 text-nowrap">
                        {{ $record->country }} - {{ $record->city }} - {{ $record->street }}
                    </td>
                    <td class="px-6 py-4 text-nowrap">
                        {{ $record->order_date }}
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 d:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 d:bg-gray-700 d:text-gray-400">
                <tr>
                    <th scope="col" class="px-16 py-3">
                        <span class="">Image</span>
                    </th>
                    <th scope="col" class="px-6 py-3 text-nowrap">
                        Product
                    </th>
                    <th scope="col" class="px-6 py-3 text-nowrap">
                        Color
                    </th>
                    <th scope="col" class="px-6 py-3 text-nowrap">
                        Size
                    </th>
                    <th scope="col" class="px-6 py-3 text-nowrap">
                        Qty
                    </th>
                    <th scope="col" class="px-6 py-3 text-nowrap">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3 text-nowrap">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr class="bg-white border-b d:bg-gray-800 d:border-gray-700 hover:bg-gray-50 d:hover:bg-gray-600">
                        <td class="p-4 text-nowrap">
                            <img src="{{ URL::to('storage/' . $item->product->colors()->first()->main_image_url) }}"
                                class="w-16 md:w-24 max-w-full max-h-full" alt="Apple Watch">
                        </td>
                        <td class="px-6 py-4 font-semibold text-nowrap text-gray-900 d:text-white">
                            {{ $item->product->name_en }}
                        </td>
                        <td class="px-6 py-4 font-semibold text-nowrap text-gray-900 d:text-white">
                            {{ $item->color }}
                        </td>
                        <td class="px-6 py-4 font-semibold text-nowrap text-gray-900 d:text-white">
                            {{ $item->size }}
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center text-nowrap">
                                {{ $item->quantity }}
                            </div>
                        </td>
                        <td class="px-6 py-4 font-semibold text-gray-900 text-nowrap d:text-white">
                            {{ $item->subtotal }} {{ strtoupper($record->currency) }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{route('measurements',$item->id)}}" id="btn-{{$item->id}}" 
                                class="font-medium text-nowrap text-red-600 d:text-red-500 underline">measurements
                                details</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="w-full flex justify-between items-start text-black font-bold px-10 py-2">
            <p>Status : {{ $record->status }}</p>
            <p>Total : {{ $record->total_amount }} {{ strtoupper($record->currency) }}</p>

        </div>
    </div>
    @foreach ($items as $item)
    <div id="me-{{$item->id}}" class="hidden fixed w-full top-0 left-0 h-full z-50 content-center bg-opacity-75 bg-white">
        <div class="container mx-auto flex justify-center items-center">
            <img src="{{URL::to('img/s.jpeg')}}" class="w-32" alt="">
            <table>
                <thead>
                    <tr class="border-2 border-black">
                        <th class="border-2 border-black p-4"></th>
                        <th class="border-2 border-black">Measure all around Please</th>
                        <th>INCHES</th>
                    </tr>
                </thead>
                <tbody class="">
                    <tr class="border-2 border-black">
                        <td class="text-center border-2 border-black">A</td>
                        <td class="px-2">
                            <label for="bust">BUST</label>
                        </td>
                        <td class="px-2 py-1 border-2 border-black text-center">
                            {{$item->bust}}
                        </td>
                    </tr>
                    <tr class="border-2 border-black">
                        <td class="text-center border-2 border-black">B</td>
                        <td class="px-2"> 
                            <label for="waist">WAIST</label>
                        </td>
                        <td class="px-2 py-1 border-2 border-black text-center">
                            {{$item->waist}}
                        </td>
                    </tr>
                    <tr class="border-2 border-black">
                        <td class="text-center border-2 border-black">C</td>
                        <td class="px-2">
                            <label for="hips">HIPS</label>
                        </td>
                        <td class="px-2 py-1 border-2 border-black text-center">
                            {{$item->hips}}
                        </td>
                    </tr>
                    <tr class="border-2 border-black">
                        <td class="text-center border-2 border-black">D</td>
                        <td class="px-2">
                            <label for="neck">NECK</label>
                        </td>
                        <td class="px-2 py-1 border-2 border-black text-center">
                            {{$item->neck}}
                        </td>
                    </tr>
                    <tr class="border-2 border-black">
                        <td class="text-center border-2 border-black">E</td>
                        <td class="px-2">
                            <label for="chest">CHEST</label>
                        </td>
                        <td class="px-2 py-1 border-2 border-black text-center">
                            {{$item->chest}}
                        </td>
                    </tr>
                    <tr class="border-2 border-black">
                        <td class="text-center border-2 border-black">F</td>
                        <td class="px-2">
                            <label for="shoulder">SHOULDER</label>
                        </td>
                        <td class="px-2 py-1 border-2 border-black text-center">
                            {{$item->shoulder}}
                        </td>
                    </tr>
                    <tr class="border-2 border-black">
                        <td class="text-center border-2 border-black">G</td>
                        <td class="px-2">
                            <label for="sleeve">SLEEVE</label>
                        </td>
                        <td class="px-2 py-1 border-2 border-black text-center">
                            {{$item->sleeve}}
                        </td>
                    </tr>
                    <tr class="border-2 border-black">
                        <td class="text-center border-2 border-black">H</td>
                        <td class="px-2"> 
                            <label for="shoulder_waist">SHOULDER TO WAIST</label>
                        </td>
                        <td class="px-2 py-1 border-2 border-black text-center">
                            {{$item->shoulder_waist}}
                        </td>
                    </tr>
                    <tr class="border-2 border-black">
                        <td class="text-center border-2 border-black">I</td>
                        <td class="px-2"> 
                            <label for="shoulder_floor">SHOULDER TO FLOOR</label>
                        </td>
                        <td class="px-2 py-1 border-2 border-black text-center">
                            {{$item->shoulder_floor}}
                        </td>
                    </tr>
                    <tr class="border-2 border-black">
                        <td class="text-center border-2 border-black">J</td>
                        <td class="px-2">
                            <label for="arm_hole">ARM HOLE</label>
                        </td>
                        <td class="px-2 py-1 border-2 border-black text-center">
                            {{$item->arm_hole}}
                        </td>
                    </tr>
                    <tr class="border-2 border-black">
                        <td class="text-center border-2 border-black">K</td>
                        <td class="px-2">
                            <label for="upper_arm">UPPER ARM</label>
                        </td>
                        <td class="px-2 py-1 border-2 border-black text-center">
                            {{$item->upper_arm}}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    @endforeach
   



</x-app-layout>
