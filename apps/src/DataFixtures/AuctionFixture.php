<?php

namespace App\DataFixtures;

use App\Entity\Auction;
use Doctrine\Persistence\ObjectManager;

class AuctionFixture extends BaseFixture
{
    public function loadData(ObjectManager $manager)
    {
        $this->createMany(
            10,
            'auctions',
            function () {
                $auction = new Auction();
                $auction->setName($this->faker->company);
                $auction->setDescription($this->faker->text($maxNbChars = 200));
                $auction->setImage($this->faker->imageUrl($width = 640, $height = 480));
                $auction->setInitialPrice($this->faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = null));
                $auction->setFinalBid($this->faker->randomFloat($nbMaxDecimals = 2, $min = 1000, $max = null));

                return $auction;
            }
        );
        $manager->flush();
    }
}
