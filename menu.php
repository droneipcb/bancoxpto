<?php
    echo "<texto id='username'> $username </texto>";

    echo "<a href='logout.php'><img id='logout' src='logout.png'></img></a>";
    echo "<br><br><br>";
    
    echo "<a href='welcome.php'><p class='menuitem'>Home</p><a>";
    
    if ($role == 'user') {
      echo "<a href='transferir_dinheiro.php'><p class='menuitem'>Transferir dinheiro</p></a>";
      echo "<a href='ver_extracto.php'><p class='menuitem'>Ver extracto</p></a>";
    }
    
    if ($role == 'admin')
      echo "<a href='ver_transacoes.php'><p class='menuitem'>Ver transacoes</p></a>";
?>
