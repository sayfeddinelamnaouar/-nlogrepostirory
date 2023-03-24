<<?php  ?

class Music {
  private string $name;
  private string $genre;
  private int $listen;
  private int $fileSize;
  private float $weight;

  public function setMusic(string $name, string $genre, int $listen, int $fileSize, float $weight) {
    $this->name = $name;
    $this->genre = $genre;
    $this->listen = $listen;
    $this->fileSize = $fileSize;
    $this->weight = $weight;
  }

  public function getMusic() {
    return array(
      "name" => $this->name,
      "genre" => $this->genre,
      "listen" => $this->listen,
      "fileSize" => $this->fileSize,
      "weight" => $this->weight
    );
  }
}

$music1 = new Music();
$music1->setMusic("Liedje", "Top50", 4, 320000, 3.5);

$music2 = new Music();
$music2->setMusic("Ander liedje", "Pop", 2, 250000, 2.8);

echo "Music 1: <br>";
$music1_info = $music1->getMusic();
echo "Name: " . $music1_info["name"] . "<br>";
echo "Genre: " . $music1_info["genre"] . "<br>";
echo "Listens: " . $music1_info["listen"] . "<br>";
echo "File size: " . $music1_info["fileSize"] . "<br>";
echo "Weight: " . $music1_info["weight"] . "<br>";

echo "<br>";

echo "Music 2: <br>";
$music2_info = $music2->getMusic();
echo "Name: " . $music2_info["name"] . "<br>";
echo "Genre: " . $music2_info["genre"] . "<br>";
echo "Listens: " . $music2_info["listen"] . "<br>";
echo "File size: " . $music2_info["fileSize"] . "<br>";
echo "Weight: " . $music2_info["weight"] . "<br>";
