<?php

require_once("modelos/Espaco.php");
require_once("modelos/Hotel.php");
require_once("modelos/PontoTuristico.php");
require_once("modelos/Restaurante.php");

$opcao = 0;
$espaco = array();

do 
{
    print "\n-----------MENU-----------\n";
    print "1- Cadastrar Espaço\n";
    print "2- Excluir Espaço\n";
    print "3- Listar Espaços\n";
    print "0- SAIR";
    print "\n--------------------------\n";
    $opcao = readline("Selecione a opção (pelo índice): ");
    switch($opcao) 
    {
        case 0:
            print "\nVocê escolheu sair...\n";
            system("clear");
        break;

        case 1:
            print "1 - Hotel\n2 - Restaurante\n3 - Ponto Turístico\n";
            $escolha = readline("Que tipo de espaço você deseja cadastrar? (Indique pelo indice): ");
            if($escolha == 1)
            {
                $hotel = new Hotel(readline("Insira o nome do Hotel: "), readline("Insira o endereco do Hotel: "), readline("Insira o número de estrelas do Hotel: "), readline("O café é incluso? (Insira 'true' para sim e 'false' para não): "));
                array_push($espaco, $hotel);
            }
            elseif($escolha == 2) 
            {
                $restaurante = new Restaurante(readline("Insira o nome do Restaurante: "), readline("Insira o endereco do Restaurante: "), readline("Insira o tipo de prato: "));
                array_push($espaco, $restaurante);
            }
            elseif($escolha == 3)
            {
                $pontoturistico = new PontoTuristico(readline("Insira o nome do Ponto Turístico: "), readline("Insira o endereco do Ponto Turístico: "), readline("Insira a duracao da visita (em dias): "));
                array_push($espaco, $pontoturistico);
            }
            else
            {
                print "Opção Inválida";
                break;
            }
        break;

        case 2:
            Listar($espaco);
            $excluir = readline("Qual você deseja excluir? (Pelo indice): ");
            $excluir--;
            unset($espaco[$excluir]);
            array_values($espaco);
        break;

        case 3:
            Listar($espaco);
        break;

        default:
            print "\nOpção inválida\n";
            system("clear");
    }
}while($opcao != 0);

function Listar($array)
{
    $inx = 1;
    foreach($array as $e)
    {
        if($e instanceof Hotel)
        {
            print "--------------------------\n" . $inx . "- Hotel:\n" . $e->getDadosHotel() . "--------------------------\n";
        }
        elseif($e instanceof Restaurante)
        {
            print "--------------------------\n" . $inx . "- Restaurante:\n" . $e->getDadosRestaurante() . "--------------------------\n";
        }
        else
        {
            print "--------------------------\n" . $inx . "- Ponto Turístico:\n" . $e->getDadosPontoTuristico() . "--------------------------\n";
        }
        $inx++;
    }
}