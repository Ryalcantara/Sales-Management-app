<br>
<h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Products Pane</h3>
<div class="relative z-0 w-full mb-6 group">
    <label>Products</label>
    <select name="product_id" id="productSelect"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        require>
        <option value="None">None</option>

        @foreach ($data as $product)
            <option value="{{ $product->product_id }}">{{ $product->product_name }}</option>
        @endforeach
    </select>
</div>
<div class="grid md:grid-cols-2 md:gap-6">


    <!-- QUANTITY -->
    <div class="relative z-0 w-full mb-6 group">
        <br>
        <input type="number" id="currentQuantity"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            placeholder=" " disabled value="0" />
        <label for="quantity" 
            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Current
            Quantity:</label>

    </div>
    <!-- QUANTITY -->
    <div class="relative z-0 w-full mb-6 group">
        <br>
        <input type="number" name="quant" id="quantityInput"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            placeholder=" " required value="0"/>
        <label for="quantity"
            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Quantity:</label>
    </div>

</div>
