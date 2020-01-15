<?php


namespace App\Reporting\Infrastructure\Service\Source\Company;


class ISaludSource implements SourceInterface
{
    private $list;

    public function __construct()
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL,'https://jsonplaceholder.typicode.com/users');
        $result=curl_exec($ch);
        curl_close($ch);

        $this->sourceList = json_decode($result);

    }

    public function getList() : array
    {
        foreach($this->sourceList as $client) {
            $this->list[] = [$client->name, $client->email, $client->phone, $client->company->name];
        }

        return $this->list;
    }

    public function isImportFailed() : bool
    {

    }
}