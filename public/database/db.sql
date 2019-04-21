
--
-- Base de données :  `mypdo`
--

-- --------------------------------------------------------
CREATE DATABASE `mypdo` ;
USE `mypdo` ;

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  `name` varchar(50) NOT NULL
);
