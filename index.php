<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Contato</title>
</head>
<body>

<h1><mark>Formulário de Contato</mark></h1>

<form action="enviar.php" method="post">
    <label for="nome"><strong>Nome:</strong></label>
    <input type="text" id="nome" name="nome" required>
    <br>
    <small>Insira seu nome completo.</small>
    <br><br>

    <label for="email"><strong>E-mail:</strong></label>
    <input type="email" id="email" name="email" required>
    <br>
    <small>Insira um endereço válido, exemplo: <em>email@dominio.com</em>.</small>
    <br><br>

    <label for="Endereço"><strong>Endereço:</strong></label>
    <input type="text" id="Endereço" name="Endereço" required>
    <br>
    <small>Insira seu endereço a cima.</small>
    <br><br>

    <label for="mensagem"><big><strong>Mensagem:</strong></big></label><br>
    <textarea id="mensagem" name="mensagem" required></textarea>
    <br>
    <small>Escreva sua mensagem detalhada.</small>
    <br><br>

    <blockquote cite="https://books.google.com">
        "Deixe sua mensagem com clareza, pois a comunicação é fundamental."
    </blockquote>
    <q>Respeito e cordialidade são essenciais</q><br><br>

    <input type="submit" value="Enviar">
</form>

<p>
    Este é um exemplo de <abbr title="HyperText Markup Language">HTML</abbr> melhorado, que utiliza as melhores práticas de 
    <strong>acessibilidade</strong> e <em>semântica</em> na construção de formulários web. 
    Foram usados elementos para destacar informações importantes e melhorar a experiência do usuário. 
    Tecnologias como <abbr title="Cascading Style Sheets">CSS</abbr> e <abbr title="JavaScript">JS</abbr> também podem ser integradas para 
    otimizar o <ins>design</ins> e a <ins>funcionalidade</ins> das páginas.
    <br><small><del>Elementos obsoletos</del> foram removidos para manter o código limpo e eficiente.</small>
</p>

<pre>
<code>
Lista de itens importantes:
<ol>
    <li><em>Nome</em> - Fundamental para identificação.</li>
    <li><strong>E-mail</strong> - Canal de contato.</li>
    <li>Mensagem - <mark>Conteúdo principal</mark> do formulário.</li>
</ol>
</code>
</pre>

<p><bdo dir="rtl">Este texto está invertido.</bdo></p>

</body>
</html>