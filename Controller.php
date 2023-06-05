<?php
require QRGenerator::renderQRCode();
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
class UserController extends AbstractController
{
    public function QRCode()
    {
        return $this->render('Templates/Main.html.twig', [
            'QR-Code_path' => $this->QRCode()->renderQRCode($this->Zuttrittscode)
        ]);
    }
}