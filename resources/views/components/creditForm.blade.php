<div class="flex items-center justify-center min-h-screen">
    <form method="POST" action="{{ route('credit.store') }}" class="w-full max-w-lg shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-500 text-xl font-bold mb-2" for="grid-first-name">
            First Name
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-500 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                 id="grid-first-name"
                 name="first_name"
                 type="text"
                 required>
        </div>
        <div class="w-full md:w-1/2 px-3">
          <label class="block uppercase tracking-wide text-gray-500 text-xl font-bold mb-2" for="grid-last-name">
            Last Name
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                 id="grid-last-name"
                 name="last_name"
                 type="text"
                 required>
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

      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-500 text-xl font-bold mb-2" for="term">
            Period (Months)
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                 id="term"
                 name="term"
                 type="number"
                 min="3"
                 max="120"
                 placeholder="3"
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
