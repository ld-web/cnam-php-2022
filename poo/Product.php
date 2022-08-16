<?php
class Product
{
  private int $id; // <-- Attribut
  private string $name;
  private float $price;
  private string $color;

  // On peut définir des constantes de classes
  // Elles peuvent également être publiques ou privées
  private const TAUX_TVA = 1.1;

  public function __construct(int $id)
  {
    $this->id = $id;
  }

  public function ttcPrice(): float // <-- Méthode
  {
    return $this->price * $this->retrieveCurrentTva();
  }

  // Méthode privée = interne à la classe
  private function retrieveCurrentTva(): float
  {
    return self::TAUX_TVA;
  }

  //Getter
  public function getPrice(): float
  {
    return $this->price;
  }

  // Setter
  public function setPrice(float $price): void
  {
    if ($price > 0) {
      $this->price = $price;
    }
  }

  public function getId(): int
  {
    return $this->id;
  }

  public function getName(): string
  {
    return strtoupper($this->name);
  }

  public function setName(string $name)
  {
    $this->name = $name;

    return $this;
  }

  public function getColor(): string
  {
    return $this->color;
  }

  public function setColor(string $color)
  {
    $this->color = $color;

    return $this;
  }
}
