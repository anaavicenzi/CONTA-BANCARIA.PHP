<?php

$saldo = 1000;
$titular = "Ana Laura";

echo "*************************\n";
echo "Titular: $titular\n";
echo "Saldo atual: $saldo\n";
echo "*************************\n";

do {
    echo " \n";
    echo "1. Consultar saldo
2. Depósito
3. Saque
4. Sair\n";

echo "Qual comando você deseja efetuar?: \n";
$opcao = (int) fgets(STDIN);

    switch ($opcao) {
        case 1:
            echo "*************************\n";
            echo "Titular: Ana Laura\n";
            echo "Saldo atual: R$1000\n";
            echo "*************************\n";
        break;
        
        case 2:
            echo "Quanto você gostaria de depositar?: \n";
            $deposito = (float) fgets(STDIN);
            $saldo += $deposito;
            echo "Seu novo saldo é de R$saldo. \n";
        break;
        case 3:
            echo "Quanto você gostaria de sacar?\n";
            $saque = (float) fgets(STDIN);
            if ($saque > $saldo) {
                echo "Saldo insuficiente.\n";
            } else {
                $saldo -= $saque;
            }
        break;
        
        case 4: 
            echo "Até logo.";
        break;

        default:
            echo "Opção inválida\n.";
        }
    } while ($opcao != 4);





