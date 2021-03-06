<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixture extends BaseFixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function loadData(ObjectManager $manager)
    {
        $this->createMany(
            5,
            'main_users',
            function ($i) {
                $user = new User();
                $user->setEmail(sprintf('user%d@eactivos.com', $i));
                $user->setFirstName($this->faker->firstName);

                $user->setPassword($this->passwordEncoder->encodePassword($user, 'eactivos'));

                return $user;
            }
        );

        $this->createMany(
            3,
            'admin_users',
            function ($i) {
                $user = new User();
                $user->setEmail(sprintf('admin%d@eactivos.com', $i));
                $user->setFirstName($this->faker->firstName);
                $user->setRoles(['ROLE_ADMIN']);

                $user->setPassword($this->passwordEncoder->encodePassword($user, 'eactivos'));

                return $user;
            }
        );

        $manager->flush();
    }
}
