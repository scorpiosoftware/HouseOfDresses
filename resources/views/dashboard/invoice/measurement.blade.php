<x-app-layout>
    <div id="me-{{$item->id}}" class="fixed w-full top-0 left-0 h-full z-50 content-center bg-opacity-75 bg-white">
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
</x-app-layout>