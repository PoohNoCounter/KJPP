@extends('components.layout')

@section('content')
    <style>
        .alert-success {
            background: #d1fae5;
            border-left: 4px solid #10b981;
            color: #065f46;
            padding: 1rem 1.5rem;
            margin-bottom: 1.5rem;
            border-radius: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            animation: slideDown 0.4s ease-out;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .alert-error {
            background: #fee2e2;
            border-left: 4px solid #ef4444;
            color: #991b1b;
            padding: 1rem 1.5rem;
            margin-bottom: 1.5rem;
            border-radius: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            animation: slideDown 0.4s ease-out;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .alert-icon {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .alert-content {
            flex: 1;
        }

        .alert-close {
            cursor: pointer;
            font-size: 1.25rem;
            opacity: 0.6;
            transition: opacity 0.2s;
        }

        .alert-close:hover {
            opacity: 1;
        }
    </style>

    <!-- Alert Notifikasi -->
    @if (session('success'))
        <div class="alert-success" id="alert-box">
            <span class="alert-icon">✓</span>
            <div class="alert-content">
                <strong>Berhasil!</strong> {{ session('success') }}
            </div>
            <span class="alert-close" onclick="closeAlert()">×</span>
        </div>
    @endif

    @if (session('error'))
        <div class="alert-error" id="alert-box">
            <span class="alert-icon">⚠</span>
            <div class="alert-content">
                <strong>Error!</strong> {{ session('error') }}
            </div>
            <span class="alert-close" onclick="closeAlert()">×</span>
        </div>
    @endif

    <!-- Konten Halaman -->
    <div style="padding: 1rem;">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
            <h2 style="font-size: 1.875rem; font-weight: bold; color: #000000; margin: 0;">Data Penawaran</h2>
        </div>
        <a href="{{ route('penawaran.create') }}"
            style="display: inline-block; background: #000000; color: white; padding: 0.75rem 1.5rem; border-radius: 0.375rem; text-decoration: none; font-weight: 500; margin-bottom: 1rem;">
            Tambah Surat
        </a>
    </div>
    <table style="width: 100%; border-collapse: collapse; background: white; box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);">
        <thead>
            <tr style="background: #000000; color: white;">
                <th style="padding: 0.75rem; text-align: left;">No</th>
                <th style="padding: 0.75rem; text-align: left;">Nomor Penawaran</th>
                <th style="padding: 0.75rem; text-align: left;">Tanggal</th>
                <th style="padding: 0.75rem; text-align: left;">Pemberi</th>
                <th style="padding: 0.75rem; text-align: center;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penawarans as $index => $penawaran)
                <tr style="border-bottom: 1px solid #e5e7eb;">
                    <td style="padding: 0.75rem;">{{ $index + 1 }}</td>
                    <td style="padding: 0.75rem;">{{ $penawaran->nomor }}</td>
                    <td style="padding: 0.75rem;">{{ $penawaran->tanggal }}</td>
                    <td style="padding: 0.75rem;">{{ $penawaran->pemberi }}</td>
                    <td style="padding: 0.75rem; text-align: center;">
                        <a href="{{ route('penawaran.cetak', $penawaran->id) }}"
                            style="color: #26264d; text-decoration: none; margin-right: 0.5rem;">
                            <i class="bi bi-filetype-pdf"></i>
                        </a>
                        <a href="{{ route('penawaran.edit', $penawaran->id) }}"
                            style="color: #2f2fdd; text-decoration: none;">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        <form action="{{ route('penawaran.destroy', $penawaran->id) }}" method="POST"
                            style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                style="color:#991b1b ;background: none; border: none; cursor: pointer; font-size: 1rem;"
                                onclick="return confirm('Yakin ingin menghapus?')"><i class="bi bi-trash3"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>

    <script>
        // Auto hide alert setelah 5 detik
        setTimeout(function() {
            const alert = document.getElementById('alert-box');
            if (alert) {
                alert.style.transition = 'opacity 0.5s, transform 0.5s';
                alert.style.opacity = '0';
                alert.style.transform = 'translateY(-20px)';
                setTimeout(function() {
                    alert.remove();
                }, 500);
            }
        }, 5000);

        // Fungsi close manual
        function closeAlert() {
            const alert = document.getElementById('alert-box');
            if (alert) {
                alert.style.transition = 'opacity 0.3s, transform 0.3s';
                alert.style.opacity = '0';
                alert.style.transform = 'translateY(-20px)';
                setTimeout(function() {
                    alert.remove();
                }, 300);
            }
        }
    </script>
@endsection
