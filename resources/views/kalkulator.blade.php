<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    @vite('resources/css/app.css')
    <style>
        .hidden {
            display: none;
        }
        @keyframes loading {
            0% { width: 0; }
            100% { width: 100%; }
        }
        .loading-bar {
            animation: loading 2s infinite;
        }
    </style>
    <script>
        function showLoading() {
            document.getElementById('loading').classList.remove('hidden');
        }
    </script>
</head>
<body class="flex items-center justify-center min-h-screen" style="background-color: rgb(110 231 183);">
    <div class="bg-white p-8 rounded shadow-md w-full max-w-xs">
        <h1 class="text-2xl font-bold mb-4 text-center">Calculator</h1>
        <form action="{{ route('hitung') }}" method="POST" class="space-y-4" onsubmit="showLoading()">
            @csrf
            <div>
                <input type="number" name="angka1" placeholder="First Number" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div>
                <input type="number" name="angka2" placeholder="Second number" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div>
                <select name="operasi" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="tambah" >Tambah</option>
                    <option value="kurang">Kurang</option>
                    <option value="kali">Kali</option>
                    <option value="bagi">Bagi</option>
                </select>
            </div>
            <div>
                <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Count</button>
            </div>
        </form>

        <div id="loading" class="hidden mt-4">
            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                <div class="bg-blue-600 h-2.5 rounded-full loading-bar"></div>
            </div>
        </div>

        @if(isset($hasil))
            <div class="mt-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                <h2 class="text-xl font-bold text-center">Result: {{ $hasil }}</h2>
            </div>
        @endif

        <div class="mt-4 text-center">
            <a href="/" class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-2">Home</a>
        </div>
    </div>
</body>
</html>
