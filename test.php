<?php
require 'vendor/autoload.php';
$parsedFile     = new \Go\ParserReflection\ReflectionFile('SomeClass.php');
$fileNameSpaces = $parsedFile->getFileNamespaces();
// We can iterate over namespaces in the file
foreach ($fileNameSpaces as $namespace) {
    $classes = $namespace->getClasses();
    // Iterate over the classes in the namespace
    foreach ($classes as $class) {
        echo "Found class: ", $class->getName(), PHP_EOL;
        // Now let's show all methods in the class
        foreach ($class->getMethods() as $method) {
            echo "Found class method: ", $class->getName(), '::', $method->getName(), PHP_EOL;
        }
        
        // ...all properties in the class
        foreach ($class->getProperties() as $property) {
            echo "Found class property: ", $class->getName(), '->', $property->getName(), PHP_EOL;
        }
    }
}
