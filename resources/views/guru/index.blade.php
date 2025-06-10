<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Daftar Guru
        </h2>
    </x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

    <a href="{{ route('guru.create') }}">+ Tambah Guru</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Nama</th>
            <th>NIP</th>
            <th>Mapel</th>
            <th>Email</th>
            <th>No HP</th>
            <th>Aksi</th>
        </tr>
        @foreach ($gurus as $guru)
        <tr>
            <td>{{ $guru->nama }}</td>
            <td>{{ $guru->nip }}</td>
            <td>{{ $guru->mapel }}</td>
            <td>{{ $guru->email }}</td>
            <td>{{ $guru->no_hp }}</td>
            <td>
                <a href="{{ route('guru.edit', $guru->id) }}">Edit</a> |
                <form action="{{ route('guru.destroy', $guru->id) }}" method="POST" style="display:inline">
                    @csrf @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    </div>
</div>
</x-app-layout>
