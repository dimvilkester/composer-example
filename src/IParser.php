<?php

namespace dimvilkester\parser;

/**
 * @author Dmitry Vilkin <dimvilkester@gmail.com>
 */
interface IParser
{

    /**
     * @param string $url
     * @param string $tag
     * @return array
     */
    public function process(string $url, string $tag): array;
}
