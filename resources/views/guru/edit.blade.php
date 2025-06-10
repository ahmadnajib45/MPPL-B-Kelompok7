<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Edit Guru
        </h2>
    </x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


    <form action="{{ route('guru.update', $guru->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama:</label><br>
        <input type="text" name="nama" value="{{ $guru->nama }}" required><br><br>

        <label>NIP:</label><br>
        <input type="text" name="nip" value="{{ $guru->nip }}" required><br><br>

        <label>Mata Pelajaran:</label><br>
        <input type="text" name="mapel" value="{{ $guru->mapel }}" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ $guru->email }}" required><br><br>

        <label>No HP:</label><br>
        <input type="text" name="no_hp" value="{{ $guru->no_hp }}"><br><br>

        <button type="submit">Update</button>
    </form>
</div>
</x-app-layout>
