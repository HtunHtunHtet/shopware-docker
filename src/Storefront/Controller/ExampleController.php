<?php declare(strict_types=1);

namespace App\Storefront\Controller;

use Shopware\Core\PlatformRequest;
use Shopware\Storefront\Framework\Routing\StorefrontRouteScope;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Shopware\Storefront\Controller\StorefrontController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route(defaults: [PlatformRequest::ATTRIBUTE_ROUTE_SCOPE => [StorefrontRouteScope::ID]])]
class ExampleController extends StorefrontController
{
    #[Route(path: '/example', name: 'swag.test.foo-bar', methods: ['GET'])]
    public function showExample(Request $request, SalesChannelContext $context): Response
    {
         return $this->renderStorefront('/storefront/page/example.html.twig', [
             'example' => 'Hello world'
         ]);
    }
}