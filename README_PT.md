[Versão em Inglês](https://github.com/skay1994/portifolio-my-application)

# My application

Essa aplicação é feita com o meu [framework](https://github.com/skay1994/portifolio-my-framework).

Esse é um exemplo básico para fazer uma aplicação simples.

## Recursos

Essa é lista possui de todos os recursos disponíveis. Outros recursos serão adicionados com o tempo. Veja mais na descrição do [framework](https://github.com/skay1994/portifolio-my-framework)

- [x] Testes com PestPHP: O base inicial para criar e executar testes com PestPHP

- [x] Service Container: O service container ja está funcional e testado, está em estado inicial com os seguintes recursos:
    - [x] Class Resolver: O container vai criar uma instancia da classe e devolver a instancia.
    - [x] Constructor Parameter: Caso a classe possua parametros no construtor, eles serão resolvidos/injetados,
      caso seja outras classes, o container vai repetir o processo para retornar a instancia para o construtor da classe inicial.
    - [x] Bindings: Cria um vinculo a uma string a uma instancia de classe/função/outros, para facil recuperação em qualquer local da aplicação

- [x] Facades: São classes para facilitar o acesso a outras classes, como atalhos.
- [x] Rotas: Um sistema de rotas usando os atributos do PHP 8
    - [x] Rotas Exatas
    - [x] Rotas com parametros
    - [x] Rotas com multiplos metodos HTTP