<?php
/**
 * @by malakabuhammad
 */

require_once 'blogPosts.php';
require_once 'hateWords.php';

/**
 * @param string $message
 */
function printMessage($message)
{
    echo '[' . date('Y-m-d H:i:s') . '] ' . $message . PHP_EOL;
}

function sendAlertEmail()
{
    // send email
}

/**
 * @param $foundWords
 */
function alert($foundWords)
{
    printMessage('Hate speech has been found');
    foreach ($foundWords as $author_id => $usedWords) {
        $usedWords = array_values(array_unique($usedWords));
        printMessage('The author [' . $author_id . '] used the hate words [' . implode(', ', $usedWords) . ']');
        sendAlertEmail();
    }
}

function main()
{
    printMessage('Execution started.');
    $blogPosts = getBlogPosts();
    $hateWords = getHateWordsList();
    $foundWords = [];
    foreach ($blogPosts as $blogPost) {
        foreach ($hateWords as $hateWord) {
            if (!empty($blogPost['body']) && stripos($blogPost['body'], $hateWord) !== false) {
                $foundWords[$blogPost['author_id']][] = $hateWord;
            }
        }
    }
    if (!empty($foundWords)) {
        alert($foundWords);
    } else {
        printMessage('No hate speech has been found');
    }
    printMessage('Execution done.');
}
main();