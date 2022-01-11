<?php

namespace App\Util;

class MensagemPadrao
{
    public static function retornaMensagens()
    {
        $telefone = "61998690313";
        $mensagens = array(
            "cadastro" => " Registro cadastrado com sucesso ! ",
            "edicao" => " Registro atualizado com sucesso! ",
            "semRegistro" => " O sistema não encontrou nenhum resultado,por favor tente novamente. ",
            "loginIncorreto" => " Login ou senha incorretos , por favor tente novamente. ",
            "loginVazio" => " Login ou senha não informado , por favor tente novamente. ",
            "logout" => " Logout realizado com sucesso. ",
            "erroCadastro" => " Erro ao cadastrar o registro , favor entre em contato com o telefone $telefone para solicitar uma medida corretiva. ",
            "erroEdicao" => " Erro ao atualizar o registro , favor entre em contato com o telefone $telefone para solicitar uma medida corretiva. ",
            "exclusao" => " Registro excluído com sucesso ! ",
            "erroExclusao" => " Erro ao excluir o registro , favor entre em contato com o telefone $telefone para solicitar uma medida corretiva. ",
            "cpfDuplicado" => "O CPF já existe no sistema,favor informar outro CPF . ",
            "cpfInvalido" => "O CPF não é válido,favor informar outro CPF . ",
            "envioPedido" => " Produto adicionado ao carrinho com sucesso ! ",
            "erroPedido" => " Erro ao adicionar o produto ao carrinho , por favor tente novamente. ",
            "atualizarPedido" => " Pedido alterado com sucesso ! ",
            "erroAtualizarPedido" => " Erro ao atualizar seu pedido , por favor tente novamente. ",
            "cadastroHost" => " Cadastro realizado com sucesso, sua senha inicial será enviada por E-mail e deve ser alterada no primeiro acesso ! ",
            "erroHost" => " Erro ao realizar seu cadastro , por favor tente novamente. ",
            "removerPedido" => " Produto excluido do carrinho com sucesso ! ",
            "erroRemoverPedido" => " Erro ao remover produto do carrinho , por favor tente novamente ! ",
            "finalizarPedido" => " Pedido finalizado com sucesso ! ",
            "erroFinalizarPedido" => " Erro ao finalizar seu pedido, por favor tente novamente ! ",
            "cpfNaoEncontrado" => " CPF não encontrado, por favor tente novamente ! ",
            "erroSenhaProvisoria" => " O campo senha provisória é divergente da senha cadastrada no sistema, por favor tente novamente ! ",
            "erroConfirmacao" => " Os campos senha e nova senha são divergentes, por favor tente novamente ! ",
            "erroAtualizarSenhaHost" => " Erro ao atualizar a sua senha, por favor tente novamente ! ",
            "atualizarSenhaHost" => " Senha alterada com sucesso, seu usuário está liberado para acessar o sistema ! ",
            "erroEmailDivergergente" => " O campo email é divergente do email cadastrado no sistema, por favor tente novamente ! ",
            "atualizarEsqueceuSenha" => " Dados atualizados com sucesso, para acessar o sistema , por favor realize o login ! "
        );
        return $mensagens;
    }
}
