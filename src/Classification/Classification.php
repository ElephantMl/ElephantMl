<?php

declare(strict_types=1);

interface Classification
{
    /**
     * @param array $sample
     * @param array $labels
     *
     * TODO: add exception.
     */
    public function fit(array $sample, array $labels): void;

    /**
     * @param array $sample
     *
     * @return int|float
     *
     * TODO: add exception.
     */
    public function predict(array $sample): int | float;
}
