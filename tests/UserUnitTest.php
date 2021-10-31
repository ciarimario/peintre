<?php

namespace App\Tests;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $user = new User();

        // Vérifie si les setters,getters fonctionnent
        $user->setNom('ciari');
        $user->setPrenom('mario');
        $user->setTelephone('0633781833');
        $user->setApropos('Je suis un développeur Web ...');
        $user->setInstagram('Mon compte insta');


        $this->assertTrue($user->getNom() === 'ciari');
        $this->assertTrue($user->getPrenom() === 'mario');
        $this->assertTrue($user->getTelephone() === '0633781833');
        $this->assertTrue($user->getAPropos() === 'Je suis un développeur Web ...');
        $this->assertTrue($user->getInstagram() === 'Mon compte insta');
    }
}
