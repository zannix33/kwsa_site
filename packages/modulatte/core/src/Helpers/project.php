<?php

use A17\Twill\Repositories\SettingRepository;
use Illuminate\Support\Arr;
use Illuminate\Pagination\LengthAwarePaginator;
use Modulatte\Core\Repositories\PageRepository;
use Modulatte\Core\Models\Page;
use Modulatte\Core\Transformers\NavigationTransformer;

/**
 * @return string | boolean
 */
function checkStringField($model, $field)
{
    if (isset($model->data[$field]) && $model->data[$field]) {
        return $model->data[$field];
    }

    return false;
}

/**
 * @return string
 */
function stripPhoneUrl($value)
{
    return preg_replace('/[^0-9\-]/', '', $value);
}

/**
 * @param $bytes
 * @return string
 */
function byteConvert($bytes)
{
    if ($bytes == 0) {
        return "0.00 B";
    }

    $s = array('b', 'kb', 'mb', 'gb', 'tb', 'pb');
    $e = floor(log($bytes, 1024));

    return round($bytes / pow(1024, $e), 2) . $s[$e];
}

/**
 *
 */
function fieldNameToText($fieldName)
{
    return ucwords(str_replace('_', ' ', $fieldName));
}

/**
 *
 */
function formatDate($date)
{
    return \Carbon\Carbon::parse($date)->format('l jS F Y');
}

/**
 *
 */
function heading($string)
{
    $arr = preg_split("/\r\n|\n|\r/", $string);
    $arr[0] = '<strong>' . $arr[0] . '</strong>';

    $new_string = implode('<br/>', $arr);

    return $new_string;
}

/**
 * This is used to strip all the p tags
 *
 * @return string
 */
function cleanPTags($string)
{
    // as of PHP 7.4.0 the line above can be written as:
    // return strip_tags($string, ['<br>', '<em>', '<a>']);
    return strip_tags($string, '<br><strong>');
}

/**
 * This is used to clean quotes that are rendered on the blade files
 * and applied to a component
 *
 * @param mixed $data
 *
 * @return string
 */
function cleanVueQuotes($data)
{
    return htmlspecialchars(json_encode($data), ENT_QUOTES, 'UTF-8', true);
}

/**
 * @return string
 */
function modFieldValue($model, $field)
{
    if (strpos($field, '.') == false) {
        if (isset($model[$field]) && $model[$field]) {
            return $model[$field];
        }
    } else {
        return Arr::get($model, $field, null);
    }


    return null;
}

/**
 * This is used for string validations where it returns the rule for the
 * maximum string length passed on the parameter
 *
 * @param integer $max
 *
 * @return string
 */
function maxStringRule($max = 196)
{
    return 'max:' . $max;
}

function getServicesByIndex($services, $index = 0, $limit = 0, $all = false)
{
    if (count($services) > 0 && array_key_exists($index, $services->toArray())) {
        if ($all || $limit > 0) {
            $items = $services->slice($index);

            if ($limit > 0) {

                $items = $services->slice($index, $limit);
            }

            return $items;
        } else {
            if ($services)
                return $services[$index];
        }
    }

    return null;
}

function setting($field)
{
    $setting = app(SettingRepository::class)->byKey($field);

    if ($setting)
        return $setting;

    return null;
}

function paginatorFrom(LengthAwarePaginator $paginator, $limit)
{
    $half_total_links = floor($limit / 2);
    $from = $paginator->currentPage() - $half_total_links;
    if ($paginator->lastPage() - $paginator->currentPage() < $half_total_links) {
        $from -= $half_total_links - ($paginator->lastPage() - $paginator->currentPage()) - 1;
    }

    return $from;
}

function paginatorTo(LengthAwarePaginator $paginator, $limit)
{
    $half_total_links = floor($limit / 2);
    $to = $paginator->currentPage() + $half_total_links;
    if ($paginator->currentPage() < $half_total_links) {
        $to += $half_total_links - $paginator->currentPage();
    }

    return $to;
}

function navigationMenu()
{
    $repo = new PageRepository(new Page);

    $pages = $repo->published()->get();

    return (new NavigationTransformer())->transformCollection($pages, 'display');
}

function getCoordinates($data = "0|0", $type = 'lat')
{
    if ($data) {
        $coordinates = explode("|", $data);

        if ($type == 'lat') {
            return $coordinates[0];
        }

        return $coordinates[1];
    }

    return 0;
}

function getBlocksByType($model = null, $type = 'default')
{
    if ($model) {
        return $model->blocks()->where('type', $type)->get();
    }

    return null;
}
