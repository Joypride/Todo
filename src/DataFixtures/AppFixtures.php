<?php

namespace App\DataFixtures;

use App\Entity\Task;
use App\Entity\User;
use DateTime;
use Faker\Factory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function loadUsers(ObjectManager $manager): void
    {
        $admin = new User();

        $admin->setUsername('Laurie');
        $admin->setEmail('laurie@todo.fr');

        $adminPassword = $this->passwordHasher->hashPassword($admin,'pomme');

        $admin->setPassword($adminPassword);

        $manager->persist($admin);

        for ($i = 0; $i <= 10; ++$i) {
            
            $faker = Factory::create();
            $user = new User();
            $user->setUsername($faker->userName());
            $user->setEmail($faker->email());
            $user->setPassword($faker->password());

            $manager->persist($user);
        }
        $manager->flush();
    }        

    public function loadTasks(ObjectManager $manager): void
    {
        for ($i = 0; $i < 15; $i++) {
            $faker = Factory::create();

            $dateTask = new DateTime();
            
            $task = new Task();
            $task->setCreatedAt($dateTask);
            $task->setTitle($faker->words());
            $task->setContent($faker->sentence(5));
            $manager->persist($task);
        }
        $manager->flush();
    }

    public function load(ObjectManager $manager): void
    {
        $this->loadUsers($manager);
        $this->loadTasks($manager);
    }
}
