<?php

namespace SON\Composite;

abstract class CategoriesAbstract
{
    protected $categories = [];

    public abstract function getName();

    public function addCategory(CategoriesAbstract $category)
    {
        $this->categories[] = $category;
    }

    public function removeCategory(CategoriesAbstract $category)
    {
        $this->categories = array_filter(function ($cat) use ($category) {
            return $cat === $category;
        });
    }

    public function getCategory(int $key)
    {
        return $this->categories[$key] ?? null;
    }
}
