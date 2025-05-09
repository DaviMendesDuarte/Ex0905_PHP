# Ex0905_PHP
Lições do dia 09/05 feito por Davi Mendes Duarte e Izabela de Souza Santos

# Funções em PHP

## 📘 O que são funções?

Funções são blocos de código que executam uma tarefa específica. Elas são criadas para evitar repetição de código, facilitar a manutenção e tornar o programa mais organizado e reutilizável.

## 🔧 Como criar uma função em PHP?

Em PHP, utilizamos a palavra-chave `function` para definir uma função. Veja a estrutura básica:

```php
function nomeDaFuncao($param1, $param2) {
    // código a ser executado
    return $resultado;
}
```

- `nomeDaFuncao`: identificador da função.
- `$param1, $param2`: parâmetros que podem ser passados.
- `return`: retorna o resultado da função (opcional).

## 💡 Exemplo Prático

Veja um exemplo de função que soma dois números:

```php
function somar($a, $b) {
    return $a + $b;
}
```

## 📁 Exemplo com `index.php` e `calcular.php`

Neste exemplo, o usuário informa dois valores via formulário. O cálculo da média é feito por uma função e exibido ao usuário.

### `index.php`

```php
<form action="calcular.php" method="post">
    Valor 1: <input type="number" name="valor1" required><br>
    Valor 2: <input type="number" name="valor2" required><br>
    <input type="submit" value="Calcular Média">
</form>
```

### `calcular.php`

```php
<?php
function calcularMedia($a, $b) {
    return ($a + $b) / 2;
}

$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$media = calcularMedia($valor1, $valor2);

echo "A média entre $valor1 e $valor2 é: $media";
?>
```

## 🧠 Exercícios para Praticar

1. Crie uma função chamada `multiplicar` que receba dois números e retorne o resultado da multiplicação.
2. Crie uma função chamada `parOuImpar` que receba um número e retorne "Par" se for par e "Ímpar" se for ímpar.
3. Crie uma função chamada `maiorNumero` que receba três números e retorne o maior entre eles.
4. Crie uma função chamada `converterParaCelsius` que receba uma temperatura em Fahrenheit e retorne em Celsius.
5. Crie uma função chamada `validarIdade` que receba a idade de uma pessoa e retorne se ela é "Menor de idade", "Adulto" ou "Idoso" (idade ≥ 60).
