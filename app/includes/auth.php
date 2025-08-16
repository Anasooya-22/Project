<?php
// app/includes/auth.php
if (session_status() !== PHP_SESSION_ACTIVE) session_start();

function is_admin(): bool {
    return !empty($_SESSION['user_id']) && ($_SESSION['role'] ?? '') === 'admin';
}
function require_admin(): void {
    if (!is_admin()) {
        header('Location: ' . url('admin_login.php'));
        exit;
    }
}
