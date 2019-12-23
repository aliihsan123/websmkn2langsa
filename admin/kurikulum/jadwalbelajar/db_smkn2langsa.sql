-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3036
-- Waktu pembuatan: 18 Des 2019 pada 15.19
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_smkn2langsa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `proses_jadwal`
--

CREATE TABLE `proses_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `kd_guru` varchar(20) DEFAULT NULL,
  `kd_mapel` varchar(20) DEFAULT NULL,
  `nama_kelas` varchar(20) DEFAULT NULL,
  `nama_ruang` varchar(20) NOT NULL,
  `hari` varchar(20) DEFAULT NULL,
  `waktu` varchar(20) DEFAULT NULL,
  `jam_ngajar` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `proses_jadwal`
--

INSERT INTO `proses_jadwal` (`id_jadwal`, `kd_guru`, `kd_mapel`, `nama_kelas`, `nama_ruang`, `hari`, `waktu`, `jam_ngajar`) VALUES
(4, 'NUR', 'XII BD', 'XII RPL2', 'TI-1', 'Senin', '45', '1,2,3,4,5,6,7,8,9,10'),
(5, 'DW', 'XII PWdPB', 'XII RPL2', 'RPL', 'Selasa', '45', '1,2,3,4,5,6,7,8,9,10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_beritaunggulan`
--

CREATE TABLE `tbl_beritaunggulan` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_beritaunggulan`
--

INSERT INTO `tbl_beritaunggulan` (`id`, `judul`, `nama`, `foto`, `kategori`, `tanggal`) VALUES
(2, 'Apel Pagi', 'Pelaksanaan apel pagi rutin dilakukan di SMKN 2 Langsa.', '0545cta02.jpg', 'aktif', '2019-11-11 04:50:45'),
(3, 'Pemberian Arahan Saat Apel Pagi', 'Pemberian arahan kepada siswa/i SMKN 2 Langsa.', '0530cta04.jpg', 'aktif', '2019-11-11 04:51:30'),
(6, 'Upacara Bendera', 'TUpacara bendera rutin dilakukan setiap hari senin oleh guru maupun siswa/i SMKN 2 Langsa.', '06260535smk1.jpg', 'aktif', '2019-11-11 05:40:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_data_sekolah`
--

