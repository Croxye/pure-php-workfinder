<?php

/**
 * Get the base path
 *
 * @param string $path
 * @return string
 */
function base_path($path = '')
{
  return __DIR__ . DIRECTORY_SEPARATOR . $path;
}

/**
 * Load a view first
 * @param string $name
 * @return void
 */
function loadView($name)
{

  $viewPath = base_path("views/{$name}.view.php");

  if (file_exists($viewPath)) {
    require $viewPath;
  } else {
    echo "View {$name} not found";
  }
}

/**
 * Load a view first
 * @param string $name
 * @return void
 */
function loadPartial($name)
{
  $partialPath = base_path("views/partials/{$name}.php");

  if (file_exists($partialPath)) {
    require $partialPath;
  } else {
    echo "Partial {$name} not found";
  }
}

?>
