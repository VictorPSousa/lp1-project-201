-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Set-2020 às 02:03
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sapataria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcliente`
--

CREATE TABLE `tbcliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(128) NOT NULL,
  `sobrenome` varchar(64) NOT NULL,
  `rg` varchar(12) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `email` varchar(128) NOT NULL,
  `telefone` varchar(19) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `dtnasc` date NOT NULL,
  `dtcad` date NOT NULL COMMENT 'data de cadastro',
  `genero` varchar(1) NOT NULL,
  `tamanho` int(11) NOT NULL COMMENT 'tamanho do sapato',
  `corfav` varchar(32) NOT NULL COMMENT 'cor favorita'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbcliente`
--

INSERT INTO `tbcliente` (`id`, `nome`, `sobrenome`, `rg`, `cpf`, `email`, `telefone`, `celular`, `dtnasc`, `dtcad`, `genero`, `tamanho`, `corfav`) VALUES
(1, 'Valentina', 'Bernardes', '49.356.023-3', '167.688.038-08', 'vahllbe@yahoo.com', '+55 (92) 3701-7019', '+55 (92) 9 8236-2560', '1998-03-29', '0000-00-00', 'F', 35, 'Roxa'),
(2, 'Cauê', 'De Jesus', '16.084.567-1', '658.874.361-07', 'caue_carvajal22@gmail.com', '+55 (79) 3676-4028', '+55 (79) 9 8859-8953', '2001-08-02', '0000-00-00', 'M', 39, 'Vermelha'),
(3, 'Hugo', 'das Neves', '31.633.961-1', '418.250.263-94', 'hugodanielcesardasneves@tetrapark.com.br', '+55 (63) 2808-3721', '+55 (63) 9 9442-0450', '1967-02-23', '0000-00-00', 'M', 37, 'Marrom'),
(4, 'Yuri', 'Figueiredo', '14.568.447-7', '703.562.728-69', 'yurifiga_@terra.com.br', '+55 (96) 3793-3431', '+55 (96) 9 9754-2164', '1985-09-10', '0000-00-00', 'M', 45, 'Preta'),
(5, 'Bianca', 'Dias', '28.153.655-7', '416.878.439-88', 'bibidias@outlook.com', '+55 (47) 2992-4369', '+55 (47) 9 9622-6587', '1971-09-15', '0000-00-00', 'F', 37, 'Rosa'),
(6, 'Julio', 'da Luz', '41.761.296-5', '820.463.538-97', 'juliocarlosdaluz@uol.com.br', '+55 (98) 2656-9351', '+55 (98) 9 8484-1913', '1980-02-01', '0000-00-00', 'M', 45, 'Laranja');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbfuncionario`
--

