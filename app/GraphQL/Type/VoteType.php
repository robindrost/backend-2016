<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class VoteType extends GraphQLType {
  protected $attributes = [
    'name' => 'Vote',
    'description' => 'A vote by a user'
  ];

  public function fields()
  {
    return [
      'song_id' => [
        'type' => Type::nonNull(Type::int()),
        'description' => 'The id of the song'
      ],
      'user_id' => [
        'type' => Type::nonNull(Type::int()),
        'description' => 'The id of the user'
      ],
      'score' => [
        'type' => Type::int(),
        'description' => 'The score given by the user'
      ]
    ];
  }
}
