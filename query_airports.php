<?php
/*
{
    $match: {
        "CANCELLED": 1
        }
    },
    {
        $group: {
            _id: {
                ORIGIN: "$ORIGIN"
            },
            count: {
                $sum: 1
            }
        }
    },
    {
        $sort: {
            "count": -1
        }
    }
}
 */

require_once 'index.php';

use Documents\Contact;

$builder = $dm->createAggregationBuilder(Contact::class);
$builder
    ->match()
        ->field('CANCELLED')
        ->gte(1)
        ->lte(1)
    ->group()
        ->field('id')
        ->expression('$ORIGIN')
        ->field('count')
        ->sum(1)
    ->sort(['count' => -1]);

$result = $builder->execute();
var_dump(iterator_to_array($result));
