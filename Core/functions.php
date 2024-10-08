<?php

use Core\Response;

function sortItems($items, $key, $order = 'asc')
{
    usort($items, function ($a, $b) use ($key, $order) {
        if (!isset($a[$key]) || !isset($b[$key])) {
            return 0;
        }

        $value1 = $a[$key];
        $value2 = $b[$key];

        if ($key === 'priority') {
            $comparison = comparePriorities($a, $b);
        } elseif ($key === 'time') {
            $comparison = compareTimeDurations($value1, $value2);
        } elseif ($key === 'difficulty') {
            $comparison = compareDifficulties($a, $b);
        } else {
            $comparison = $value1 <=> $value2;
        }

        return $order === 'desc' ? -$comparison : $comparison;
    });

    return $items;
}

function comparePriorities($item1, $item2)
{
    $priorities = ['Low' => 1, 'Medium' => 2, 'High' => 3];
    return $priorities[$item1['priority']] <=> $priorities[$item2['priority']];
}

function compareDifficulties($item1, $item2)
{
    $difficulties = ['Easy' => 1, 'Medium' => 2, 'Hard' => 3];
    return $difficulties[$item1['difficulty']] <=> $difficulties[$item2['difficulty']];
}

function compareTimeDurations($time1, $time2)
{
    $toMinutes = function ($time) {
        if (strpos($time, 'h') !== false) {
            $parts = explode('h', $time);
            return intval($parts[0]) * 60 + (isset($parts[1]) ? intval($parts[1]) : 0);
        }
        return intval($time);
    };

    return $toMinutes($time1) <=> $toMinutes($time2);
}

//    DUMP VARIABLES

function dd($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';

    die();
}
//    AUTHORIZATION

function authorize($condition, $status = Response::FORBIDDEN)
{
    if (! $condition) {
        abort($status);
    }
}
//    UTILS
function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}

function strToHeading($input)
{
    $input = str_replace(['_', ' '], ' ', $input);

    $upperCaseString = ucfirst($input);

    return preg_replace('/(?<!^)([A-Z])/', ' $1', $upperCaseString);
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);

    require base_path('/views/' . $path);
}

function abort($code = 404)
{
    http_response_code($code);

    require base_path("/views/{$code}.view.php");

    die();
}

function redirect($path)
{
    header("location: {$path}");
    exit();
}

function old($key, $default = '')
{
    return \Core\Session::get('old')[$key] ?? $default;
}