<?php

namespace Vinkas\Singapore\Data;

class Regions
{
  public function all(): array
  {
    return [
      [
        'id' => 1,
        'name' => 'Central',
        'slug' => 'central',
        'zh_name' => '中央',
        'ta_name' => 'மத்திய',
      ],
      [
        'id' => 2,
        'name' => 'East',
        'slug' => 'east',
        'zh_name' => '东方',
        'ta_name' => 'கிழக்கு',
      ],
      [
        'id' => 3,
        'name' => 'North',
        'slug' => 'north',
        'zh_name' => '北方',
        'ta_name' => 'வடக்கு',
      ],
      [
        'id' => 4,
        'name' => 'North-East',
        'slug' => 'north-east',
        'zh_name' => '东北方',
        'ta_name' => 'வடகிழக்கு',
      ],
      [
        'id' => 5,
        'name' => 'West',
        'slug' => 'west',
        'zh_name' => '西方',
        'ta_name' => 'மேற்கு',
      ],
    ];
  }
}
