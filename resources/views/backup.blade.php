@include('partials.header')
@include('partials.sidebar')
<div class="p-8 ml-80">

    <div class="bg-gradient-to-r from-purple-500 via-pink-500 to-red-500 font-sans">

        <div class="container mx-auto my-8 p-8 bg-white rounded-lg shadow-lg">
    
            <!-- Backup Section -->
            <div class="mb-8 p-6 bg-blue-200 rounded-lg">
                <h2 class="text-3xl font-semibold text-blue-800 mb-4">Backup Database <i class="fas fa-database"></i></h2>
                <form>
                    <div class="flex items-center mb-4">
                        <label for="backup-name" class="mr-2 text-blue-800">Backup Name:</label>
                        <input type="text" id="backup-name" name="backup-name" class="p-2 border rounded">
                    </div>
                    <button type="submit" class="bg-blue-500 text-white p-2 rounded-lg hover:bg-blue-700 transition duration-300"><i class="fas fa-save"></i> Backup</button>
                </form>
            </div>
    
            <!-- Restore Section -->
            <div class="p-6 bg-green-200 rounded-lg">
                <h2 class="text-3xl font-semibold text-green-800 mb-4">Restore Database <i class="fas fa-upload"></i></h2>
                <form>
                    <div class="flex items-center mb-4">
                        <label for="restore-file" class="mr-2 text-green-800">Backup File:</label>
                        <input type="file" id="restore-file" name="restore-file" class="p-2 border rounded">
                    </div>
                    <button type="submit" class="bg-green-500 text-white p-2 rounded-lg hover:bg-green-700 transition duration-300"><i class="fas fa-undo"></i> Restore</button>
                </form>
            </div>
    
        </div>
    
    </div>
    </div>
    
@include('partials.footer')
