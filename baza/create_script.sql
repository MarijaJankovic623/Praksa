CREATE TABLE `korisnik` (
  `id_korisnik` int(11) NOT NULL AUTO_INCREMENT,
  `korisnicko_ime` varchar(100) NOT NULL,
  `lozinka` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id_korisnik`),
  UNIQUE KEY `korisnicko_ime_UNIQUE` (`korisnicko_ime`),
  UNIQUE KEY `lozinka_UNIQUE` (`lozinka`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;





CREATE TABLE `podsetnik` (
  `id_podsetnik` int(11) NOT NULL AUTO_INCREMENT,
  `id_korisnik` int(11) NOT NULL,
  `opis` varchar(2000) NOT NULL,
  `vreme` timestamp NOT NULL,
  `ponedeljak` int(11) DEFAULT '0',
  `utorak` int(11) DEFAULT '0',
  `sreda` int(11) DEFAULT '0',
  `cetvrtak` int(11) DEFAULT '0',
  `petak` int(11) DEFAULT '0',
  `subota` int(11) DEFAULT '0',
  `nedelja` int(11) DEFAULT '0',
  PRIMARY KEY (`id_podsetnik`),
  KEY `id_korisnik_idx` (`id_korisnik`),
  CONSTRAINT `id_korisnik` FOREIGN KEY (`id_korisnik`) REFERENCES `korisnik` (`id_korisnik`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
