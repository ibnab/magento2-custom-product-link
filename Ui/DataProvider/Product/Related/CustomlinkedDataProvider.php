<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Ibnab\CustomLinked\Ui\DataProvider\Product\Related;
use Magento\Catalog\Ui\DataProvider\Product\Related\AbstractDataProvider;
/**
 * Class RelatedDataProvider
 *
 * @api
 * @since 101.0.0
 */
class CustomlinkedDataProvider extends AbstractDataProvider
{
    /**
     * {@inheritdoc
     * @since 101.0.0
     */
    protected function getLinkType()
    {
        return 'customlinked';
    }
}
