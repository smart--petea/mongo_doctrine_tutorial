<?php
/*
    {
    $group: {
        _id: {
            CARRIER: "$CARRIER"
            }
        count: {
            $sum: 1
        }
    },
    {
    $sort: {
        "count": -1
        }
    }
*/
require_once 'index.php';

use Documents\Contact;
use Documents\Query1Result;

$builder = $dm->createAggregationBuilder(Contact::class);
$builder
    ->hydrate(Query1Result::class)
    ->group()
        ->field('id')
        ->expression('$OP_CARRIER')
        ->field('count')
        ->sum(1);
$result = iterator_to_array($builder->execute());
