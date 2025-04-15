<?php
session_start();

// Exemplo: valor vindo via GET ou POST
$pag = isset($_GET['pag']) ? $_GET['pag'] : '';

// Chama a função pagamento passando a forma selecionada
pagamento($pag);

// Função principal de pagamento
function pagamento($pag) {
    switch ($pag) {
        case "pix":
            pagamento_pix();
            break;
        case "cartao":
            pagamento_cartao();
            break;
        default:
            echo "Forma de pagamento não selecionada ou inválida.<br>";
    }

    echo "Carregando o carrinho do usuário " . $_SESSION['nome'] . "<br>";
}

// Função de pagamento via PIX
function pagamento_pix() {
    echo "Você escolheu pagar com PIX<br>";
    // lógica do pagamento via PIX aqui
}

// Função de pagamento via cartão
function pagamento_cartao() {
    echo "Você escolheu pagar com Cartão<br>";
    // lógica do pagamento com cartão aqui
}
?>
