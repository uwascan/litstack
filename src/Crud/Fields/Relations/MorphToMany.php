<?php

namespace Ignite\Crud\Fields\Relations;

use Ignite\Crud\Fields\Traits\HasBaseField;

class MorphToMany extends ManyRelationField
{
    use HasBaseField;

    /**
     * Properties passed to Vue component.
     *
     * @var array
     */
    protected $props = [
        'type' => 'morphToMany',
    ];

    /**
     * Required attributes.
     *
     * @var array
     */
    public $requiredAttributes = [];

    /**
     * Available Field attributes.
     *
     * @var array
     */
    public $availableAttributes = [
        'form',
    ];

    /**
     * Default Field attributes.
     *
     * @var array
     */
    public $defaultAttributes = [];
}
