<?php

namespace App\Repositories;

use App\Models\Producer;

class ProducerRepository
{
    protected Producer $model;

    public function __construct(Producer $model)
    {
        $this->model = $model;
    }

    /**
     * Pobiera wszystkich producentów
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * Znajduje producenta po ID
     *
     * @param int $id
     * @return Producer|null
     */
    public function find(int $id): ?Producer
    {
        return $this->model->find($id);
    }

    /**
     * Tworzy nowego producenta
     *
     * @param array $data
     * @return Producer
     */
    public function create(array $data): Producer
    {
        return $this->model->create($data);
    }

    /**
     * Aktualizuje producenta
     *
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function update(int $id, array $data): bool
    {
        $producer = $this->find($id);
        if (!$producer) {
            return false;
        }

        return $producer->update($data);
    }

    /**
     * Usuwa producenta
     *
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        $producer = $this->find($id);
        if (!$producer) {
            return false;
        }

        return $producer->delete();
    }

    /**
     * Znajduje producenta po nazwie
     *
     * @param string $name
     * @return Producer|null
     */
    public function findByName(string $name): ?Producer
    {
        return $this->model->where('name', $name)->first();
    }
}
