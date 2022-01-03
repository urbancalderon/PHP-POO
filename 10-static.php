<?php include 'includes/header.php';

class DB {
    public static function conectarDB() {
        echo 'Conectando a la base de datos';
    }
}

class Email {
    public static function enviandoEmail() {
        echo 'Enviando email....';
    }
}

DB::conectarDB();

Email::enviandoEmail();
