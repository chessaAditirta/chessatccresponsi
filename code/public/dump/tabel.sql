CREATE TABLE `pendaftar` (
  `id` int(11) NOT NULL auto_increment,
  `nama` varchar(100) NOT NULL,
  `sekolah` varchar(100) NOT NULL,
  `umur` int(3) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
);