<div style="border:1px solid #ddd; padding:15px; width:250px; border-radius:10px; display:inline-block; margin:10px;">

    <!-- Cover (Icon) -->
    <div style="font-size:40px; text-align:center;">
        📘
    </div>

    <!-- CHECKBOX / Tugas 2 Pertemuan 11 -->
    <div style="text-align:right;">
    <input type="checkbox"
           name="buku_ids[]"
           value="{{ $buku->id }}">
    </div>

    <!-- Judul -->
    <h3 style="margin:5px 0;">{{ $buku->judul }}</h3>

    <!-- Pengarang -->
    <p><b>Pengarang:</b> {{ $buku->pengarang }}</p>

    <!-- Harga -->
    <p><b>Harga:</b> Rp {{ number_format($buku->harga, 0, ',', '.') }}</p>

    <!-- Stok -->
    <p><b>Stok:</b> {{ $buku->stok }}</p>

    <!-- Kategori Badge -->
    <span style="background: #0d6efd; color:white; padding:3px 8px; border-radius:5px;">
        {{ $buku->kategori }}
    </span>

    <br><br>

    <!-- Status Ketersediaan -->
    @if($buku->stok > 0)
        <span style="background:green; color:white; padding:5px;">Tersedia</span>
    @else
        <span style="background:red; color:white; padding:5px;">Habis</span>
    @endif

    <br><br>

    <!-- Actions (Delete praktium 12) -->
    @if($showActions)
    <div class="btn-group-vertical d-grid gap-2">
        <a href="{{ route('buku.show', $buku->id) }}" class="btn btn-sm btn-info text-white">
            <i class="bi bi-eye"></i> Detail
        </a>
        <a href="{{ route('buku.edit', $buku->id) }}" class="btn btn-sm btn-warning">
            <i class="bi bi-pencil"></i> Edit
        </a>
        
       {{-- Delete Button dengan SweetAlert --}}
        <form action="{{ route('buku.destroy', $buku->id) }}" 
            method="POST" 
            class="d-inline delete-form">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger w-100 btn-delete" 
                    data-judul="{{ $buku->judul }}">
                <i class="bi bi-trash"></i> Hapus
            </button>
        </form>
    </div>
    @endif

</div>