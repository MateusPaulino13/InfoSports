SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

-- user = 0
-- adm = 1
-- anunciante = 2
-- atleta = 3

CREATE TABLE `reg` (
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `city` varchar(15) NOT NULL,
  `image` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `id` int(11) NOT NULL,
  `acesso` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

-- anunciante
CREATE TABLE if not exists anunciante(
  id int(11) primary key not null auto_increment,
  name varchar(100) not null,
  username varchar(70) not null,
  password varchar(70) not null,
  address varchar(150) not null,
  cpf varchar(11) not null,
  acesso int not null DEFAULT 2
);

-- atleta
CREATE TABLE if not exists atleta(
  id int(11) primary key auto_increment not null,
  name varchar(40) not null,
  username varchar(70) not null,
  password varchar(70) not null,
  altura varchar(5) not null,
  peso varchar(4) not null,
  address varchar(5) not null,
  cpf varchar(11) not null,
  nascimento varchar(10) not null,
  jogou tinyint(1) not null,
  acesso int not null DEFAULT 3
);

-- evento
CREATE TABLE if not exists evento(
	  id int primary key not null auto_increment,
    name varchar(70) not null,
    description varchar(255) not null,
    image varchar(255),
    date DATE not null,
    id_anunciante int not null,
    FOREIGN KEY(id_anunciante) REFERENCES anunciante(id)
);

-- adm
-- CREATE TABLE if not exists adm(
-- 	  id int primary key not null auto_increment,
--     name varchar(40) not null,
--     username varchar(40) not null,
--     password varchar(50),
--     acesso int not null DEFAULT 1
-- );
