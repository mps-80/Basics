<?php
class CommandRouter {
    protected $commands = [];

    public function __construct() {
        // Registering callable commands (as closures)
        $this->commands = [
            'greet' => function($name) {
                return "Hello, $name!";
            },
            'add' => function($a, $b) {
                return $a + $b;
            },
            'reverse' => function($text) {
                return strrev($text);
            },
        ];
    }

    public function __call($name, $arguments) {
        if (isset($this->commands[$name])) {
            return call_user_func_array($this->commands[$name], $arguments);
        } else {
            throw new BadMethodCallException("Unknown command: $name");
        }
    }
}

$router = new CommandRouter();

echo $router->greet("Alice");     // Outputs: Hello, Alice!
echo $router->add(5, 10);         // Outputs: 15
echo $router->reverse("Hello");  // Outputs: olleH

// $router->sing("Song") → Throws an exception: Unknown command: sing
