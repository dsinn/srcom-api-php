<?php
namespace Dsinn\SrcomApi\Client\Getters;

use Dsinn\SrcomApi\Client\DataTypes\Variable;

class Variables extends Getter
{
    /**
     * @param string $id
     * @return Variable
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get(string $id): Variable
    {
        return new Variable($this->httpClient->request('GET', "/variables/{$id}")['data']);
    }
}
