
<div class="relative overflow-x-auto mx-10 my-10">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                     Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Full Amount
                </th>
                <th scope="col" class="px-6 py-3">
                    Monthly Repaiment
                </th>
                <th scope="col" class="px-6 py-3">
                    Months
                </th>
            </tr>
        </thead>
        <tbody>
            @if (empty($credits))
                <tr>
                    <td colspan="4" class="px-6 py-4 text-center text-gray-500">
                        No credits available. Please add a credit to see it listed here.
                    </td>
                </tr>
            @else
                @foreach ($credits as $credit)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $credit->borrower->name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $credit->amount }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $credit->monthly_installment }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $credit->term }}
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
