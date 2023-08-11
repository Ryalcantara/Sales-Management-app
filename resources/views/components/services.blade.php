<div class="relative z-0 w-full mb-6 group">
    <label>Services</label>
    <select name="service_id"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        require>
        @foreach ($data as $service)
            
        <option value="{{ $service->service_id }}">{{ $service->service_name }}</option>
        @endforeach
    </select>
</div>