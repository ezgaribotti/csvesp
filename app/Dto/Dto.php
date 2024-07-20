<?php

namespace App\Dto;

abstract class Dto
{
    public function __construct(array $attributes = [])
    {
        if ($attributes)
            $this->fill($attributes);
    }

    public function fill(array $attributes): void
    {
        foreach ($attributes as $key => $value) {
            if (property_exists($this, $key)) {
                if (is_string($value)) $value = trim($value);
                $this->{$key} = $value;
            }
        }
    }

    public function toArray(): array
    {
        return get_object_vars($this);
    }
}
