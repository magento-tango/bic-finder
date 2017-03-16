<?php

# To get all changes made by us
# git log --author='\(oiegorov\)\|\(vpaladiychuk\)\|\(\dpoperechnyy\)\|\(kovsher\)\|\(kalexeyev\)' --name-only --no-merges --oneline
# git log --committer='\(oiegorov\)\|\(vpaladiychuk\)\|\(\dpoperechnyy\)\|\(kovsher\)\|\(kalexeyev\)' --name-only --no-merges --oneline

$options = getopt('', ['classes:', 'changes:']);

$classes = file($options['classes']);

foreach ($classes as $class) {
    $cmd = 'grep "' . trim($class) . '" ' . $options['changes'];
    echo shell_exec($cmd);
}
