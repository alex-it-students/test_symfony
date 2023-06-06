<?php

use App\Controller\DashboardController;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DashboardControllerTest extends KernelTestCase
{
    public function testIndex(): void
    {
        // Création du double de l'objet Request avec les fonctionnalités nécessaires pour le test
        $request = $this->createMock(Request::class);

        // Création de l'objet Controller
        $controller = new DashboardController();

        // Appel de la méthode à tester
        $response = $controller->index($request);

        // Vérification du type de retour
        $this->assertInstanceOf(Response::class, $response);

        // Vérification du code de statut de la réponse
        $this->assertEquals(200, $response->getStatusCode());

        // Vérification du contenu de la réponse
        $this->assertStringContainsString('DashboardController', $response->getContent());
    }
}
