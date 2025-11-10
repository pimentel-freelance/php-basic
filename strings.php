<?php 

$name = "Anthony";

echo "Hello, $name!\n";
echo 'Hello, $name!\n';

// Multi-line string
$heredoc = <<<EOD
Multi-line string
with variable $name
EOD;

$nowdoc = <<<'EOD'
Multi-line string
with variable $name
EOD;

echo $heredoc;
echo $nowdoc;