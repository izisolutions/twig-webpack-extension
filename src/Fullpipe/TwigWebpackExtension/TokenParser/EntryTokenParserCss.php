<?php

namespace Fullpipe\TwigWebpackExtension\TokenParser;

class EntryTokenParserCss extends EntryTokenParser
{
    protected function type()
    {
        return 'css';
    }

    protected function generateHtml($entryPath, bool $defer, bool $inline)
    {
        if ($inline) {
            return file_get_contents($this->publicPathInline.$entryPath);
        }

        return '<link type="text/css" href="' . $entryPath . '" rel="stylesheet">';
    }
}
