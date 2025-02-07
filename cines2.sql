CREATE TABLE `taquilla` (
  `id` int(11) NOT NULL,
  `boleto` int(11) NOT NULL,
  `pelicula` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

ALTER TABLE `taquilla`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `taquilla`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT=3;