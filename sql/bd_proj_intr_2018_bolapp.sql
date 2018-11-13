--
-- Database: `bd_proj_intr_2018_bolapp`
-- Chamar as duas linhas abaixo primeiro

CREATE DATABASE `bd_proj_intr_2018_bolapp`;
USE `bd_proj_intr_2018_bolapp`;

--
-- Estrutura da tabela `jogador`
--

CREATE TABLE `jogador` (
  `cod`		 int ,
  `nome`	 varchar(40) ,
  `login`	 varchar(20) ,
  `senha`	 varchar(20) ,
  `endereco` varchar(100),
  `email` 	 varchar(50),
  `telefone` varchar(15)
) ;

--
-- Indexes for table `jogador`
--
ALTER TABLE `jogador`
  ADD PRIMARY KEY (`cod`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT for table `jogador`
--
ALTER TABLE `jogador`
  MODIFY `cod` int AUTO_INCREMENT;

--
-- Extraindo dados da tabela `jogador`
--

INSERT INTO `jogador` (`cod`, `nome`, `login`, `senha`, `endereco`, `email`, `telefone`) VALUES
(1, 'Railla Pamella de Souza Lima', 'railla', '123456', 'Quadra 05 Conjunto W, 13', 'railla@gmail.com', '(61) 9965-9371'),
(2, 'Lucas Matheus de Souza Pereira', 'lukkasmatteus', '123456', 'Quadra 15 Conjunto Y\r\n05', 'lucas@gmail.com', '(61) 9965-9371'),
(3, 'Leonardo Cunha', 'leo', '123456', 'Quadra 56 Conjunto J, 20', 'leocunha@gmail.com', '(61) 99659-371'),
(4, 'Gabriel Silva dos Santos ', 'gabriel', '123456', 'Quadra 12 Conjunto M\r\n16', 'gabriel@gmail.com', '(61) 9965-9371'),
(5, 'Joaquim Pereira de Novais', 'joaquim', '123456', 'Quadra 56 Conjunto J, 20', 'joaquim@gmail.com', '(61) 9965-9371'),
(6, 'Valdivina Souza Lima', 'valdivina', '123456', 'Quadra 55 Conjunto J, 23', 'valdivina@gmail.com', '(61) 9965-9371'),
(7, 'Paulo Pereira', 'paul', '123456', 'Quadra 36 Conjunto K, 24', 'paulo@gmail.com', '(61) 9965-9371'),
(8, 'Junior Alencar', 'junior', '123456', 'Quadra 26 Conjunto H, 25', 'junior@gmail.com', '(61) 9965-9371'),
(9, 'Luiz Caldas Fontes', 'luiz', '123456', 'Quadra 16 Conjunto D, 26', 'luiz@gmail.com', '(61) 9965-9371'),
(10, 'Luiza Carla Joz', 'luiza', '123456', 'Quadra 59 Conjunto C, 27', 'luiza@gmail.com', '(61) 9965-9371'),
(11, 'Victor Vira de Voz', 'victor', '123456', 'Quadra 23 Conjunto A, 28', 'victor@gmail.com', '(61) 9965-9371');