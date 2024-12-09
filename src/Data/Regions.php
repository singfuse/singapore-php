<?php

namespace Vinkas\Singapore\Data;

class Regions
{
  public function all(): array
  {
    return [
      [
        'id' => 1,
        'key' => 'C',
        'name' => 'Central',
        'slug' => 'central',
        'zh_name' => '中央',
        'ta_name' => 'மத்திய',
      ],
      [
        'id' => 2,
        'key' => 'E',
        'name' => 'East',
        'slug' => 'east',
        'zh_name' => '东方',
        'ta_name' => 'கிழக்கு',
      ],
      [
        'id' => 3,
        'key' => 'N',
        'name' => 'North',
        'slug' => 'north',
        'zh_name' => '北方',
        'ta_name' => 'வடக்கு',
      ],
      [
        'id' => 4,
        'key' => 'NE',
        'name' => 'North-East',
        'slug' => 'north-east',
        'zh_name' => '东北方',
        'ta_name' => 'வடகிழக்கு',
      ],
      [
        'id' => 5,
        'key' => 'W',
        'name' => 'West',
        'slug' => 'west',
        'zh_name' => '西方',
        'ta_name' => 'மேற்கு',
      ],
    ];
  }
}
