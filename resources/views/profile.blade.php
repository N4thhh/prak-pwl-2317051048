<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @tailwind base;
    @tailwind components;
    @tailwind utilities;

    .bg-custom-red {
      background-color: #000072;
    }
    .text-custom-faded-white {
      color: rgba(255, 255, 255, 0.7);
    }
    .border-custom-red {
      border-color: #000072;
    }

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-color: #f8f9fa; 
        margin: 0;
    }
  </style>
</head>
<body>

  <div class="w-72 bg-custom-red p-5 rounded-lg shadow-md text-center text-white">
    <div class="w-36 h-36 rounded-full overflow-hidden mx-auto mb-4 border-2 border-custom-red flex items-center justify-center bg-white">
      <img src="{{ asset('foto.png') }}" alt="Profile Picture" class="w-full h-full object-cover rounded-full">
    </div>

    <h2 class="text-2xl font-semibold mt-2 mb-1">{{$nama}}</h2>
    <p class="text-lg text-custom-faded-white mb-1">{{$npm}}</p>
    <p class="text-lg text-custom-faded-white">{{$kelas}}</p>
  </div>

</body>
</html>