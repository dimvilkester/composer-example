<?php

namespace dimvilkester\parser;

/**
 * @author Dmitry Vilkin <dimvilkester@gmail.com>
 */
class CParser implements IParser
{
    public function process(string $url, string $tag): array
    {  
        $url_str = file_get_contents($url);

        $pattern = "~<" . $tag . "[^>]*?>(.+?)</" . $tag . ">~sui";

        if (! preg_match_all($pattern, $url_str, $url_list)) {
             echo "<p>Совпадения не найдены!</p>";
        } else {
            foreach ($url_list[1] as $value) {
                $tag_list[] = trim($value);
            }
        }
        return $tag_list;
    }
}
