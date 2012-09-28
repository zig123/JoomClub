<?php
/*-------------------------------------------------------
*
*   LiveStreet Engine Social Networking
*   Copyright © 2008 Mzhelskiy Maxim
*
*--------------------------------------------------------
*
*   Official site: www.livestreet.ru
*   Contact e-mail: rus.engine@gmail.com
*
*   GNU General Public License, version 2:
*   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*
---------------------------------------------------------
*/

/**
 * Модуль Ls
 * Для выполнения служебных действий LiveStreet CMS.
 * В частности для отправки на сервер LiveStreet информации о домене сайта, версии плагинов и LS.
 * Эти данные не разглашаются и используются исключительно в целях развития LiveStreet CMS, оценки спроса, отслеживания интересов аудитории.
 * Так же вы можете благодаря этому получать уведомления о новых версиях установленных плагинов и шаблонов.
 * Вы всегда можете отключить передачу данных в конфиге, но просим этого не далать, тем самым вы поможете развитию LS CMS. Это важно для нас.
 *
 * @package engine.modules
 * @since 1.0
 */
class ModuleLs extends Module {
	/**
	 * Адрес шлюза
	 *
	 * @var string
	 */
	protected $sUrlLs='';
	/**
	 * Список данных для отправки
	 *
	 * @var array
	 */
	protected $aDataForSend='';

	/**
	 * Инициализируем модуль
	 *
	 */
	public function Init() {

	}
	/**
	 * Запуск сбора данных
	 *
	 * @return bool
	 */
	public function SenderRun() {}
	/**
	 * Проверка ключа, в ответ браузеру выдается только сообщение "ok" или "no"
	 */
	public function CheckVerificationKey() {}
	/**
	 * Вставка счетчика GA с учетом его возможного повторного использования
	 *
	 * @return mixed
	 */
	public function InjectCounter() {}
	/**
	 * Отправка данных на шлюз LS
	 */
	protected function SendToLs() {}
	/**
	 * Отмечает факт ошибки при отправки данных, увеличиваем число попыток
	 */
	protected function ErrorSendToLs() {}
	/**
	 * Отмечает факт успешной отправки данных
	 */
	protected function SuccessfulSendToLs() {}
	/**
	 * Читает данные из файла
	 *
	 * @param string $sDate	Дата под которой сохранен файл
	 * @return bool|mixed
	 */
	protected function GetMarkerFile($sDate) {}
	/**
	 * Записывает данные в файл
	 *
	 * @param string $sDate	Дата
	 * @param array $aData	Данные
	 * @return bool
	 */
	protected function SetMarkerFile($sDate,$aData) {}
	/**
	 * Возвращает строчку для инжекции в шаблон
	 *
	 * @return string
	 */
	public function InjectImgForSendToLs() {}
	/**
	 * Возвращает данные для отправки
	 *
	 * @return array
	 */
	protected function GetDataForSendToLs() {}
	/**
	 * Чтение URL
	 *
	 * @param string $sUrl	Урл
	 * @param array $aParams	параметры
	 * @return bool|string
	 */
	protected function getUrl($sUrl,$aParams) {}
	/**
	 * Формирует строку GET параметров
	 *
	 * @param array $aParams	Параметры
	 * @return string
	 */
	protected function makeGetParams($aParams=array()) {}
}
?>