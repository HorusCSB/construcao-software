<?php
class HomeController
{
    function index()
    {
        $pdo = Database::getConnection();
        
        renderView('home');
    }
}
?>