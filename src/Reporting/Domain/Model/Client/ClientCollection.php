<?php


namespace App\Reporting\Domain\Model\Client;


class ClientCollection implements \Iterator
{
    private $clientCollection = [];

    public function current()
    {
        return current($this->clientCollection);
    }

    public function next()
    {
        return next($this->clientCollection);
    }

    public function key()
    {
        return key($this->clientCollection);
    }

    public function valid()
    {
        $key = key($this->clientCollection);
        return ($key !== NULL && $key !== FALSE);
    }

    public function rewind()
    {
        // TODO: Implement rewind() method.
    }

    public function add(Video $video)
    {
        array_push($this->clientCollection, $video);
    }
}