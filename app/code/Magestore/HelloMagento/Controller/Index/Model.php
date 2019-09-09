<?php

namespace Magestore\HelloMagento\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;

class Model extends Action
{
    /**
     * @var Magestore\HelloMagento\Api\Data\ExampleInterface
     */
    protected $model;

    /**
     * Model constructor.
     * @param Magestore\HelloMagento\Api\Data\ExampleInterface $model
     * @param Context $context
     */
    public function __construct(
        \Magestore\HelloMagento\Api\Data\ExampleInterface $model,
        \Magento\Framework\App\Action\Context $context
    ) {
        parent::__construct($context);

        $this->model = $model;
    }

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
        $this->model->load(2);
        $this->model->setExample_Id(rand(10000, 99999));
        $this->model->save();
    }
}
