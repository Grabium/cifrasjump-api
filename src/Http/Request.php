<?php
namespace CJump\Http;

class Request
{
    protected array $data = [];

    //new Request($_REQUEST);
    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function get(string $key)
    {
        return $this->data[$key] ?? null;
    }

    public function all(): array
    {
        return $this->data;
    }

    public function only(array $keys): array
    {
        $filteredData = [];
        foreach ($keys as $key) {
            if (array_key_exists($key, $this->data)) {
                $filteredData[$key] = $this->data[$key];
            }
        }
        return $filteredData;
    }

    public function except(array $keys): array
    {
        $filteredData = $this->data;
        foreach ($keys as $key) {
            unset($filteredData[$key]);
        }
        return $filteredData;
    }

    // Método para adicionar ou atualizar dados na requisição
    public function merge(array $newData): void
    {
        $this->data = array_merge($this->data, $newData);
    }

    // Outros métodos úteis para interagir com a requisição podem ser adicionados aqui,
    // como obter headers, arquivos, etc.

    //Permite que a classe Validation acesse os dados da requisição
    public function getDataForValidation(): array
    {
        return $this->data;
    }
}
