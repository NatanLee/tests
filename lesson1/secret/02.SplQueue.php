<?php

$queue = new SplQueue();

$queue->setIteratorMode(SplQueue::IT_MODE_DELETE);

$queue->enqueue('one');
$queue->enqueue('two');
$queue->enqueue('qwerty');
$queue->enqueue('four');
$queue->enqueue('five');

$queue->dequeue();
$queue->dequeue();

print_r($queue);

echo $queue->top();
echo PHP_EOL;