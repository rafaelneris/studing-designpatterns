<?php
require '../vendor/autoload.php';

$reforma = new \App\Orcamento\Orcamento(500);

$reforma->setItem(new \App\Item\Item("Tijolo", 5));
$reforma->setItem(new \App\Item\Item("Cimento 10kg", 50));
$reforma->setItem(new \App\Item\Item("Cimento 20kg", 500));

$icms = new \App\Imposto\Icms();
$iss = new \App\Imposto\Iss();
$itens = $reforma->getItens();
$desconto = new \App\Desconto\Desconto($reforma);
?>

<table cellpadding="0" cellspacing="0" border="1">
    <tr>
        <td>Nome</td>
        <td>Valor</td>
    </tr>
<?php
foreach ($itens as $item) :
    echo "<tr>";
    echo "<td>{$item->getNome()}</td>";
    echo "<td>{$item->getValor()}</td>";
    echo "</tr>";
endforeach;

echo "<tr>";
echo "<td>ISS: </td>";
echo "<td>{$iss->calcular($reforma)}</td>";
echo "</tr>";

echo "<tr>";
echo "<td>ICMS: </td>";
echo "<td>{$icms->calcular($reforma)}</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Desconto: </td>";
echo "<td>{$desconto->calcularDesconto()}</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Valor Total: </td>";
echo "<td>";
echo $item->getValor() - $desconto->calcularDesconto();
"</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Valor Sem Descontos: </td>";
echo "<td>";
echo $item->getValor();
"</td>";
echo "</tr>";
?>
</table>
