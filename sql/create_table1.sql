create table surat_tugas (
st_id int not null auto_increment primary key,
st_opd varchar (255),
st_nomor  varchar (255),
st_dasar text,
st_pegawai_nama varchar(255),
st_pegawai_golru varchar(255),
st_pegawai_pangkat varchar(255),
st_pegawai_nip varchar(255),
st_pegawai_jabatan varchar(255),
st_untuk varchar(255),
st_lama pelaksanaan int,
st_tanggal awal datetime,
st_tanggal akhir datetime,
st_tempat penetapan varchar(255),
st_tanggal penetapan datetime,
st_jabatan penanda tangan varchar(255),
st_nama penanda tangan varchar(255),
st_pangkat penanda tangan varchar(255),
st_nip penanda tangan varchar(255)
);


/*

create table ms_opd(id_opd int not null auto_increment primary key, nm_opd varchar(255));

insert into ms_opd(nm_opd) values ('Badan Kepegawaian dan Pengembangan SDM'),
('Dinas Komunikasi dan Informatika'),('Inspektorat');

select * From ms_opd

**/
