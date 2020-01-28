<?php

namespace Erichard\GlideBundle\Twig;

use Erichard\GlideBundle\GlideUrlBuilder;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class GlideExtension extends AbstractExtension
{
    protected $glideUrlBuilder;

    public function __construct(GlideUrlBuilder $glideUrlBuilder)
    {
        $this->glideUrlBuilder = $glideUrlBuilder;
    }

    public function getFunctions()
    {
        return [
            new TwigFunction('glideUrl', [$this, 'glideUrl']),
        ];
    }

    public function glideUrl($server, $path, array $params = [])
    {
        return $this->glideUrlBuilder->buildUrl($server, $path, $params);
    }
}
