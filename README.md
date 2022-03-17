## Projeto de teste
projeto utilizando Laravel + Sail (docker)

## Clone do projeto
```bash
git clone https://github.com/gersonvinicius/teste-gerson.git
```

## Sail
Necessário ter docker instalado, após baixar o projeto basta executar 
```bash
sail up -d
```

## Rotas
Foram criadas as rotas de Nota, Numero, Cubagem. Na página inicial do projeto já irá mostrar 3 links para acessá-las.

## Numero
Basta acessar que já irá trazer o resultado.

## Nota 
Acessar a primeira pagina e entrar na segunda para digitar a nota, após isso voltará para a primeira exibindo a nota e se foi aprovado.

## Cubagem
Acessar a primeira página e entrar na pagina para informar os valores da cubagem, após isso será gravado no banco e retornará para a primeira página então caso queira pode gerar o pdf na primeira página, a mesma também tem um paginate.

## Fonte
DOMPDF: https://appdividend.com/2022/01/28/how-to-generate-pdf-in-laravel/  
https://github.com/barryvdh/laravel-dompdf
