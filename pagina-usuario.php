<!-- FALTA INCLUIR AQUI DADOS DAS PAUTAS, POSTAGENS E COMENTÁRIOS DO USUÁRIO -->
<?php
require("cabecalho.php");
?>

    <h1>Dados do usuário</h1>

<?php
// print_r($_SESSION);
echo "id_usuario: $_SESSION[id_usuario]<br />";
echo "nome: $_SESSION[nome]<br />";
echo "email: $_SESSION[email]<br />";
echo "instituição: $_SESSION[instituicao]<br />";
echo "usuário: $_SESSION[usuario]<br />";
echo "data do cadastro: $_SESSION[data_cadastro]<br />";
$nivel=($_SESSION[nivel])?"membro credenciado":"usuário";
echo "nível: $nivel<br />";
echo "comentário: $_SESSION[comentario]<br />";
?>