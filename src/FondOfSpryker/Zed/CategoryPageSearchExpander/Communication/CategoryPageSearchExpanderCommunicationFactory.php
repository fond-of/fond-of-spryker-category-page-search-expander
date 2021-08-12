<?php

namespace FondOfSpryker\Zed\CategoryPageSearchExpander\Communication;

use FondOfSpryker\Zed\CategoryPageSearchExpander\CategoryPageSearchExpanderDependencyProvider;
use Spryker\Zed\CategoryPageSearch\Communication\CategoryPageSearchCommunicationFactory as SprykerCategoryPageSearchCommunicationFactory;

class CategoryPageSearchExpanderCommunicationFactory extends SprykerCategoryPageSearchCommunicationFactory
{
    /**
     * @return \FondOfSpryker\Zed\CategoryPageSearchExpander\Dependency\Plugin\CategoryPageMapExpanderInterface[];
     */
    public function getCategoryPageMapExpanderPlugins(): array
    {
        return $this->getProvidedDependency(CategoryPageSearchExpanderDependencyProvider::PLUGIN_COLLECTION_CATEGORY_PAGE_MAP_EXPANDER);
    }
}
