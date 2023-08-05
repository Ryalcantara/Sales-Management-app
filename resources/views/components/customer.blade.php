<div class="relative z-0 w-full mb-6 group">
  <label>Client:</label>
  <select name="customer"
  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
  require>
  @foreach ($data as $customer)
      
  <option value="{{ $customer->customer_name }}">{{ $customer->customer_name }}</option>
  @endforeach
</select>
</div>

