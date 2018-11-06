<?php

namespace Trikey\Meta;

class Meta
{
    private $tags = [];

    public function set($tagName, $tagValue)
    {
        return $this->tags[$tagName] = $tagValue;
    }

    public function get($tagName, $defaultTagValue = null)
    {
        return array_get($this->tags, $tagName, $defaultTagValue);
    }
}