CREATE TABLE `tbfuncionario` (
  `id_func` int(11) NOT NULL,
  `nome_func` varchar(128) NOT NULL,
  `sobrenome_func` varchar(64) NOT NULL,
  `dtnasc_func` date NOT NULL,
  `cpf_func` varchar(21) NOT NULL,
  `email_func` varchar(128) NOT NULL,
  `tel_func` varchar(19) NOT NULL,
  `cel_func` varchar(20) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `rua` varchar(128) NOT NULL,
  `bairro` varchar(64) NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(64) DEFAULT NULL,
  `genero_func` varchar(1) NOT NULL,
  `dtcontratacao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbfuncionario`
--

INSERT INTO `tbfuncionario` (`id_func`, `nome_func`, `sobrenome_func`, `dtnasc_func`, `cpf_func`, `email_func`, `tel_func`, `cel_func`, `cep`, `rua`, `bairro`, `numero`, `complemento`, `genero_func`, `dtcontratacao`) VALUES
(1, 'Débora', 'Miyake', '1999-02-04', '111.222.333-45', 'debora@gmail.com', '+55 (11) 2111-1111', '+55 (11) 9 9111-1111', '07043-489', 'Rua Hugo Mano', 'Jd. Rio de Fevereiro', 996, 'A', 'F', '2019-11-21'),
(2, 'Jennifer', 'Benfica', '1996-04-03', '385.068.255-20', 'jennyhh@gmail.com', '+55 (91) 3812-6118', '+55  (91) 9 9877-850', '66090-780', 'Rua do Bloco Vinte e Nove', 'São Brás', 223, '', 'F', '2019-07-20'),
(3, 'Rodrigo', 'Novaes', '2000-08-09', '989.667.162-10', 'rodrigoyagofelipenovae02@outlook.com', '+55 (85) 3621-1580', '+55 (85) 9 8867-0484', '60182-375', 'Rua Professor Mozart Solon', 'Antônio Diogo', 581, 'Apt. 4', 'M', '2020-04-07'),
(4, 'Guilherme', 'Duarte', '2002-05-05', '336.907.481-86', 'gguilipeduda@yahoo.com', '+55 (79) 2617-3991', '+55 (79) 9 8513-4968', '49070-853', 'Rua C', 'Cidade Antiga', 676, '', 'M', '2020-09-01'),
(5, 'Tereza', 'Rocha', '1991-12-02', '847.564.364-71', 'erezarayssa.eloarocha@gmail.com', '+55 (53) 2702-3842', '+55 (53) 9 8342-7274', '96076-380', 'Rua Quatorze', 'Pelotas', 3987, '3o Andar', 'F', '2020-08-03'),
(6, 'Eduardo ', 'Melo', '1988-01-22', '025.160.038-62', 'carloseduardojuliomelo_@terra.com.br', '+55 (51) 3809-7542', '+55 (51) 9 9561-7809', '91740-000', 'Av. da Cavalheirada', 'Cavalhada', 104, '2A', 'M', '2019-08-07');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblogin`
--

CREATE TABLE `tblogin` (
  `id_login` int(11) NOT NULL,
  `usuario` varchar(54) NOT NULL,
  `nome_usuario` varchar(128) NOT NULL,
  `senha` varchar(256) NOT NULL,
  `tipo` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tblogin`
--

INSERT INTO `tblogin` (`id_login`, `usuario`, `nome_usuario`, `senha`, `tipo`) VALUES
(1, 'admin', 'Administrador', 'e10adc3949ba59abbe56e057f20f883e', 'adm'),
(2, 'victor', 'Victor Pedro', 'e10adc3949ba59abbe56e057f20f883e', 'user');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbproduto`
--

CREATE TABLE `tbproduto` (
  `id_prod` int(11) NOT NULL,
  `referencia` varchar(16) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `nome_prod` varchar(32) NOT NULL,
  `marca` varchar(32) NOT NULL,
  `ocasiao` varchar(32) NOT NULL,
  `descricao` text NOT NULL,
  `genero` varchar(1) NOT NULL,
  `material` varchar(64) NOT NULL,
  `pisada` varchar(16) NOT NULL,
  `origem` varchar(64) NOT NULL,
  `garantia` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbproduto`
--

INSERT INTO `tbproduto` (`id_prod`, `referencia`, `quantidade`, `nome_prod`, `marca`, `ocasiao`, `descricao`, `genero`, `material`, `pisada`, `origem`, `garantia`) VALUES
(1, 'D22-3838-026-49', 33, 'Attract Se 815', 'Olympikus', 'Dia a Dia/Academia', 'O Tênis Olympikus Attract Se 815 Masculino é confeccionado em material sintético com detalhes em material têxtil, garantindo maior conforto e respirabilidade, a estrutura é firme e possui perfuros para circulação de ar. A entressola em eva traz a tecnologia Evasense, EVA com dupla densidade que oferece maciez e conforto ao caminhar, e o solado em borracha frisada garante melhor aderência ao solo. Aposte na Olympikus para completar o seu look esportivo em grande estilo!', 'M', 'Mesh', 'Neutra', 'Nacional', 'Contra defeito de fabricação'),
(3, 'HZM-3549-026-40', 9, 'Downshifter 10', 'Nike', 'Dia a Dia/Corrida', 'O Tênis Nike Masculino Downshifter 10 traz amortecimento e suporte atualizados, para garantir uma corrida estável e confortável. Esse tênis de corrida é confeccionado em material respirável, cabedal em couro sintético, com mesh no calcanhar, proporciona suporte e circulação de ar, forro acolchoado, entressola em espuma de EVA flexível, garantindo a sensação de amortecimento responsivo durante o treino e solado em borracha para tração durável. O homem que busca resultados e estilo, conta com a Nike para acompanhar nos treinos e no dia a dia.', 'M', 'Sintético e Têxtil', 'Macia', 'Internacional', 'Contra defeito de fabricação'),
(4, 'D10-5550-300-20', 57, 'Gel-Equation 10', 'Asics', 'Dia a Dia/Caminhada', 'Saia para correr com o Tênis Masculino Asics Gel-Equation 10! Confeccionado com material têxtil e sintético que garante circulação de ar conforto para os seus pés durante o treino, o tênis de corrida conta com amortecimento em Gel, que proporciona ótima absorção dos impactos, e o solado conta com a borracha AHAR, para maior durabilidade do calçado.', 'U', 'Sintético', 'Amortecida', 'Nacional', 'Contra defeito de fabricação'),
(5, 'RQR-0000-006-34', 38, 'Bota Cano Curto Salto Bloco Alto', 'MARJORIE', 'Casual', 'O cano médio com shape ajustado segue com tudo nessa temporada de inverno. Curinga para todas as ocasiões, seu salto grosso faz com que essa bota seja uma escolha certeira, além de confortável! Esse modelo é perfeito para produções poderosas com minissaias e vestidos para a balada ou looks com jeans para o dia.', 'F', 'Couro Sintético', 'Confortável', 'Nacional', 'Contra defeito de fabricação'),
(6, 'D26-0147-080-99', 40, 'All Star Ct As Core Ox', 'Converse', 'Casual', 'Para os apaixonados por clássicos, o Tênis Converse All Star Ct As Core Ox é a companhia certa para o dia a dia. Fácil de combinar, o calçado se encaixa em diferentes ocasiões, esbanjando estilo.', 'U', 'Tecido', 'Dura', 'Internacional', 'Contra defeito de fabricação'),
(7, 'F95-6145-006-34', 94, 'Verniz', 'Moleca', 'Dia a Dia', 'Produção fashion urbano, ativado! Inspire-se nessa estação com o Tênis Moleca Verniz Feminino, perfeito para todos os momentos. Confeccionado em material sintético, tem solado de borracha, cadarço ajustável e acabamento em verniz. O Up que você merece no look!', 'F', 'Têxtil & Sintético', 'Emborrachada', 'Nacional', 'Contra defeito de fabricação');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbfuncionario`
--
ALTER TABLE `tbfuncionario`
  ADD PRIMARY KEY (`id_func`);

--
-- Indexes for table `tblogin`
--
ALTER TABLE `tblogin`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `tbproduto`
--
ALTER TABLE `tbproduto`
  ADD PRIMARY KEY (`id_prod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbcliente`
--
ALTER TABLE `tbcliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbfuncionario`
--
ALTER TABLE `tbfuncionario`
  MODIFY `id_func` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblogin`
--
ALTER TABLE `tblogin`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbproduto`
--
ALTER TABLE `tbproduto`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
