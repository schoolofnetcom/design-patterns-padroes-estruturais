<?php

namespace SON\Flywheight;

class FlywheightFactory
{
    private $soldiers = [];

    public function getSoldier(int $key)
    {
        if (empty($this->soldiers[$key])) {
            $this->soldiers[$key] = $this->makeSoldier();
        }
        return $this->soldiers[$key];
    }

    private function makeSoldier()
    {
        $names = [
            'Livius Aleksander',
            'Mason Hugubert',
            'Pat Longinus',
            'Tiborc Nikhil',
            'Quirino Anand',
        ];

        $name = array_rand($names, 1);
        $name = $names[$name];

        $ages = [
            19,
            21,
            27,
            32,
            38,
        ];

        $age = array_rand($ages, 1);
        $age = $ages[$age];

        return new Soldier($name, $age);
    }
}
