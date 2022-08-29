<?php
function redirect(string $location): void
{
  header('Location: ' . $location);
  exit;
}
