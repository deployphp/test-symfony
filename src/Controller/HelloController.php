<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HelloController
{
    public function world(): Response
    {
        return new Response(
            '<html><body>Hello, World!</body></html>'
        );
    }
}