CREATE TABLE `tbl_data_sekolah` (
  `id_data_sekolah` int(11) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `jenjang_sekolah` varchar(3) NOT NULL,
  `alamat_sekolah` varchar(50) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `no_fax` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `nama_kepala` varchar(50) NOT NULL,
  `nip_kepala` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_data_sekolah`
--

INSERT INTO `tbl_data_sekolah` (`id_data_sekolah`, `nama_sekolah`, `jenjang_sekolah`, `alamat_sekolah`, `no_telp`, `no_fax`, `email`, `website`, `nama_kepala`, `nip_kepala`) VALUES
(1, 'SMK NEGERI 2 LANGSA', 'SMK', 'Jalan Jend. A. Yani Paya Bujok Seulemak', '(0641) 21116', '(0641) 21116', 'smkn2langsa75@gmail.com', 'www.smkn2langsa.sch.id', 'RAHIMIN, S.T', '19650707 198803 006');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_galery`
--

CREATE TABLE `tbl_galery` (
  `id` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_galery`
--

INSERT INTO `tbl_galery` (`id`, `judul`, `nama`, `foto`, `kategori`, `tanggal`) VALUES
(2, 'galeri 1', 'deskripsi galery 1', '1143', 'aktif', '2019-11-11 10:50:43'),
(3, 'galeri 2', 'deskripsi galeri 2', '1146', 'aktif', '2019-11-11 10:53:46'),
(4, 'galeri 3', 'isi galeri 3', '1230', 'aktif', '2019-11-11 11:04:30'),
(5, 'galeri 4', 'isi galeri 4', '1238', 'aktif', '2019-11-11 11:04:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `id_guru` int(11) NOT NULL,
  `kd_guru` varchar(20) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `nip` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_guru`
--

INSERT INTO `tbl_guru` (`id_guru`, `kd_guru`, `nama_guru`, `nip`) VALUES
(1, 'NUR', 'ARDINUR MAHYUZAR, S.ST', '-'),
(2, 'DW', 'DRS. DIAWAN, M.T', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jam_mapel`
--

CREATE TABLE `tbl_jam_mapel` (
  `id_jam` int(11) NOT NULL,
  `kd_jam` varchar(2) NOT NULL,
  `waktu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jam_mapel`
--

INSERT INTO `tbl_jam_mapel` (`id_jam`, `kd_jam`, `waktu`) VALUES
(1, '1', '7:45 - 8:25'),
(2, '2', '8:25 - 9:05'),
(3, '3', '9:05 - 9:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `id_kelas` int(11) NOT NULL,
  `kd_kelas` varchar(20) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL,
  `jurusan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id_kelas`, `kd_kelas`, `nama_kelas`, `jurusan`) VALUES
(1, 'XII', 'XII RPL2', 'RPL'),
(2, 'XII', 'XII RPL1', 'RPL'),
(3, 'XII', 'XII TKJ', 'TKJ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_konten_terbaru`
--

CREATE TABLE `tbl_konten_terbaru` (
  `id` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_konten_terbaru`
--

INSERT INTO `tbl_konten_terbaru` (`id`, `judul`, `nama`, `foto`, `kategori`, `tanggal`) VALUES
(7, 'Tes konten terbaru', 'isi konten', '1039', 'aktif', '2019-11-11 09:47:39'),
(8, 'Tes konten terbaru 2', 'isi konten 2', '1000', 'aktif', '2019-11-11 09:48:00'),
(9, 'Tes konten terbaru 3', 'isi konten 3', '1057', 'aktif', '2019-11-11 09:48:57'),
(10, 'Tes konten terbaru 4', 'isi konten 4', '1018', 'aktif', '2019-11-11 09:49:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mapel`
--

CREATE TABLE `tbl_mapel` (
  `id_mapel` int(11) NOT NULL,
  `kd_mapel` varchar(20) NOT NULL,
  `nama_mapel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_mapel`
--

INSERT INTO `tbl_mapel` (`id_mapel`, `kd_mapel`, `nama_mapel`) VALUES
(1, 'XII BD', 'XII BASIS DATA'),
(2, 'XII PWdPB', 'XII Pemrograman Web dan Perang'),
(3, 'XII PBO', 'XII Pemrograman Berorientasi Objek');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_misi`
--

CREATE TABLE `tbl_misi` (
  `id` int(11) NOT NULL,
  `misi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_misi`
--

INSERT INTO `tbl_misi` (`id`, `misi`) VALUES
(1, 'Menyusun standar kompetensi nasional dan internasional dengan pelaksanaan CBT.'),
(2, 'Meningkatkan kualiatas guru agar memiliki sertifikasi nasional/internasional.'),
(3, 'Meningkatkan imtag seluruh warga sekolah.'),
(4, 'Pembenahan fasilitas diklat untuk mendukung target kompetensi tamatan.'),
(5, 'Pengembangan SIM dan internetnisasi sekolah.'),
(6, 'Meningkatkan jaminan kerja dengan institusi pasangan dan assessor.'),
(7, 'Menyelenggarakan UP secara profesional.'),
(8, 'Menerapkan menejemen mutu ISO 9001.'),
(9, 'Mengupayakan dukungan stake holder dan masyarakat luas.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `id` int(11) NOT NULL,
  `pengumuman` varchar(200) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`id`, `pengumuman`, `tgl`) VALUES
(1, 'Pelaksanaan UTS tahun 2019-2020 1 November s/d 7 November 2019.', '2019-11-11'),
(2, 'Pelaksanaan Try Out di SMK Negeri 2 Langsa Tanggal 28 - 30 Oktober 2019.', '2019-11-08'),
(3, 'Pengumpulan berkas siswa/i tingkat 3 untuk pendataan peserta Ujian Nasional (UN).', '2019-11-07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ruang`
--

CREATE TABLE `tbl_ruang` (
  `id_ruang` int(11) NOT NULL,
  `kd_ruang` varchar(30) NOT NULL,
  `nama_ruang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_ruang`
--

INSERT INTO `tbl_ruang` (`id_ruang`, `kd_ruang`, `nama_ruang`) VALUES
(1, 'LAB TI 1', 'TI-1'),
(2, 'LAB TI', 'TI-2'),
(3, 'LAB TI', 'RPL');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_struktur`
--

CREATE TABLE `tbl_struktur` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_struktur`
--

INSERT INTO `tbl_struktur` (`id`, `nama`, `foto`, `tanggal`) VALUES
(4, 'Struktur', '063704571 STRUKKURORGN.png', '2019-11-11 05:35:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_visi`
--

CREATE TABLE `tbl_visi` (
  `id` int(11) NOT NULL,
  `visi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_visi`
--

INSERT INTO `tbl_visi` (`id`, `visi`) VALUES
(1, 'Menjadi lembaga pendidikan dan pelatihan kejuruan yang memiliki kemampuan memberikan keahlian kompetitif, kreatif, inofatif, budaya dan bermanfaat, serta siap memasuki pasar kerja internasional.		    			    			    			    			    			    			    			    			    			    			    			    			    			    			    			    			    			    			    		');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama_lengkap`, `level`) VALUES
(1, '4dm1n', 'smkn2langsastm', 'ADMIN', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `proses_jadwal`
--
ALTER TABLE `proses_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indeks untuk tabel `tbl_beritaunggulan`
--
ALTER TABLE `tbl_beritaunggulan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_data_sekolah`
--
ALTER TABLE `tbl_data_sekolah`
  ADD PRIMARY KEY (`id_data_sekolah`);

--
-- Indeks untuk tabel `tbl_galery`
--
ALTER TABLE `tbl_galery`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `tbl_jam_mapel`
--
ALTER TABLE `tbl_jam_mapel`
  ADD PRIMARY KEY (`id_jam`);

--
-- Indeks untuk tabel `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `tbl_konten_terbaru`
--
ALTER TABLE `tbl_konten_terbaru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indeks untuk tabel `tbl_misi`
--
ALTER TABLE `tbl_misi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_ruang`
--
ALTER TABLE `tbl_ruang`
  ADD PRIMARY KEY (`id_ruang`);

--
-- Indeks untuk tabel `tbl_struktur`
--
ALTER TABLE `tbl_struktur`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_visi`
--
ALTER TABLE `tbl_visi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `proses_jadwal`
--
ALTER TABLE `proses_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_beritaunggulan`
--
ALTER TABLE `tbl_beritaunggulan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_data_sekolah`
--
ALTER TABLE `tbl_data_sekolah`
  MODIFY `id_data_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_galery`
--
ALTER TABLE `tbl_galery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_jam_mapel`
--
ALTER TABLE `tbl_jam_mapel`
  MODIFY `id_jam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_konten_terbaru`
--
ALTER TABLE `tbl_konten_terbaru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_misi`
--
ALTER TABLE `tbl_misi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_ruang`
--
ALTER TABLE `tbl_ruang`
  MODIFY `id_ruang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_struktur`
--
ALTER TABLE `tbl_struktur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_visi`
--
ALTER TABLE `tbl_visi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
