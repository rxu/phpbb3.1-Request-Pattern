<?php
/**
*
* info_acp_ptrequest [Russian]
*
* @package Request Pattern
* @copyright (c) 2015 Sheer
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_REQUEST_PATTERN'			=> 'Шаблон запроса',
	'ACP_REQUEST_PATTERN_MANAGE'	=> 'Управление',
	'ACP_REQUEST_PATTERN_EXPLAIN'	=> 'Здесь вы можете составить список вопросов для шаблона. Вы так же можете редактировать, удалять и перемещать вопросы.',

	'QUESTION_NAME'				=> 'Вопрос',
	'EXPLAIN'					=> 'Пояснение',
	'DELETE_MARKED_SUCESS'		=> 'Выбранные вопросы были успешно удалены',
	'DELETE_SUCESS'				=> 'Все вопросы были успешно удалены',
	'UPDATE_SUCCESS'			=> 'Выбранные вопросы были успешно изменены',
	'UPDATE_FAIL'				=> 'Ничего не выбрано',
	'EMPTY_QUESTION'			=> 'Вы не ввели вопрос',
	'ADD_SUCCESS'				=> 'Вопрос успешно добавлен',
	'CHANGE_SELECTED'			=> 'Изменить отмеченные',
));
