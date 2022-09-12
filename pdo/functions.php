<?php
require_once 'ErrorCode.php';

function redirect(string $location): void
{
  header('Location: ' . $location);
  exit;
}

function getErrorMessage(int $errorCode): string
{
  switch ($errorCode) {
    case ErrorCode::USER_NOT_FOUND:
      $message = "Utilisateur inexistant";
      break;
    case ErrorCode::INCORRECT_PASSWORD:
      $message = "Mot de passe incorrect";
      break;
    case ErrorCode::ACCOUNT_BANNED:
      $message = "Compte banni";
      break;
    default:
      $message = "Une erreur est survenue";
  }

  return $message;
}
