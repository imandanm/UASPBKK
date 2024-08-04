<!-- resources/views/inventory/index.blade.php -->
<h1>Daftar Inventori</h1>
<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->quantity }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
