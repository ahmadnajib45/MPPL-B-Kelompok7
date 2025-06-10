<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Tambah Guru Baru
        </h2>
    </x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

    <form action="{{ route('guru.store') }}" method="POST">
        @csrf

        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>NIP:</label><br>
        <input type="text" name="nip" required><br><br>

        <label>Mata Pelajaran:</label><br>
        <input type="text" name="mapel" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>No HP:</label><br>
        <input type="text" name="no_hp"><br><br>

        <button type="submit">Simpan</button>
    </form>
    </div>
</div>
</x-app-layout>
