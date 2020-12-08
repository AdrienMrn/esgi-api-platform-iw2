<?php

namespace App\Controller;

use App\Entity\Drunk;
use App\Repository\DrunkRepository;

class DrunkController
{
    private $drunkRepo;

    public function __construct(DrunkRepository $drunkRepo)
    {
        $this->drunkRepo = $drunkRepo;
    }

    /**
     * @return Drunk
     */
    public function __invoke()
    {
        return $this->drunkRepo->moy();
    }
}
