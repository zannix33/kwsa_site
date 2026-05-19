<?php

namespace Modulatte\Core\Transformers;

class BaseTransformer
{

    protected $fields;
    protected $relations;

    /**
     *
     */
    public function __construct($fields = null, $relations = null)
    {
        $this->fields = $fields;
        $this->relations = $relations;
    }

    /**
     * Generic function that transforms collection based on the provided method
     *
     * @param string $method
     * @param \Illuminate\Database\Eloquent\Collection $collection
     * @return array
     */
    public function transformCollection($collection, $method = 'transform')
    {
        return $collection->map(function ($model) use ($method) {
            return call_user_func_array([$this, $method], [$model]);
        });
    }

    /**
     * Generic function to retrieve a list of fields in array format
     *
     * @param \Illuminate\Database\Eloquent\Collection
     * @param string $fieldName
     *
     * @return array
     */
    public function fieldArrayList($collection, $fieldName)
    {
        if ($collection->count()) {
            return $collection->pluck($fieldName)->toArray();
        }

        return [];
    }

    /**
     * Generic function to retrieve a list of fields merge into strings
     * according to the specified separator
     *
     * @param \Illuminate\Database\Eloquent\Collection
     * @param string $fieldName
     * @param string $separator
     *
     * @return string
     */
    public function fieldStringList($collection, $fieldName, $separator = ', ')
    {
        $items = $this->fieldArrayList($collection, $fieldName);

        if (count($items)) {
            return implode($separator, $items);
        }

        return null;
    }

    /**
     *
     */
    protected function transformWithFieldFilter($data)
    {

        if (is_null($this->fields)) {
            return $data;
        }

        return array_intersect_key($data, array_flip((array) $this->fields));
    }
}
