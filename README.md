# Foco
Aprender sobre Herança e Interface.

# Classe
Classe é um conjunto de objetos distintos, porém com as mesmas características e comportamentos. 
A classe é uma abstração de entidades existentes no mundo real.

# Objeto
Objeto é uma instância ou modelo derivado de uma classe. 
Portanto, objeto é a representação de qualquer coisa, real ou abstrata, do mundo real que irá ser manipulado ou armazenado pelo sistema.

#Propriedades
Também chamados de características, forma ou atributo. 
São características do objeto e identificam o objeto em si. 
Elas podem mudar com o tempo. As propriedades formam a parte estrutural do objeto.

# Métodos
Também chamados de funções, operações ou comportamentos. 
São ações realizadas ou sofridas por um objeto. 
Os métodos formam a parte comportamental do objeto.

# Visibilidade
A visibilidade é usada para indicar como uma determinada propriedade ou método poderá ser acessado. 
Há três formas possíveis: Público, protegido ou privado.
  
(+) Public  ou  Público:  Indica que a propriedade ou método, pode ser acessado por qualquer outra classe
(#) Protected ou Protegido: Indica que a propriedade ou método, pode ser acessado pela classe e pelas classes derivadas. Classes filhos, por ex.
(-) Private ou Privado: Indica que a propriedade ou método, pode ser acessado apenas pela classe.

# Herança
É um princípio de orientação a objetos, que permite que classes compartilhem atributos e métodos, através de "heranças". 
 Ela é usada na intenção de reaproveitar código ou comportamento generalizado ou especializar operações ou atributos. O conceito de herança de várias classes é conhecido como herança múltipla.
 
# Classe Abstrata
Uma classe abstrata é uma classe que serve de modelo para outras classes. Ela sempre será uma superclasse genérica, e suas subclasses serão mais específicas. Além disso, ela não pode ser instanciada e pode conter ou não métodos abstratos, podendo ser implementados nas classes descendentes. Ou seja, uma classe abstrata pode implementar ou não um método, sendo obrigatória a existência de pelo menos um método abstrato, sem corpo.

# Interface
O objetivo da Interface é realizar uma conexão entre dois elementos que, diretamente, não poderiam se conectar.


# No exemplo
Na Classe Expiravel existe apenas o método get tempo restante
que é implementado na Classe Assinatura para retornar a variável DateInterval para representar o tempo que falta 
para o término da assinatura.
