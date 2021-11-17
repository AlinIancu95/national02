<?php
namespace Classes;

class Category extends Base
{
    public $name;


    public function getArticles()
    {
        return Article::findBy('category_id', $this->getId());
    }

    public static function getTableName()
    {
        return 'categories';
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }


}