<?php

namespace App\Services;

use App\Repositories\ProducerRepository;
use App\Models\Address;
use Exception;

class ProducerService
{
    protected ProducerRepository $repo;

    public function __construct(ProducerRepository $repo)
    {
        $this->repo = $repo;
    }

    /**
     * Rejestruje nowego producenta wraz z adresem
     *
     * @param array $data
     * @return \App\Models\Producer
     * @throws Exception
     */
    public function registerProducer(array $data)
    {
        // Sprawdzenie unikalności nazwy producenta
        if ($this->repo->findByName($data['name'])) {
            throw new Exception("Producer already exists");
        }

        // Tworzymy adres jeśli jest w danych
        if (isset($data['address'])) {
            $address = Address::create($data['address']);
            $data['address_id'] = $address->id;
        }

        return $this->repo->create($data);
    }

    /**
     * Aktualizuje producenta i adres
     *
     * @param int $id
     * @param array $data
     * @return \App\Models\Producer
     * @throws Exception
     */
    public function updateProducer(int $id, array $data)
    {
        $producer = $this->repo->find($id);
        if (!$producer) {
            throw new Exception("Producer not found");
        }

        // Aktualizacja adresu
        if (isset($data['address']) && $producer->address) {
            $producer->address->update($data['address']);
        } elseif (isset($data['address'])) {
            $address = Address::create($data['address']);
            $data['address_id'] = $address->id;
        }

        $this->repo->update($id, $data);

        return $this->repo->find($id);
    }

    public function deleteProducer(int $id)
    {
        return $this->repo->delete($id);
    }

    public function listProducers()
    {
        return $this->repo->all();
    }

    public function getProducer(int $id)
    {
        return $this->repo->find($id);
    }
}
