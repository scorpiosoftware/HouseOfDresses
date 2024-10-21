@extends('layouts.home')
@section('content')
    <div class="max-w-2xl mx-auto text-start px-4">
        <h1 class="text-xl">Sizing Policy
        </h1>
        <p>
            At <b>The House of Dresses</b> , we are committed to ensuring every customer finds the perfect fit. Our dresses are
            designed with both standard sizing and custom-made options to accommodate your needs.
        </p>
        <br>
        <p><b>Standard Size Guide</b>
        </p>
        <br>
        <p>We offer the following standard sizes:
        </p>

        <br>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 d:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase d:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 bg-gray-50 d:bg-gray-800">
                            Size
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Bust (cm)
                        </th>
                        <th scope="col" class="px-6 py-3 bg-gray-50 d:bg-gray-800">
                            Waist (cm)
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Hips (cm)
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-200 d:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 d:text-white d:bg-gray-800">
                            XS
                        </th>
                        <td class="px-6 py-4">
                            80-83
                        </td>
                        <td class="px-6 py-4 bg-gray-50 d:bg-gray-800">
                            60-63
                        </td>
                        <td class="px-6 py-4">
                            88-91
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 d:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 d:text-white d:bg-gray-800">
                            S
                        </th>
                        <td class="px-6 py-4">
                            84-87
                        </td>
                        <td class="px-6 py-4 bg-gray-50 d:bg-gray-800">
                            64-67
                        </td>
                        <td class="px-6 py-4">
                            92-95
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 d:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 d:text-white d:bg-gray-800">
                            M
                        </th>
                        <td class="px-6 py-4">
                            88-91
                        </td>
                        <td class="px-6 py-4 bg-gray-50 d:bg-gray-800">
                            68-71
                        </td>
                        <td class="px-6 py-4">
                            96-99
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 d:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 d:text-white d:bg-gray-800">
                            L
                        </th>
                        <td class="px-6 py-4">
                            92-96
                        </td>
                        <td class="px-6 py-4 bg-gray-50 d:bg-gray-800">
                            72-75
                        </td>
                        <td class="px-6 py-4">
                            100-104
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 d:text-white d:bg-gray-800">
                            XL
                        </th>
                        <td class="px-6 py-4">
                            97-101
                        </td>
                        <td class="px-6 py-4 bg-gray-50 d:bg-gray-800">
                            76-80
                        </td>
                        <td class="px-6 py-4">
                            105-109
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="pt-4">
            <p>
                How to Measure:
            </p>
            <p>
                &#x2022;<b>Bust</b> : Measure around the fullest part of your bust, ensuring the tape is flat across your back. <br>
                &#x2022;<b>Waist</b> : Measure around the narrowest part of your waistline. <br>
                &#x2022;<b>Hips</b>: Measure around the fullest part of your hips, standing with your feet together. <br>
                If your measurements fall between two sizes, we recommend selecting the larger size for added comfort.
                <br>
                <b>Custom-Made Dresses</b><br>
                We are pleased to offer <b>custom-made dresses</b> for those seeking a tailored fit. To ensure the perfect fit,
                please provide the following measurements:
                <br>
                &#x2022; Bust <br>
                &#x2022; Waist <br>
                &#x2022; Hips <br>
                &#x2022; Dress Length (from shoulder to desired hemline) <br>
                &#x2022; Arm Length (for long-sleeved styles) <br>
                &#x2022; Height (for overall length accuracy) <br>
                Once your custom order is placed, we will reach out to confirm all details and guide you through the
                process. Please keep in mind that custom-made dresses may require additional production time.
                <br>
                <b>Important Information</b>:
                <br>
                &#x2022; Custom-made dresses are non-returnable and non-exchangeable since they are designed to your specific
                measurements.<br>
                &#x2022; Ensure that all provided measurements are accurate. We cannot be responsible for incorrect measurements
                provided by the customer.<br>
                &#x2022; Custom orders may take additional time, typically 10-14 business days, for production and delivery.
                For any assistance or to inquire about our custom-made options in Dubai, feel free to contact our
                customer service team.<br>
            </p>
        </div>
    </div>
@endsection
