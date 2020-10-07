<?php

namespace Flat3\OData;

use Flat3\OData\Type\Property;

class EntityType extends ComplexType
{
    /** @var Property $key Primary key property */
    protected $key;

    /**
     * Return the defined key
     *
     * @return Property|null
     */
    public function getKey(): ?Property
    {
        return $this->key;
    }

    /**
     * Set the key property by name
     *
     * @param  Property  $key
     *
     * @return $this
     */
    public function setKey(Property $key): self
    {
        $this->addProperty($key);

        // Key property is not nullable
        $key->setNullable(false);

        // Key property should be marked keyable
        $key->setKeyable(true);

        $this->key = $key;

        return $this;
    }
}