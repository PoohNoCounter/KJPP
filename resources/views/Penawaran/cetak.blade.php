<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Pemberitahuan</title>
    <style>
        @page {
            margin: 2cm 2cm 2cm 2cm;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Times New Roman', Times, serif;
            font-size: 12pt;
            line-height: 1.6;
            color: #000;
        }

        .container {
            width: 100%;
            max-width: 210mm;
            margin: 0 auto;
        }

        /* Header */
        .header {
            text-align: center;
            margin-bottom: 10px;
            border-bottom: 3px solid #000;
            padding-bottom: 10px;
        }

        .header-content {
            display: table;
            width: 100%;
        }

        .logo {
            display: table-cell;
            width: 80px;
            vertical-align: middle;
            padding-right: 15px;
        }

        .logo img {
            width: 70px;
            height: 70px;
        }

        .header-text {
            display: table-cell;
            vertical-align: middle;
            text-align: center;
        }

        .header-text h1 {
            font-size: 14pt;
            font-weight: bold;
            margin-bottom: 2px;
            text-transform: uppercase;
        }

        .header-text h2 {
            font-size: 16pt;
            font-weight: bold;
            margin-bottom: 2px;
        }

        .header-text h3 {
            font-size: 14pt;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .header-text p {
            font-size: 10pt;
            margin: 2px 0;
        }

        /* Title Section */
        .title-section {
            text-align: center;
            margin: 30px 0 20px 0;
        }

        .title-section h4 {
            font-size: 14pt;
            font-weight: bold;
            text-decoration: underline;
            margin-bottom: 5px;
        }

        .title-section p {
            font-size: 12pt;
            margin: 3px 0;
        }

        /* Content */
        .content {
            text-align: justify;
            margin: 20px 0;
        }

        .content p {
            margin-bottom: 15px;
            text-indent: 50px;
        }

        .content ol {
            margin-left: 50px;
            margin-bottom: 15px;
        }

        .content ol li {
            margin-bottom: 10px;
            text-align: justify;
        }

        /* Signature */
        .signature {
            margin-top: 40px;
            text-align: center;
        }

        .signature-content {
            display: inline-block;
            text-align: center;
            margin-left: 60%;
        }

        .signature p {
            margin: 5px 0;
        }

        .signature .date {
            text-align: right;
            margin-right: 20px;
            margin-bottom: 5px;
        }

        .signature .position {
            font-weight: normal;
            margin-bottom: 60px;
        }

        .signature .name {
            font-weight: bold;
            text-decoration: underline;
            margin-bottom: 2px;
        }

        .signature .nip {
            font-size: 11pt;
        }

        /* Footer */
        .footer {
            margin-top: 30px;
            font-size: 11pt;
        }

        .footer p {
            margin: 3px 0;
        }

        .stamp {
            position: absolute;
            right: 150px;
            margin-top: -100px;
            opacity: 0.7;
        }

        .stamp img {
            width: 120px;
            height: 120px;
        }
    </style>
</head>

<body>
    <div class="container">

        <!-- Header -->
        <div class="header">
            <div class="header-content">
                <div class="logo">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg=="
                        alt="Logo">
                </div>
                <div class="header-text">
                    <h1>KEMENTERIAN PENDIDIKAN DAN KEBUDAYAAN</h1>
                    <h2>UNIVERSITAS NEGERI JAKARTA</h2>
                    <h3>FAKULTAS EKONOMI</h3>
                    <p>Kampus Universitas Negeri Jakarta, Gedung R, Jalan Rawamangun Muka, Jakarta 13220</p>
                    <p>Telepon (021) 4721227, Surat Elektronik <a href="mailto:fe@unj.ac.id">fe@unj.ac.id</a></p>
                    <p>Laman <a href="http://www.fe.unj.ac.id">www.fe.unj.ac.id</a></p>
                </div>
            </div>
        </div>

        <!-- Title Section -->
        <div class="title-section">
            <h4>SURAT PEMBERITAHUAN</h4>
            <p>Nomor : {{ $penawaran->nomor }}</p>
        </div>

        <!-- Content -->
        <div class="content">
            <p>Dekan Fakultas Ekonomi Universitas Negeri Jakarta dengan ini memberitahukan kepada seluruh Mahasiswa baru
                Fakultas Ekonomi 2020/2021 bahwa :</p>

            <ol>
                <li>Mahasiswa baru Fakultas Ekonomi wajib mengikuti kegiatan Pengenalan Kehidupan Kampus Mahasiswa Baru
                    (PKKMB) Universitas Negeri Jakarta.</li>

                <li>Mahasiswa baru Fakultas Ekonomi dihimbau untuk mengikuti kegiatan Masa Bimbingan MAGNET FE
                    (Mahasiswa Generasi Terbaik) dalam rangka pembentukan karakter Mahasiswa baru yang mulia dan
                    berprestasi.</li>

                <li>Seluruh kegiatan dilakukan secara daring <em>(online)</em>.</li>

                <li>Jadwal kegiatan terlampir.</li>

                <li>Bagi mahasiswa baru yang dengan sengaja tidak mengikuti kegiatan-kegiatan tersebut, maka harus
                    mengikuti kegiatan tersebut di tahun berikutnya.</li>
            </ol>

            <p style="text-indent: 0;">Demikianlah surat pemberitahuan ini dibuat untuk dapat diperhatikan dan dipatuhi.
            </p>
        </div>

        <!-- Signature -->
        <div class="signature">
            <div class="signature-content">
                <p class="date">10 September 2020</p>
                <p class="position">Dekan,</p>

                <!-- Stamp (Optional) -->
                <div class="stamp">
                    <!-- <img src="path/to/stamp.png" alt="Stempel"> -->
                </div>

                <p class="name">Dr. Ari Saptono, SE., M.Pd</p>
                <p class="nip">NIP 197207152001121001</p>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p><strong>Tembusan :</strong></p>
            <ol>
                <li>Wakil Dekan I, II, dan III;</li>
                <li>Koordinator Program Studi.</li>
            </ol>
        </div>

    </div>
</body>

</html>
