CREATE TABLE `korisnik` (
  `id_korisnik` int(11) NOT NULL,
  `korisnicko_ime` varchar(100) NOT NULL,
  `lozinka` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id_korisnik`),
  UNIQUE KEY `korisnicko_ime_UNIQUE` (`korisnicko_ime`),
  UNIQUE KEY `lozinka_UNIQUE` (`lozinka`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `podsetnik` (
  `id_podsetnik` int(11) NOT NULL,
  `id_korisnik` int(11) NOT NULL,
  `opis` varchar(2000) NOT NULL,
  `period` int(11) NOT NULL,
  `vreme` timestamp NOT NULL,
  PRIMARY KEY (`id_podsetnik`),
  KEY `id_korisnik_idx` (`id_korisnik`),
  CONSTRAINT `id_korisnik` FOREIGN KEY (`id_korisnik`) REFERENCES `korisnik` (`id_korisnik`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

