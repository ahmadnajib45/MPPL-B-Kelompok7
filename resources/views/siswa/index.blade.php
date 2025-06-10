<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Daftar Siswa
        </h2>
    </x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

    <a href="{{ route('siswa.create') }}">+ Tambah Siswa</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Nama</th>
            <th>NISN</th>
            <th>Kelas</th>
            <th>Nama Wali</th>
            <th>No HP Wali</th>
            <th>Aksi</th>
        </tr>
        @foreach ($siswas as $siswa)
        <tr>
            <td>{{ $siswa->nama }}</td>
            <td>{{ $siswa->nisn }}</td>
            <td>{{ $siswa->kelas }}</td>
            <td>{{ $siswa->nama_wali }}</td>
            <td>{{ $siswa->no_hp_wali }}</td>
            <td>
                <a href="{{ route('siswa.edit', $siswa->id) }}">Edit</a> |
                <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST" style="display:inline">
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
