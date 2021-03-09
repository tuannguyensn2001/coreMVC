<?php


namespace Core\Illuminate\Request;


class Request
{
    public function query($params): string
    {
        return $this->getRequestQuery()[$params];

    }

    private function getRequest(): array
    {
        $data = $_REQUEST;
        unset($data['url']);
        return $data;
    }

    private function getRequestQuery(): array
    {
        $url = $_SERVER['REQUEST_URI'];

        $url = explode('?',$url);

        array_shift($url);

        $data = [];

        foreach($url as $item){
            $split = explode('=',$item);
            $data[$split[0]] = $split[1];
        }

        return $data;
    }


    public function get($params)
    {
        return $this->getRequest()[$params];
    }

    public function all(): array
    {
        return array_merge($this->getRequest(),$this->getRequestQuery());
    }

}