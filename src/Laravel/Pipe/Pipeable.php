<?php

namespace RalphJSmit\Helpers\Laravel\Pipe;

trait Pipeable
{
    public function pipe(callable $callback): mixed
    {
        return $callback($this);
    }

    public function pipeInto(string $class): mixed
    {
        return new $class($this);
    }

    public function pipeThrough(array $callbacks): mixed
    {
        return pipe($this)->through($callbacks)->thenReturn();
    }
}