<?php

class Movie {
    protected $title;
    protected $quality = 'HD';
    protected $seen = 0;

    public function __construct($title) {
        $this->title = $title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setQuality($quality) {
        $this->quality = $quality;
    }

    public function getMovie() {
        return $this->title . ' - ' . $this->quality . ' - ' . $this->seen . ' views';
    }

    protected function markAsSeen() {
        ++$this->seen;
    }

    public function play() {
        $this->markAsSeen();
        echo 'Playing ' . $this->title . ' - ' . $this->quality . ' - ' . $this->seen . ' views';
    }
}

class DiscMovie extends Movie {
    private $discType;

    public function __construct($title, $discType) {
        parent::__construct($title);
        $this->discType = $discType;
    }

    public function play() {
        $this->markAsSeen();
        echo 'Playing ' . $this->title . ' - ' . $this->quality . ' - ' . $this->seen . ' views from disc';
    }
}

$movie1 = new Movie('The Dark Knight');
$movie1->setQuality('4K');
echo $movie1->getMovie(); // The Dark Knight - 4K - 0 views
$movie1->play(); // Playing The Dark Knight - 4K - 1 views

$discMovie1 = new DiscMovie('Inception', 'Blu-ray');
echo $discMovie1->getMovie(); // Inception - HD - 0 views
$discMovie1->play(); // Playing Inception - HD - 1 views from disc
