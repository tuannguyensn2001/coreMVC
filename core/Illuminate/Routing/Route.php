<?php

namespace Core\Illuminate\Routing;



class Route
{
    private $ERROR_NOT_ALLOW;

    public function __construct()
    {
        $this->ERROR_NOT_ALLOW = 'Method is not allowed';
    }


    private function execute($arrayController)
    {
        $nameController = $arrayController[0];
        $methodController = $arrayController[1];

        $arguments = [];
        try {
            $reflection = new \ReflectionMethod($nameController, $methodController);
            foreach($reflection->getParameters() as $item){
                $name = $item->getClass()->name;
                $arguments[] = new $name();
            }

        } catch (\ReflectionException $e) {
            echo $e->getMessage();
        }

        $controller = new $nameController();
        $controller->$methodController(...$arguments);
    }

    public function get($path,$controller)
    {

        $url = isset($_GET['url']) ? "/${_GET['url']}" : '/';

        if ($_SERVER['REQUEST_METHOD'] !== "GET" && $path === $url ) throw  new \Exception($this->ERROR_NOT_ALLOW);

        if ($path === $url){

            $this->execute($controller);
        }

    }

    public function post($path,$controller)
    {

        $url = isset($_GET['url']) ? "/${_GET['url']}" : '/';

        if ($_SERVER['REQUEST_METHOD'] !== "POST" && $path === $url ) throw  new \Exception($this->ERROR_NOT_ALLOW);

        if ($path !== $url) return;

        $this->execute($controller);

    }


}