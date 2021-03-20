<?php

namespace Nikans\TextLinked;

use Laravel\Nova\Fields\Text;

class TextLinked extends Text
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'text-linked';


//    public function __construct($component = null) {
//        parent::__construct($component);

//        $url = \Nova::path() . "/resources/{$this->resource->uriKey()}/{$this->resource->id}";
//        $this->meta = array_merge($this->meta, ['url' => $url]);
//    }

    /**
     * The field's component.
     *
     * @param string $uirKey
     * @param string $id
     * @return TextLinked
     */
    public function linkResource(string $uirKey, string $id)
    {
        $url = \Nova::path() . "/resources/{$uirKey}/{$id}";
        return $this->withMeta(['url' => $url]);
    }

    /**
     * The field's component.
     *
     * @param string $url
     * @return TextLinked
     */
    public function url(string $url)
    {
        return $this->withMeta(['url' => $url]);
    }

    /**
     * The field's component.
     *
     * @param \Laravel\Nova\Resource $resource
     * @return TextLinked
     */
    public function link($resource)
    {
        $url = \Nova::path() . "/resources/{$resource->uriKey()}/{$resource->id}";
        return $this->withMeta(['url' => $url]);
    }
}
