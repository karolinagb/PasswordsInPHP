<?php

//PASSWORD_DEFAULT = rediciona para o algortimo bcrypt
$hash = password_hash('senhadificil', PASSWORD_DEFAULT);

echo $hash;

//password_verify = verifica se a senha digitada é igual ao hash da mesma
if(password_verify('senhadificil', $hash)){
    //Login
}
else{
    //Logout
}