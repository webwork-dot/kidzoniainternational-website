<?php
$html = file_get_contents("./application/views/frontend/default/home.php");
// Remove comments and scripts
$html = preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', '', $html);
$html = preg_replace('/<style\b[^>]*>(.*?)<\/style>/is', '', $html);
$html = preg_replace('/<!--(.*?)-->/is', '', $html);
$html = preg_replace('/<\?php(.*?)\?>/is', '', $html);
$html = preg_replace('/<\?=(.*?)\?>/is', '', $html);

preg_match_all('/<\/?([a-zA-Z0-9_-]+)(?:\s+[^>]+?)?>/i', $html, $matches, PREG_OFFSET_CAPTURE);
$stack = [];

$no_close = ['img', 'br', 'hr', 'input', 'link', 'meta', 'source', 'image', 'path', 'use', 'clipPath']; // clipping and other things
// wait, clippath has a closing tag in svg. <clipPath>...</clipPath>.
// so no_close = img,br,hr,input,link,meta,source,image,path,use.

foreach ($matches[0] as $i => $match) {
    if (preg_match('/^\s*<\s*\/?\s*$/', $match[0])) continue; // ignore broken tags
    preg_match('/^<\/?([a-zA-Z0-9_-]+)/', $match[0], $v);
    if (!isset($v[1])) continue;
    
    $tag = strtolower($v[1]);
    $ignore_tags = ['img', 'br', 'hr', 'input', 'link', 'meta', 'source', 'image', 'path', 'use', 'col', 'base', 'area', 'param', 'track', 'wbr', 'defs']; // defs actually has close, but anyway
    
    if (in_array($tag, $ignore_tags) || substr($match[0], -2) === '/>') {
        continue;
    }
    
    $is_close = (substr($match[0], 0, 2) === '</');
    if ($is_close) {
        if (empty($stack)) {
            echo "EXTRA CLOSING TAG: </$tag> at offset {$match[1]}\n";
            continue;
        }
        $last = array_pop($stack);
        if ($last['tag'] !== $tag) {
            echo "MISMATCH! Expected </{$last['tag']}> (opened at {$last['offset']}) but got </$tag> at {$match[1]}. Context: " . substr($html, $match[1]-50, 100) . "\n";
            // Try to recover
            if ($stack[count($stack)-1]['tag'] === $tag) {
                echo "  -> Recovering by popping one more (unclosed {$last['tag']})\n";
                array_pop($stack);
            }
        }
    } else {
        $stack[] = ['tag' => $tag, 'offset' => $match[1], 'text' => $match[0]];
    }
}
echo "Unclosed tags: " . count($stack) . "\n";
foreach ($stack as $s) {
    echo "- {$s['tag']} at {$s['offset']}: {$s['text']}\n";
}
?>
