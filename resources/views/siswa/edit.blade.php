<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Edit Siswa
        </h2>
    </x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama:</label><br>
        <input type="text" name="nama" value="{{ $siswa->nama }}" required><br><br>

        <label>NIP:</label><br>
        <input type="text" name="nip" value="{{ $siswa->nisn }}" required><br><br>

        <label>Mata Pelajaran:</label><br>
        <input type="text" name="mapel" value="{{ $siswa->kelas }}" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ $siswa->nama_wali }}" required><br><br>

        <label>No HP:</label><br>
        <input type="text" name="no_hp" value="{{ $siswa->no_hp_wali }}"><br><br>

        <button type="submit">Update</button>
    </form>
</div>
</div>
</x-app-layout>
