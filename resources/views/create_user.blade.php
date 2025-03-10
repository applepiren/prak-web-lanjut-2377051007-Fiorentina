<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form User - Earth Tone</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-b from-[#EAD7C2] to-[#B0926A] min-h-screen flex items-center justify-center">

    <div class="bg-[#FAF3E0] shadow-xl rounded-xl p-8 w-full max-w-md border-2 border-[#D9A673]">
        <h2 class="text-3xl font-bold text-center text-[#8C5A3A] mb-6">🌿 Tambah User 🌿</h2>

        <form action="{{ route('user.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label for="nama" class="block font-medium text-[#5C4033]">Nama :</label>
                <input type="text" id="nama" name="nama" class="w-full border-2 border-[#C8A888] rounded-lg p-3 mt-1 focus:ring-2 focus:ring-[#8C5A3A] outline-none bg-[#F8EDE3]" required>
            </div>

            <div>
                <label for="npm" class="block font-medium text-[#5C4033]">NPM :</label>
                <input type="text" id="npm" name="npm" class="w-full border-2 border-[#C8A888] rounded-lg p-3 mt-1 focus:ring-2 focus:ring-[#8C5A3A] outline-none bg-[#F8EDE3]" required>
            </div>

            <div>
                <label for="kelas" class="block font-medium text-[#5C4033]">Kelas :</label>
                <input type="text" id="kelas" name="kelas" class="w-full border-2 border-[#C8A888] rounded-lg p-3 mt-1 focus:ring-2 focus:ring-[#8C5A3A] outline-none bg-[#F8EDE3]" required>
            </div>

            <button type="submit" class="w-full bg-[#8C5A3A] text-white font-semibold py-3 rounded-lg hover:bg-[#5C4033] transition">✔ Simpan</button>
        </form>
    </div>

</body>
</html>
