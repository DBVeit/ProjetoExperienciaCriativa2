CREATE TABLE projeto.plano (
  id int(11) NOT NULL,
  tipo varchar(20) NOT NULL,
  mensalidade varchar(10) NOT NULL,
  permissao int(3) NOT NULL,
  PRIMARY KEY (id)
) 

INSERT INTO projeto.plano (`id`, `tipo`, `mensalidade`, `permissao`) VALUES
(1, 'basico', '19,90', 001),
(2, 'medio', '25,90', 003),
(3, 'premium', '49,90', 000);
