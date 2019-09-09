<?php

namespace Magestore\HelloMagento\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Example extends AbstractDb
{
    /**
     * Resource initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('magestore_helloworld', 'example_id');
    }
}
