<?php declare(strict_types=1);

namespace Shopware\Product\Writer\ResourceDefinition;

use Shopware\Framework\Api\FieldBuilder;

class ProductConfiguratorOptionResourceFactory extends BaseProductConfiguratorOptionResourceFactory
{
    protected function build(FieldBuilder $builder): FieldBuilder
    {
        return parent::build($builder);
    }
}