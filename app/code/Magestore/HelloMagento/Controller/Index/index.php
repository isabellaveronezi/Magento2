<?php

namespace Magestore\HelloMagento\Controller\Index;

use Magento\Framework\App\ResponseInterface;
use \Magento\Framework\App\Action\Action;

class index extends Action
{

    /**
     * Execute action based on request and return result
     *
     * Note: Request will be added as operation argument in future
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        echo 'It is working!!';
        die();
    }
}
