<?php

namespace Magestore\HelloMagento\Model;

use Magento\Framework\Model\AbstractModel;
use Magestore\HelloMagento\Api\Data\ExampleInterface;

class Example extends AbstractModel implements ExampleInterface
{
    /**
     * @var string
     */
    protected $_eventObject = 'example';
    /**
     * @var string
     */
    protected $_eventPrefix = 'magestore_helloworld';
    /**
     * @return int
     */
    /**
     * This is different from the PHP __contruct method
     */
    protected function __construct()
    {
        $this->_init(\Magestore\HelloMagento\Model\ResourceModel\Example::class);
    }
    public function getExample_Id()
    {
        return $this->getData(ExampleInterface::EXAMPLE_ID);
    }

    /**
     * @param $example_id
     * @return Example
     */
    public function setExample_Id($example_id)
    {
        return $this->setData(ExampleInterface::EXAMPLE_ID);
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->getTitle(ExampleInterface::TITLE);
    }

    /**
     * @param $title
     * @return string
     */
    public function setTitle($title)
    {
        return $this->setTitle(ExampleInterface::TITLE);
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->getContent(ExampleInterface::CONTENT);
    }

    /**
     * @param $content
     * @return timestamp
     */
    public function setContent($content)
    {
        return $this->setContent(ExampleInterface::CONTENT);
    }

    public function getCreate_At()
    {
        return $this->getCreate_At(ExampleInterface::CREATE_AT);
    }

    /**
     * @param $create_at
     * @return mixed
     */
    public function setCreate_At($create_at)
    {
        return $this->setCreate_At(ExampleInterface::CREATE_AT);
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->getLastName(ExampleInterface::LASTNAME);
    }

    /**
     * @param $lastname
     * @return string
     */
    public function setLastName($lastname)
    {
        return $this->setLastName(ExampleInterface::LASTNAME);
    }
}
