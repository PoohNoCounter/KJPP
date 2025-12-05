@extends('components.layout')

@section('content')
<style>
    .form-section {
        border-bottom: 1px solid #e5e7eb;
        padding-bottom: 1.5rem;
        margin-bottom: 1.5rem;
    }
    .form-group {
        margin-bottom: 1rem;
    }
    .form-label {
        display: block;
        font-size: 0.875rem;
        font-weight: 500;
        color: #374151;
        margin-bottom: 0.5rem;
    }
    .form-input {
        width: 100%;
        border: 1px solid #d1d5db;
        border-radius: 0.5rem;
        padding: 0.625rem 1rem;
        font-size: 0.875rem;
        transition: all 0.2s;
    }
    .form-input:focus {
        outline: none;
        border-color: #2563eb;
        box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
    }
    .form-textarea {
        width: 100%;
        border: 1px solid #d1d5db;
        border-radius: 0.5rem;
        padding: 0.625rem 1rem;
        font-size: 0.875rem;
        resize: vertical;
        transition: all 0.2s;
    }
    .form-textarea:focus {
        outline: none;
        border-color: #2563eb;
        box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
    }
    .section-title {
        font-size: 1.125rem;
        font-weight: 600;
        color: #1f2937;
        margin-bottom: 1rem;
    }
    .btn-primary {
        padding: 0.625rem 1.5rem;
        background: #000000;
        color: white;
        border: none;
        border-radius: 0.5rem;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.2s;
    }
    .btn-primary:hover {
        background: #ffffff;
        color: rgb(0, 0, 0);

    }
    .btn-secondary {
        padding: 0.625rem 1.5rem;
        background: rgb(255, 255, 255);
        color: #374151;
        border: 1px solid #d1d5db; 
        border-radius: 0.5rem;
        font-weight: 500;
        cursor: pointer;
        text-decoration: none;
        display: inline-block;
        transition: all 0.2s;
    }
    .btn-secondary:hover {
        background: #f9fafb;
        color: #000000; 
    }
    .alert-success {
        margin-bottom: 1.5rem;
        background: #f0fdf4;
        border-left: 4px solid #22c55e;
        padding: 1rem;
        border-radius: 0.25rem;
        color: #15803d;
    }
    .alert-error {
        margin-bottom: 1.5rem;
        background: #fef2f2;
        border-left: 4px solid #ef4444;
        padding: 1rem;
        border-radius: 0.25rem;
        color: #991b1b;
    }
</style>

<div style="max-width: 1000px; margin: 2rem auto; padding: 0 1rem;">
    
    <!-- Header -->
    <div style="background: linear-gradient(to right, #000000, #000000); color: white; padding: 1.5rem 2rem; border-radius: 0.5rem 0.5rem 0 0;">
        <h2 style="font-size: 1.875rem; font-weight: bold; margin: 0;">Tambah Surat Penawaran</h2>
        <p style="color: #ffffff; margin: 0.5rem 0 0 0;">Lengkapi form di bawah ini dengan data yang benar</p>
    </div>

    <!-- Form Card -->
    <div style="background: white; padding: 2rem; border-radius: 0 0 0.5rem 0.5rem; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
        
        <!-- Alert -->
        @if(session('success'))
            <div class="alert-success">
                <strong>✓ Berhasil!</strong> {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert-error">
                <strong>✗ Error!</strong> {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('penawaran.store') }}" method="POST">
            @csrf

            <!-- Informasi Surat -->
            <div class="form-section">
                <h3 class="section-title"><i class="bi bi-file-earmark-text-fill" style="color: #aaafba"></i> Informasi Surat</h3>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                    <div class="form-group">
                        <label class="form-label">Nomor Surat <span style="color: #ef4444;">*</span></label>
                        <input type="text" name="nomor" class="form-input" placeholder="Contoh: 001/SP/2024" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Tanggal <span style="color: #ef4444;">*</span></label>
                        <input type="date" name="tanggal" class="form-input" required>
                    </div>
                </div>
            </div>

            <!-- Data Pemberi dan Aset -->
            <div class="form-section">
                <h3 class="section-title"><i class="bi bi-file-earmark-person-fill" style="color: #626d9d"></i> Data Pemberi & Aset</h3>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                    <div class="form-group">
                        <label class="form-label">Pemberi <span style="color: #ef4444;">*</span></label>
                        <input type="text" name="pemberi" class="form-input" placeholder="Nama pemberi penawaran" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Jenis Aset <span style="color: #ef4444;">*</span></label>
                        <input type="text" name="jenis_aset" class="form-input" placeholder="Contoh: Kendaraan, Elektronik" required>
                    </div>
                </div>
            </div>

            <!-- Maksud dan Tujuan -->
            <div class="form-section">
                <h3 class="section-title"><i class="bi bi-list-columns" style="color: #991b1b"></i></i> Maksud & Tujuan</h3>
                
                <div class="form-group">
                    <label class="form-label">Maksud</label>
                    <textarea name="maksud" rows="4" class="form-textarea" placeholder="Jelaskan maksud dari penawaran ini..."></textarea>
                </div>

                <div class="form-group">
                    <label class="form-label">Tujuan</label>
                    <textarea name="tujuan" rows="4" class="form-textarea" placeholder="Jelaskan tujuan dari penawaran ini..."></textarea>
                </div>
            </div>

            <!-- Informasi Finansial -->
            <div class="form-section">
                <h3 class="section-title"><i class="bi bi-coin" style="color: #f0ec15"></i> Informasi Finansial</h3>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                    <div class="form-group">
                        <label class="form-label">Nilai Kebutuhan</label>
                        <div style="position: relative;">
                            <span style="position: absolute; left: 1rem; top: 50%; transform: translateY(-50%); color: #6b7280;"></span>
                            <input type="text" step="0.01" name="nilai_kebutuhan" class="form-input" style="padding-left: 3rem;" placeholder="Kebutuhan">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Biaya</label>
                        <div style="position: relative;">
                            <span style="position: absolute; left: 1rem; top: 50%; transform: translateY(-50%); color: #6b7280;">Rp</span>
                            <input type="number" step="0.01" name="biaya" class="form-input" style="padding-left: 3rem;" placeholder="0.00">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Informasi Rekening -->
            <div style="margin-bottom: 1.5rem;">
                <h3 class="section-title"><i class="bi bi-credit-card-2-front-fill" style="color: #2563eb"></i> Informasi Rekening</h3>
                
                <div class="form-group">
                    <label class="form-label">Nomor Rekening</label>
                    <input type="text" name="norek" class="form-input" placeholder="Contoh: 1234567890">
                </div>
            </div>

            <!-- Buttons -->
            <div style="display: flex; justify-content: flex-end; gap: 1rem; padding-top: 1.5rem; border-top: 1px solid #e5e7eb;">
                <a href="{{ route('penawaran.index') }}" class="btn-secondary">Batal</a>
                <button type="submit" class="btn-primary">Simpan Surat</button>
            </div>

        </form>

    </div>

</div>
@endsection