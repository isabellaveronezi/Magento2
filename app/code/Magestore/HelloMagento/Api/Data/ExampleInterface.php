<?php

namespace Magestore\HelloMagento\Api\Data;

interface ExampleInterface
{
    const EXAMPLE_ID = 'example_id';
    const TITLE =   'title';
    const CONTENT = 'content';
    const CREATE_AT = 'create_at';
    const LASTNAME = 'lastname';

    /**
     * @return int
     */
    public function getExample_Id();

    /**
     * @param $example_id
     * @return int
     */
    public function setExample_Id($example_id);

    /**
     * @return string
     */
    public function getTitle();

    /**
     * @param $title
     * @return string
     */
    public function setTitle($title);

    /**
     * @return string
     */
    public function getContent();

    /**
     * @param $content
     * @return string
     */
    public function setContent($content);

    /**
     * @return mixed
     */
    public function getCreate_At();

    /**
     * @param $create_at
     * @return mixed
     */

    public function setCreate_At($create_at);

    /**
     * @return string
     */
    public function getLastName();

    /**
     * @param $lastname
     * @return string
     */
    public function setLastName($lastname);
}
