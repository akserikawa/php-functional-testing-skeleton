<?php

namespace App\Tests\Entity;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class UserTest extends WebTestCase
{
    private $em;

    public function setUp(): void
    {
        $kernel = parent::bootKernel();

        $this->em = $kernel->getContainer()
            ->get('doctrine')
            ->getManager();
    }

    /** @test */
    public function search_by_email()
    {
        $user = $this->em
            ->getRepository(User::class)
            ->findOneBy(['email' => 'akserikawa@gmail.com'])
        ;

        $this->assertSame('akserikawa@gmail.com', $user->getEmail());
    }
}
