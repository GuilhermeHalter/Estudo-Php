# Docs para Estudo de PHP.
site para estudo - [https://www.codecademy.com/]

**O que é PHP?**

- PHP é uma linguagem de script de servidor de código aberto usada principalmente para desenvolvimento web. </br>
- Pode ser embutido no HTML ou usado como uma linguagem independente.

**Sintaxe Básica**

Criando um arquivo .php nele utilizaremos a tag

``` bash
  <?php ... ?>
```

**Variáveis**

Para criarmos uma variavel utilizaremos o prefixo `$`, seguido do nome da variavel que vamos definir. 

``` bash
  $nome = "...";
```

**Tipos de Dados**

- No php temos alguns tipos de daods basicos como: inteiro, string, floats, booleanos.

- Arrays e Objetos tambem são suportados.

``` bash
  $nome = "Guilherme";   //string = Texto
  $number1 = 10;   //Inteiro = Numero inteiro
  $number2 = 5.123;   //Float = Numero "quebrado" ou com virgula
  $check = True;   //Boolean = Verdadeiro ou Falso
```
**String**

- Sequência de fuga

como colocar aspas dentro de aspas 

para colocar aspas dentro de aspas utilizamos ' \ '   
``` bash
  echo "Eu disse "oi" para o cachorro";  //O php não vai entender o "oi" pq ele está fora das aspas

  echo "Eu disse \"oi\" para o cachorro"; // agora temos aspas dentro das aspas

```

podemos utilizar "\n" para uma string ficar em uma nova linha

``` bash
  echo "Acordei";
  echo "\nBebi água";
```



**Estruturas de Controle**

- 'if', 'else', 'elseif' para condicionais.
- 'for', 'while', 'do-while' para loops.

``` bash
// estrutura
 
if(){
  ...
}elseif(){
  ...
}else{
  ...
}

// exemplo
 $numero1 = 10;
 $numero2 = 20;

if($numero1 > $numero2){
  return "O numero $numero1 é maior que o numero $numero2"
}elseif($numero1 < $numero2){
  return "O numero $numero2 é maior que o numero $numero1"
}else{
  return "Os numeros são iguais"
}

//fazer estrutura for ...



```




