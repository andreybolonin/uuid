<?php

namespace Rhumsaa\Uuid;

interface Codec
{
    /**
     * @return string
     */
    public function encode(UuidInterface $uuid);

    /**
     * @return string
     */
    public function encodeBinary(UuidInterface $uuid);

    /**
     * @return UuidInterface
     */
    public function decode($encodedUuid);

    /**
     * @param string $bytes
     * @return UuidInterface
     */
    public function decodeBytes($bytes);
}
