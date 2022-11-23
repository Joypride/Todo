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
        $anonymous = new User();
        $anonymous->setUsername('Anonymous');
        $anonymous->setEmail('ano@nymous.fr');
        $anonymous->setPassword($this->passwordHasher->hashPassword($anonymous,'pomme'));
        $anonymous->setRoles(['ROLE_USER']);

        $manager->persist($anonymous);

        $admin = new User();

        $admin->setUsername('Laurie');
        $admin->setEmail('laurie@todo.fr');
        $admin->setPassword($this->passwordHasher->hashPassword($admin,'pomme'));
        $admin->setRoles(['ROLE_ADMIN']);

        $manager->persist($admin);
        $this->addReference('admin', $admin);

        for ($i = 0; $i <= 10; ++$i) {
            
            $faker = Factory::create();
            $user = new User();
            $user->setUsername($faker->userName());
            $user->setEmail($faker->email());
            $user->setPassword($faker->password());
            $user->setRoles(['ROLE_USER']);

            $manager->persist($user);
            $this->addReference('user' . $i, $user);
        }
        $manager->flush();
    }        

    public function loadTasks(ObjectManager $manager): void
    {
        for ($i = 0; $i < 7; $i++) {

            $faker = Factory::create();
            $dateTask = new DateTime();

            $randomNumber = rand(0, 10);
            $user = $this->getReference('user' . $randomNumber);
            
            $task = new Task();
            $task->setCreatedAt($dateTask);
            $task->setTitle($faker->word());
            $task->setContent($faker->sentence(5));
            $task->setUser($user);
            $manager->persist($task);
        }
        $manager->flush();

        for ($i = 0; $i < 7; $i++) {
            $faker = Factory::create();

            $dateTask = new DateTime();
            
            $task = new Task();
            $task->setCreatedAt($dateTask);
            $task->setTitle($faker->word());
            $task->setContent($faker->sentence(5));
            $task->setUser($this->getReference('admin'));
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
