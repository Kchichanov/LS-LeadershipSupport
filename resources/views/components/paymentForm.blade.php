<div class="flex items-center justify-center min-h-screen">
    <form method="POST" action="{{ route('payment.store') }}" class="w-full max-w-lg shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-500 text-xl font-bold mb-2" for="credit_id">
                    Loan ID
                </label>
                <select class="appearance-none block w-full bg-gray-200 text-gray-500 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        id="credit_id" name="credit_id" required>
                    <option value="" disabled selected>Select a loan</option>
                    @foreach($credits as $credit)
                        <option value="{{ $credit->id }}">{{ $credit->id }}</option>
                    @endforeach
                </select>
            </div>
        </div>

      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-500 text-xl font-bold mb-2" for="amount">
            Amount in BGN
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                 id="amount"
                 name="amount"
                 type="number"
                 required>
        </div>
      </div>


      <!-- Submit Button -->
      <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                type="submit">
          Submit
        </button>
      </div>
    </form>
  </div>
