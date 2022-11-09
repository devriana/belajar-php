-- create database
CREATE DATABASE fakultas;

-- create table
CREATE TABLE jurusan (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    kode CHAR(4) NOT NULL,
    nama VARCHAR(50) NOT NULL
);

CREATE TABLE mahasiswa (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    id_jurusan INTEGER NOT NULL,
    nim CHAR(8) NOT NULL,
    nama VARCHAR(50) NOT NULL,
    jenis_kelamin enum ('Laki-Laki', 'perempuan') NOT NULL,
    tempat_lahir VARCHAR(50) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    alamat VARCHAR(255) NOT NULL,
    FOREIGN KEY (id_jurusan) REFERENCES jurusan (id)
);

-- insert jurusan
insert into jurusan (kode,nama) values ('APBL','Administrasi Publik');
insert into jurusan (kode, nama) values ("PTIF", "Pendidikan Teknik Informatika");

-- insert mahasiswa
 insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat)
    -> values (1,'20220001', 'Lisa', 'Perempuan', 'Malang', '2000-12-23', 'Jl. Aman 17');
 insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat)
    -> values (1,'20220001', 'Fulan', 'laki-laki', 'Malang', '2000-12-23', 'Jl. Sukarno Hatta');

-- update mahasiswa
update mahasiswa set alamat = "Jl. Aman 17" where id = 1;
update mahasiswa set nama = "Lisa" where id = 1;

-- delete mahasiswa
delete from mahasiswa where id = 2;