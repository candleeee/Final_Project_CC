@extends('layouts.app')

@section('content')
<div class="container">
    <style>
        /* Gaya sederhana untuk tampilan struk */
        .struk {
            width: 250px;
            margin: 0 auto;
            padding: 10px;
            border: 1px solid #000;
            font-family: Arial, sans-serif;
            box-shadow: none;
            font-size: 12px;
        }
        .struk h2, .struk p {
            text-align: center;
            margin: 0;
        }
        .table {
            width: 100%;
            margin-top: 10px;
            border-collapse: collapse;
        }
        .table th, .table td {
            text-align: left;
            padding: 5px;
            font-size: 12px;
        }
        .total, .terima-kasih {
            text-align: center;
            margin-top: 10px;
            font-weight: bold;
        }
    </style>

    <div class="struk">
        <h2>STRUK PEMBELIAN</h2>
        <p>Pesanan #{{ $order->id }}</p>
        <p>{{ now()->format('d/m/Y H:i') }}</p>

        <table class="table">
            <thead>
                <tr>
                    <th>QTY</th>
                    <th>Barang</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pembelians as $pembelian)
                <tr>
                    <td>{{ $pembelian->jumlah_produk }}</td>
                    <td>{{ $pembelian->nama_barang }}</td>
                    <td>Rp {{ number_format($pembelian->total_harga, 0, ',', '.') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="total">
            <p>Total Barang: {{ $totalItems }}</p>
            <p>Total Harga: Rp {{ number_format($totalAmount, 0, ',', '.') }}</p>
        </div>

        <p class="terima-kasih">Terima kasih atas pembelian Anda!</p>
    </div>

    <div class="btn-group" style="display: flex; justify-content: space-between; margin-top: 15px;">
        <a href="{{ route('katalog') }}" class="btn btn-primary">Tambah Order</a>
        @if($pembelians->isNotEmpty())
            <form action="{{ route('order.batal', ['id' => $pembelians->first()->id]) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Batalkan Order</button>
            </form>
        @else
            <p>Tidak ada pembelian untuk dibatalkan.</p>
        @endif
    </div>
</div>
@endsection
