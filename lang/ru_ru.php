<?php

require_once('Language.php');

class ru_ru extends Language
{
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * @return array
	 */
	protected function _LoadDates()
	{
		$dates = array();

		$dates['general_date'] = 'd.m.Y';
		$dates['general_datetime'] = 'd.m.Y H:i:s';
		$dates['schedule_daily'] = 'l, d.m.Y';
		$dates['reservation_email'] = 'd.m.Y H:i';
		$dates['res_popup'] = 'd.m.Y H:i';
		$dates['dashboard'] = 'l, d.m.Y H:i';
		$dates['period_time'] = 'H:i';
		$dates['general_date_js'] = 'dd.mm.yy';
		$dates['calendar_time'] = 'HH:mm';
		$dates['calendar_dates'] = 'd.M.';

		$this->Dates = $dates;

		return $this->Dates;
	}

	/**
	 * @return array
	 */
	protected function _LoadStrings()
	{
		$strings = array();

		$strings['FirstName'] = 'Имя';
		$strings['LastName'] = 'Фамилия';
		$strings['Timezone'] = 'Часовой пояс';
		$strings['Edit'] = 'Изменить';
		$strings['Change'] = 'Изменить';
		$strings['Rename'] = 'Переимновать';
		$strings['Remove'] = 'Удалить';
		$strings['Delete'] = 'Удалить';
		$strings['Update'] = 'Обновить';
		$strings['Cancel'] = 'Отмена';
		$strings['Add'] = 'Добавить';
		$strings['Name'] = 'Имя';
		$strings['Yes'] = 'Да';
		$strings['No'] = 'Нет';
		$strings['FirstNameRequired'] = 'Введите корректное имя.';
		$strings['LastNameRequired'] = 'Введите корректную фамилию.';
		$strings['PwMustMatch'] = 'Пароли должны совпадать.';
		$strings['ValidEmailRequired'] = 'Введите корректный адрес почты.';
		$strings['UniqueEmailRequired'] = 'Этот адрес почты уже зарегистрирован.';
		$strings['UniqueUsernameRequired'] = 'Этот пользователь уже существует.';
		$strings['UserNameRequired'] = 'Введите имя пользователя.';
		$strings['CaptchaMustMatch'] = 'Введите символы с картинки.';
		$strings['Today'] = 'Сегодня';
		$strings['Week'] = 'Неделя';
		$strings['Month'] = 'Месяц';
		$strings['BackToCalendar'] = 'Вернуться в календарь';
		$strings['BeginDate'] = 'Начало';
		$strings['EndDate'] = 'Окончание';
		$strings['Username'] = 'Имя пользователя';
		$strings['Password'] = 'Пароль';
		$strings['PasswordConfirmation'] = 'Подтвердите пароль';
		$strings['DefaultPage'] = 'Начальная страница';
		$strings['MyCalendar'] = 'Мой календарь';
		$strings['ScheduleCalendar'] = 'Расписание';
		$strings['Registration'] = 'Регистрация';
		$strings['NoAnnouncements'] = 'Нет объявлений';
		$strings['Announcements'] = 'Объявления';
		$strings['NoUpcomingReservations'] = 'У вас нет входящих заказов';
		$strings['UpcomingReservations'] = 'Будущие заказы';
		$strings['AllNoUpcomingReservations'] = 'Будущие заказы на следующие %s дней';
		$strings['AllUpcomingReservations'] = 'Все будущие заказы';
		$strings['ShowHide'] = 'Показать/Скрыть';
		$strings['Error'] = 'Ошибка';
		$strings['ReturnToPreviousPage'] = 'Вернуться к последней посещенной странице';
		$strings['UnknownError'] = 'Неизвестная ошибка';
		$strings['InsufficientPermissionsError'] = 'У вас нет доступа к этому ресурсу';
		$strings['MissingReservationResourceError'] = 'Автомобиль не был выбран';
		$strings['MissingReservationScheduleError'] = 'Расписание не было выбрано';
		$strings['DoesNotRepeat'] = 'Не повторяется';
		$strings['Daily'] = 'Ежедневно';
		$strings['Weekly'] = 'Еженедельно';
		$strings['Monthly'] = 'Ежемесячно';
		$strings['Yearly'] = 'Ежегодно';
		$strings['RepeatPrompt'] = 'Повтор';
		$strings['hours'] = 'часов';
		$strings['days'] = 'дней';
		$strings['weeks'] = 'недель';
		$strings['months'] = 'месяцев';
		$strings['years'] = 'лет';
		$strings['day'] = 'день';
		$strings['week'] = 'неделя';
		$strings['month'] = 'месяц';
		$strings['year'] = 'год';
		$strings['repeatDayOfMonth'] = 'день месяца';
		$strings['repeatDayOfWeek'] = 'день недели';
		$strings['RepeatUntilPrompt'] = 'До';
		$strings['RepeatEveryPrompt'] = 'Каждый';
		$strings['RepeatDaysPrompt'] = 'On';
		$strings['CreateReservationHeading'] = 'Создать новый заказ';
		$strings['EditReservationHeading'] = 'Редактировать заказ %s';
		$strings['ViewReservationHeading'] = 'Посмотреть заказ %s';
		$strings['ReservationErrors'] = 'Изменить заказ';
		$strings['Create'] = 'Создать';
		$strings['ThisInstance'] = 'Только этот экземпляр';
		$strings['AllInstances'] = 'Все экземпляры';
		$strings['FutureInstances'] = 'Будущие экземпляры';
		$strings['Print'] = 'Печать';
		$strings['ShowHideNavigation'] = 'Показать/Скрыть навигацию';
		$strings['ReferenceNumber'] = 'Номер заказа';
		$strings['Tomorrow'] = 'Завтра';
		$strings['LaterThisWeek'] = 'Позже на этой неделе';
		$strings['NextWeek'] = 'Следующая неделя';
		$strings['SignOut'] = 'Выйти';
		$strings['LayoutDescription'] = 'Starts on %s, showing %s days at a time';
		$strings['AllResources'] = 'Все автомобили';
		$strings['TakeOffline'] = 'Take Offline';
		$strings['BringOnline'] = 'Bring Online';
		$strings['AddImage'] = 'Добавить изображение';
		$strings['NoImage'] = 'Нет изображения';
		$strings['Move'] = 'Переместить';
		$strings['AppearsOn'] = 'Появляется на %s';
		$strings['Location'] = 'Размещение';
		$strings['NoLocationLabel'] = '(размещение не выбрано)';
		$strings['Contact'] = 'Контакт';
		$strings['NoContactLabel'] = '(нет контактной информации)';
		$strings['Description'] = 'Описание';
		$strings['NoDescriptionLabel'] = '(нет описания)';
		$strings['Notes'] = 'Заметки';
		$strings['NoNotesLabel'] = '(нет заметок)';
		$strings['NoTitleLabel'] = '(нет заголовка)';
		$strings['UsageConfiguration'] = 'Используемая конфигурация';
		$strings['ChangeConfiguration'] = 'Изменить конфигурацию';
		$strings['ResourceMinLength'] = 'Заказ должен длиться не менее %s';
		$strings['ResourceMinLengthNone'] = 'Это не минимальная продолжительность';
		$strings['ResourceMaxLength'] = 'Заказ не может длиться более %s';
		$strings['ResourceMaxLengthNone'] = 'Это не максимальная продолжительность';
		$strings['ResourceRequiresApproval'] = 'Заказ должен быть одобрен';
		$strings['ResourceRequiresApprovalNone'] = 'Заказы не требуют одобрения';
		$strings['ResourcePermissionAutoGranted'] = 'Permission is automatically granted';
		$strings['ResourcePermissionNotAutoGranted'] = 'Permission is not automatically granted';
		$strings['ResourceMinNotice'] = 'Reservations must be made at least %s prior to start time';
		$strings['ResourceMinNoticeNone'] = 'Reservations can be made up until the current time';
		$strings['ResourceMaxNotice'] = 'Reservations must not end more than %s from the current time';
		$strings['ResourceMaxNoticeNone'] = 'Reservations can end at any point in the future';
		$strings['ResourceBufferTime'] = 'There must be %s between reservations';
		$strings['ResourceBufferTimeNone'] = 'There is no buffer between reservations';
		$strings['ResourceAllowMultiDay'] = 'Reservations can be made across days';
		$strings['ResourceNotAllowMultiDay'] = 'Reservations cannot be made across days';
		$strings['ResourceCapacity'] = 'This resource has a capacity of %s people';
		$strings['ResourceCapacityNone'] = 'This resource has unlimited capacity';
		$strings['AddNewResource'] = 'Добавить новый автомобиль';
		$strings['AddNewUser'] = 'Добавить нового пользователя';
		$strings['AddUser'] = 'Добавить пользователя';
		$strings['Schedule'] = 'Расписание';
		$strings['AddResource'] = 'Добавить автомобиль';
		$strings['Capacity'] = 'Capacity';
		$strings['Access'] = 'Доступ';
		$strings['Duration'] = 'Длительность';
		$strings['Active'] = 'Активный';
		$strings['Inactive'] = 'Неактивный';
		$strings['ResetPassword'] = 'Сбросить пароль';
		$strings['LastLogin'] = 'Последний вход';
		$strings['Search'] = 'Поиск';
		$strings['ResourcePermissions'] = 'Права доступа к ресурсам';
		$strings['Reservations'] = 'Заказы';
		$strings['Groups'] = 'Группы';
		$strings['Users'] = 'Пользователи';
		$strings['ResetPassword'] = 'Сбросить пароль';
		$strings['AllUsers'] = 'Все пользователи';
		$strings['AllGroups'] = 'Все группы';
		$strings['AllSchedules'] = 'Все расписания';
		$strings['UsernameOrEmail'] = 'Имя пользователя или адрес почты';
		$strings['Members'] = 'Члены';
		$strings['QuickSlotCreation'] = 'Создать интервалы каждые %s минут между %s и %s';
		$strings['ApplyUpdatesTo'] = 'Применить обновления к';
		$strings['CancelParticipation'] = 'Отменить участие';
		$strings['Attending'] = 'Посещение';
		$strings['QuotaConfiguration'] = 'On %s for %s users in %s are limited to %s %s per %s';
		$strings['reservations'] = 'заказы';
		$strings['reservation'] = 'заказ';
		$strings['ChangeCalendar'] = 'Сменить календарь';
		$strings['AddQuota'] = 'Добавить квоту';
		$strings['FindUser'] = 'Найти пользователя';
		$strings['Created'] = 'Дата создания';
		$strings['LastModified'] = 'Дата изменения';
		$strings['GroupName'] = 'Имя группы';
		$strings['GroupMembers'] = 'Члены группы';
		$strings['GroupRoles'] = 'Роли группы';
		$strings['GroupAdmin'] = 'Администратор группы';
		$strings['Actions'] = 'Действия';
		$strings['CurrentPassword'] = 'Текущий пароль';
		$strings['NewPassword'] = 'Новый пароль';
		$strings['InvalidPassword'] = 'Текущий пароль не верный';
		$strings['PasswordChangedSuccessfully'] = 'Ваш пароль был успешно изменен';
		$strings['SignedInAs'] = 'Вы вошли как';
		$strings['NotSignedIn'] = 'Вы не вошли';
		$strings['ReservationTitle'] = 'Заголовок заказа';
		$strings['ReservationDescription'] = 'Описание заказа';
		$strings['ResourceList'] = 'Автомобиль будет заказан';
		$strings['Accessories'] = 'Допы';
		$strings['ParticipantList'] = 'Клиент';
		$strings['InvitationList'] = 'Агент';
		$strings['AccessoryName'] = 'Наименование аксессуара';
		$strings['QuantityAvailable'] = 'Количество аксессуаров';
		$strings['Resources'] = 'Автомобили';
		$strings['Participants'] = 'Клиенты';
		$strings['User'] = 'Пользователь';
		$strings['Resource'] = 'Автомобиль';
		$strings['Status'] = 'Статус';
		$strings['Approve'] = '✓';
		$strings['Page'] = 'Страница';
		$strings['Rows'] = 'Строки';
		$strings['Unlimited'] = 'Без ограничений';
		$strings['Email'] = 'Эл.почта';
		$strings['EmailAddress'] = 'Адрес эл.почты';
		$strings['Phone'] = 'Телефон';
		$strings['Organization'] = 'Организация';
		$strings['Position'] = 'Позиция';
		$strings['Language'] = 'Язык';
		$strings['Permissions'] = 'Разрешения';
		$strings['Reset'] = 'Сбросить';
		$strings['FindGroup'] = 'Найти группу';
		$strings['Manage'] = 'Управление';
		$strings['None'] = 'None';
		$strings['AddToOutlook'] = 'Добавить в календарь';
		$strings['Done'] = 'Завершить';
		$strings['RememberMe'] = 'Запомнить меня';
		$strings['FirstTimeUser?'] = 'Первый раз здесь?';
		$strings['CreateAnAccount'] = 'Создать учетную запись';
		$strings['ViewSchedule'] = 'Посмотреть расписание';
		$strings['ForgotMyPassword'] = 'Я забыл пароль';
		$strings['YouWillBeEmailedANewPassword'] = 'Вам будет выслан сгенерированный пароль';
		$strings['Close'] = 'Закрыть';
		$strings['ExportToCSV'] = 'Экспорт в CSV';
		$strings['OK'] = 'OK';
		$strings['Working'] = 'В процессе...';
		$strings['Login'] = 'Имя пользователя';
		$strings['AdditionalInformation'] = 'Дополнительная информация';
		$strings['AllFieldsAreRequired'] = 'все поля обязательны для заполнения';
		$strings['Optional'] = 'optional';
		$strings['YourProfileWasUpdated'] = 'Ваш профиль обновлен';
		$strings['YourSettingsWereUpdated'] = 'Ваши настройки обновлены';
		$strings['Register'] = 'Зарегистрироваться';
		$strings['SecurityCode'] = 'Код безопасности';
		$strings['ReservationCreatedPreference'] = 'Когда я создаю заказ или он создан от моего имени';
		$strings['ReservationUpdatedPreference'] = 'Когда я обновляю заказ или он обновлен от моего имени';
		$strings['ReservationDeletedPreference'] = 'Когда я удаляю заказ или он удален от моего имени';
		$strings['ReservationApprovalPreference'] = 'Когда мой заказ одобрен';
		$strings['PreferenceSendEmail'] = 'Уведомить меня по email';
		$strings['PreferenceNoEmail'] = 'Не уведомлять меня';
		$strings['ReservationCreated'] = 'Ваш заказ создан!';
		$strings['ReservationUpdated'] = 'Ваш заказ обновлен!';
		$strings['ReservationRemoved'] = 'Ваш заказ удален';
		$strings['ReservationRequiresApproval'] = 'Для одного или нескольких автомобилей требуется дополнительное подтверждение. Заказ будет в статусе ожидания пока не будет одобрен.';
		$strings['YourReferenceNumber'] = 'Номер вашей ссылки: %s';
		$strings['UpdatingReservation'] = 'Обновление заказа';
		$strings['ChangeUser'] = 'Сменить пользователя';
		$strings['MoreResources'] = 'Другие автомобили';
		$strings['ReservationLength'] = 'Сроки заказа';
		$strings['ParticipantList'] = 'Клиент(ы)';
		$strings['AddParticipants'] = 'Добавить участников';
		$strings['InviteOthers'] = 'Добавить других';
		$strings['AddResources'] = 'Добавить автомобили';
		$strings['AddAccessories'] = 'Добавить аксессуары';
		$strings['Accessory'] = 'Тип';
		$strings['QuantityRequested'] = 'Количество';
		$strings['CreatingReservation'] = 'Создание заказа';
		$strings['UpdatingReservation'] = 'Обновление заказа';
		$strings['DeleteWarning'] = 'Это действие будет невозможно отменить!';
		$strings['DeleteAccessoryWarning'] = 'Удаление этого аксессуара удалит его из всех заказов.';
		$strings['AddAccessory'] = 'Добавить аксессуар';
		$strings['AddBlackout'] = 'Add Blackout';
		$strings['AllResourcesOn'] = 'All Resources On';
		$strings['Reason'] = 'Reason';
		$strings['BlackoutShowMe'] = 'Показать конфликтующие заказы';
		$strings['BlackoutDeleteConflicts'] = 'Удалить конфликтующие заказы';
		$strings['Filter'] = 'Найти';
		$strings['Between'] = 'Между';
		$strings['CreatedBy'] = 'Создано';
		$strings['BlackoutCreated'] = 'Blackout Created';
		$strings['BlackoutNotCreated'] = 'Blackout не может быть создан';
		$strings['BlackoutUpdated'] = 'Blackout обновлен';
		$strings['BlackoutNotUpdated'] = 'Blackout не может быть обновлен';
		$strings['BlackoutConflicts'] = 'There are conflicting blackout times';
		$strings['ReservationConflicts'] = 'There are conflicting reservations times';
		$strings['UsersInGroup'] = 'Пользователи в этой группе';
		$strings['Browse'] = 'Просмотреть';
		$strings['DeleteGroupWarning'] = 'Удаление группы приведет к удалению всех связанных с ней разрешений. Пользователи могут потерять доступ к ресурсам.';
		$strings['WhatRolesApplyToThisGroup'] = 'Какие роли применить к этой группе?';
		$strings['WhoCanManageThisGroup'] = 'Кто может управлять этой группой?';
		$strings['WhoCanManageThisSchedule'] = 'Кто может управлять этим расписанием?';
		$strings['AddGroup'] = 'Добавить группу';
		$strings['AllQuotas'] = 'Все квоты';
		$strings['QuotaReminder'] = 'Remember: Quotas are enforced based on the schedule\'s timezone.';
		$strings['AllReservations'] = 'Все заказы';
		$strings['PendingReservations'] = 'Заказы в ожидании';
		$strings['Approving'] = 'Утвержденные';
		$strings['MoveToSchedule'] = 'Поместить в календарь';
		$strings['DeleteResourceWarning'] = 'Удаление этого ресурса повлечет удаление всех связанных данных, включая';
		$strings['DeleteResourceWarningReservations'] = 'все прошлые, текущие и будущие заказы, связанные с ним';
		$strings['DeleteResourceWarningPermissions'] = 'all permission assignments';
		$strings['DeleteResourceWarningReassign'] = 'Please reassign anything that you do not want to be deleted before proceeding';
		$strings['ScheduleLayout'] = 'Layout (all times %s)';
		$strings['ReservableTimeSlots'] = 'Reservable Time Slots';
		$strings['BlockedTimeSlots'] = 'Blocked Time Slots';
		$strings['ThisIsTheDefaultSchedule'] = 'Это расписание по умолчанию';
		$strings['DefaultScheduleCannotBeDeleted'] = 'Расписание по умолчанию не может быть удалено';
		$strings['MakeDefault'] = 'Сбросить в дефолт';
		$strings['BringDown'] = 'Bring Down';
		$strings['ChangeLayout'] = 'Change Layout';
		$strings['AddSchedule'] = 'Добавить расписание';
		$strings['StartsOn'] = 'Starts On';
		$strings['NumberOfDaysVisible'] = 'Number of Days Visible';
		$strings['UseSameLayoutAs'] = 'Use Same Layout As';
		$strings['Format'] = 'Format';
		$strings['OptionalLabel'] = 'Optional Label';
		$strings['LayoutInstructions'] = 'Enter one slot per line.  Slots must be provided for all 24 hours of the day beginning and ending at 12:00 AM.';
		$strings['AddUser'] = 'Добавить пользователя';
		$strings['UserPermissionInfo'] = 'Фактический доступ к ресурсу может отличаться в зависимости от роли пользователя, разрешений группы или внешних настроек разрешений';
		$strings['DeleteUserWarning'] = 'Удаление этого пользователя повлечет удаление всех его заказов и истории заказов';
		$strings['AddAnnouncement'] = 'Добавить объявление';
		$strings['Announcement'] = 'Объявление';
		$strings['Priority'] = 'Приоритет';
		$strings['Reservable'] = 'Свободные';
		$strings['Unreservable'] = 'В ремонте';
		$strings['Reserved'] = 'Сдано';
		$strings['MyReservation'] = 'Мои заказы';
		$strings['Pending'] = 'Забронировано';
		$strings['Past'] = 'Предыдущие';
		$strings['Restricted'] = 'Для служ-го польз-я';
		$strings['ViewAll'] = 'Посмотреть все';
		$strings['MoveResourcesAndReservations'] = 'Переместить автомобили и заказы в';
		$strings['TurnOffSubscription'] = 'Отключить подписи у календаря';
		$strings['TurnOnSubscription'] = 'Разрешить подписи в календаре';
		$strings['SubscribeToCalendar'] = 'Подписаться на этот календарь';
		$strings['SubscriptionsAreDisabled'] = 'Администратор отключил подписи к календарю';
		$strings['NoResourceAdministratorLabel'] = '(No Resource Administrator)';
		$strings['WhoCanManageThisResource'] = 'Кто может редактировать этот автомобиль?';
		$strings['ResourceAdministrator'] = 'Resource Administrator';
		$strings['Private'] = 'Private';
		$strings['Accept'] = 'Принять';
		$strings['Decline'] = 'Отклонить';
		$strings['ShowFullWeek'] = 'Показать полную неделю';
		$strings['CustomAttributes'] = 'Custom Attributes';
		$strings['AddAttribute'] = 'Добавить атрибут';
		$strings['EditAttribute'] = 'Обновить атрибут';
		$strings['DisplayLabel'] = 'Отображаемое имя';
		$strings['Type'] = 'Type';
		$strings['Required'] = 'Required';
		$strings['ValidationExpression'] = 'Validation Expression';
		$strings['PossibleValues'] = 'Возможные значения';
		$strings['SingleLineTextbox'] = 'Single Line Textbox';
		$strings['MultiLineTextbox'] = 'Multiple Line Textbox';
		$strings['Checkbox'] = 'Checkbox';
		$strings['SelectList'] = 'Select List';
		$strings['CommaSeparated'] = 'comma separated';
		$strings['Category'] = 'Категория';
		$strings['CategoryReservation'] = 'Категория заказа';
		$strings['CategoryGroup'] = 'Категория группы';
		$strings['SortOrder'] = 'Сортировка заказов';
		$strings['Title'] = 'Заголовок';
		$strings['AdditionalAttributes'] = 'Дополнительные параметры';
		$strings['True'] = 'Да';
		$strings['False'] = 'Нет';
		$strings['ForgotPasswordEmailSent'] = 'Сообщение было отправлено по адресу, указанному в инструкции по смене пароля.';
		$strings['ActivationEmailSent'] = 'Скоро вы должны получить письмо с кодом активации.';
		$strings['AccountActivationError'] = 'Не получилось активировать ваш аккаунт.';
		$strings['Attachments'] = 'Вложения';
		$strings['AttachFile'] = 'Добавить файл';
		$strings['Maximum'] = 'Максимум';
		$strings['NoScheduleAdministratorLabel'] = 'No Schedule Administrator';
		$strings['ScheduleAdministrator'] = 'Администратор календаря';
		$strings['Total'] = 'Total';
		$strings['QuantityReserved'] = 'Quantity Reserved';
		$strings['AllAccessories'] = 'Все аксессуары';
		$strings['GetReport'] = 'Получить запрос';
		$strings['NoResultsFound'] = 'По вашему запросу ничего не найдено';
		$strings['SaveThisReport'] = 'Сохранить отчет';
		$strings['ReportSaved'] = 'Отчет сохранен!';
		$strings['EmailReport'] = 'Email Report';
		$strings['ReportSent'] = 'Отчет отправлен!';
		$strings['RunReport'] = 'Запустить отчет';
		$strings['NoSavedReports'] = 'У вас нет сохраненных отчетов.';
		$strings['CurrentWeek'] = 'Текушая неделя';
		$strings['CurrentMonth'] = 'Текущий месяц';
		$strings['AllTime'] = 'Все время';
		$strings['FilterBy'] = 'Отсортировать по';
		$strings['Select'] = 'Выбрать';
		$strings['List'] = 'List';
		$strings['TotalTime'] = 'Всего времени';
		$strings['Count'] = 'Счетчик';
		$strings['Usage'] = 'Usage';
		$strings['AggregateBy'] = 'Объединено';
		$strings['Range'] = 'Ассортимент';
		$strings['Choose'] = 'Выбор';
		$strings['All'] = 'Все';
		$strings['ViewAsChart'] = 'Отобразить как диаграмму';
		$strings['ReservedResources'] = 'Заказанные автомобили';
		$strings['ReservedAccessories'] = 'Заказанные аксессуары';
		$strings['ResourceUsageTimeBooked'] = 'Resource Usage - Time Booked';
		$strings['ResourceUsageReservationCount'] = 'Resource Usage - Reservation Count';
		$strings['Top20UsersTimeBooked'] = 'Top 20 Users - Time Booked';
		$strings['Top20UsersReservationCount'] = 'Top 20 Users - Reservation Count';
		$strings['ConfigurationUpdated'] = 'The configuration file was updated';
		$strings['ConfigurationUiNotEnabled'] = 'This page cannot be accessed because $conf[\'settings\'][\'pages\'][\'enable.configuration\'] is set to false or missing.';
		$strings['ConfigurationFileNotWritable'] = 'The config file is not writable. Please check the permissions of this file and try again.';
		$strings['ConfigurationUpdateHelp'] = 'Refer to the Configuration section of the <a target=_blank href=%s>Help File</a> for documentation on these settings.';
		$strings['GeneralConfigSettings'] = 'настройки';
		$strings['UseSameLayoutForAllDays'] = 'Use the same layout for all days';
		$strings['LayoutVariesByDay'] = 'Layout varies by day';
		$strings['ManageReminders'] = 'Напоминания';
		$strings['ReminderUser'] = 'ID пользователя';
		$strings['ReminderMessage'] = 'Сообщение';
		$strings['ReminderAddress'] = 'Адреса';
		$strings['ReminderSendtime'] = 'Время отправки';
		$strings['ReminderRefNumber'] = 'Номер заказа';
		$strings['ReminderSendtimeDate'] = 'Дата напоминания';
		$strings['ReminderSendtimeTime'] = 'Время напоминания (HH:MM)';
		$strings['ReminderSendtimeAMPM'] = 'AM / PM';
		$strings['AddReminder'] = 'Добавить напоминание';
		$strings['DeleteReminderWarning'] = 'Вы уверены?';
		$strings['NoReminders'] = 'У вас есть напоминания';
		$strings['Reminders'] = 'Напоминания';
		$strings['SendReminder'] = 'Отправить напоминание';
		$strings['minutes'] = 'минуты';
		$strings['hours'] = 'часы';
		$strings['days'] = 'дни';
		$strings['ReminderBeforeStart'] = 'перед началом';
		$strings['ReminderBeforeEnd'] = 'перед концом';
		$strings['Logo'] = 'Logo';
		$strings['CssFile'] = 'CSS File';
		$strings['ThemeUploadSuccess'] = 'Ваши изменения сохранены. Обновите страницу чтобы увидеть.';
		$strings['MakeDefaultSchedule'] = 'Сделать расписанием по умолчанию';
		$strings['DefaultScheduleSet'] = 'Это ваше расписание по умолчанию';
		$strings['FlipSchedule'] = 'Flip the schedule layout';
		$strings['Next'] = 'Следующий';
		$strings['Success'] = 'Успешно';
		$strings['Participant'] = 'Участник';
		$strings['ResourceFilter'] = 'Фильтр по автомобилям';
		$strings['ResourceGroups'] = 'Группы автомобилей';
		$strings['AddNewGroup'] = 'Добавить новую группу';
		$strings['Quit'] = 'Выйти';
		$strings['AddGroup'] = 'Добавить группу';
		$strings['StandardScheduleDisplay'] = 'Use the standard schedule display';
		$strings['TallScheduleDisplay'] = 'Use the tall schedule display';
		$strings['WideScheduleDisplay'] = 'Use the wide schedule display';
		$strings['CondensedWeekScheduleDisplay'] = 'Use condensed week schedule display';
		$strings['ResourceGroupHelp1'] = 'Drag and drop resource groups to reorganize.';
		$strings['ResourceGroupHelp2'] = 'Right click a resource group name for additional actions.';
		$strings['ResourceGroupHelp3'] = 'Drag and drop resources to add them to groups.';
		$strings['ResourceGroupWarning'] = 'If using resource groups, each resource must be assigned to at least one group. Unassigned resources will not be able to be reserved.';
		$strings['ResourceType'] = 'Тип автомобиля';
		$strings['AppliesTo'] = 'Относится к';
		$strings['UniquePerInstance'] = 'Уникальный для каждого';
		$strings['AddResourceType'] = 'Добавить тип автомобиля';
		$strings['NoResourceTypeLabel'] = '(не выбран тип автомобиля)';
		$strings['ClearFilter'] = 'Очистить фильтр';
		$strings['MinimumCapacity'] = 'Минимальная вместимость';
		$strings['Color'] = 'Цвет';
		$strings['Available'] = 'Доступные';
		$strings['Unavailable'] = 'Недоступные';
		$strings['Hidden'] = 'Скрытые';
		$strings['ResourceStatus'] = 'Статус авто';
		$strings['CurrentStatus'] = 'Текущее состояние';
		$strings['AllReservationResources'] = 'All Reservation Resources';
		$strings['File'] = 'Файл';
		$strings['BulkResourceUpdate'] = 'Обновление всех ресурсов';
		$strings['Unchanged'] = 'Unchanged';
		$strings['Common'] = 'Common';
		$strings['AdvancedFilter'] = 'Advanced Filter';
		$strings['AllParticipants'] = 'All Participants';
		$strings['ResourceAvailability'] = 'Машины в наличии';
		$strings['UnavailableAllDay'] = 'Unavailable All Day';
		$strings['AvailableUntil'] = 'Доступно до';
		$strings['AvailableBeginningAt'] = 'Доступно начиная с';
		$strings['AllowParticipantsToJoin'] = 'Разрешить участникам присоединиться';
		$strings['JoinThisReservation'] = 'Join This Reservation';
		$strings['Import'] = 'Импорт';
		$strings['GetTemplate'] = 'Загрузить шаблон';
		$strings['UserImportInstructions'] = 'Файл должен быть в формате CSV. Username and email are required fields. Leaving other fields blank will set default values and \'password\' as the user\'s password. Use the supplied template as an example.';
		$strings['RowsImported'] = 'Rows Imported';
		$strings['RowsSkipped'] = 'Rows Skipped';
		$strings['DateTime'] = 'Дата Время';
		// End Strings

		// Install
		$strings['InstallApplication'] = 'Install Booked Scheduler (MySQL only)';
		$strings['IncorrectInstallPassword'] = 'Пароль неверный.';
		$strings['SetInstallPassword'] = 'You must set an install password before the installation can be run.';
		$strings['InstallPasswordInstructions'] = 'In %s please set %s to a password which is random and difficult to guess, then return to this page.<br/>You can use %s';
		$strings['NoUpgradeNeeded'] = 'There is no upgrade needed. Running the installation process will delete all existing data and install a new copy of Booked Scheduler!';
		$strings['ProvideInstallPassword'] = 'Please provide your installation password.';
		$strings['InstallPasswordLocation'] = 'This can be found at %s in %s.';
		$strings['VerifyInstallSettings'] = 'Verify the following default settings before continuing. Or you can change them in %s.';
		$strings['DatabaseName'] = 'Название базы';
		$strings['DatabaseUser'] = 'Пользователь базы';
		$strings['DatabaseHost'] = 'Адрес базы';
		$strings['DatabaseCredentials'] = 'You must provide credentials of a MySQL user who has privileges to create databases. If you do not know, contact your database admin. In many cases, root will work.';
		$strings['MySQLUser'] = 'MySQL пользователь';
		$strings['InstallOptionsWarning'] = 'The following options will probably not work in a hosted environment. If you are installing in a hosted environment, use the MySQL wizard tools to complete these steps.';
		$strings['CreateDatabase'] = 'Создать базу';
		$strings['CreateDatabaseUser'] = 'Создать пользователя базы';
		$strings['PopulateExampleData'] = 'Import sample data. Creates admin account: admin/password and user account: user/password';
		$strings['DataWipeWarning'] = 'Warning: This will delete any existing data';
		$strings['RunInstallation'] = 'Запустить установку';
		$strings['UpgradeNotice'] = 'You are upgrading from version <b>%s</b> to version <b>%s</b>';
		$strings['RunUpgrade'] = 'Загрузить обновления';
		$strings['Executing'] = 'Executing';
		$strings['StatementFailed'] = 'Неудачно. Подробности:';
		$strings['SQLStatement'] = 'SQL Statement:';
		$strings['ErrorCode'] = 'Код ошибки:';
		$strings['ErrorText'] = 'Текст ошибки:';
		$strings['InstallationSuccess'] = 'Installation completed successfully!';
		$strings['RegisterAdminUser'] = 'Register your admin user. This is required if you did not import the sample data. Ensure that $conf[\'settings\'][\'allow.self.registration\'] = \'true\' in your %s file.';
		$strings['LoginWithSampleAccounts'] = 'If you imported the sample data, you can log in with admin/password for admin user or user/password for basic user.';
		$strings['InstalledVersion'] = 'You are now running version %s of Booked Scheduler';
		$strings['InstallUpgradeConfig'] = 'It is recommended to upgrade your config file';
		$strings['InstallationFailure'] = 'There were problems with the installation.  Please correct them and retry the installation.';
		$strings['ConfigureApplication'] = 'Configure Booked Scheduler';
		$strings['ConfigUpdateSuccess'] = 'Your config file is now up to date!';
		$strings['ConfigUpdateFailure'] = 'We could not automatically update your config file. Please overwrite the contents of config.php with the following:';
		$strings['SelectUser'] = 'Выбрать пользователя';
		// End Install

		// Errors
		$strings['LoginError'] = 'We could not match your username or password';
		$strings['ReservationFailed'] = 'Your reservation could not be made';
		$strings['MinNoticeError'] = 'This reservation requires advance notice.  The earliest date and time that can be reserved is %s.';
		$strings['MaxNoticeError'] = 'This reservation cannot be made this far in the future.  The latest date and time that can be reserved is %s.';
		$strings['MinDurationError'] = 'This reservation must last at least %s.';
		$strings['MaxDurationError'] = 'This reservation cannot last longer than %s.';
		$strings['ConflictingAccessoryDates'] = 'There are not enough of the following accessories:';
		$strings['NoResourcePermission'] = 'You do not have permission to access one or more of the requested resources.';
		$strings['ConflictingReservationDates'] = 'There are conflicting reservations on the following dates:';
		$strings['StartDateBeforeEndDateRule'] = 'The start date and time must be before the end date and time.';
		$strings['StartIsInPast'] = 'The start date and time cannot be in the past.';
		$strings['EmailDisabled'] = 'The administrator has disabled email notifications.';
		$strings['ValidLayoutRequired'] = 'Slots must be provided for all 24 hours of the day beginning and ending at 12:00 AM.';
		$strings['CustomAttributeErrors'] = 'There are problems with the additional attributes you provided:';
		$strings['CustomAttributeRequired'] = '%s is a required field.';
		$strings['CustomAttributeInvalid'] = 'The value provided for %s is invalid.';
		$strings['AttachmentLoadingError'] = 'Sorry, there was a problem loading the requested file.';
		$strings['InvalidAttachmentExtension'] = 'You can only upload files of type: %s';
		$strings['InvalidStartSlot'] = 'The start date and time requested is not valid.';
		$strings['InvalidEndSlot'] = 'The end date and time requested is not valid.';
		$strings['MaxParticipantsError'] = '%s can only support %s participants.';
		$strings['ReservationCriticalError'] = 'There was a critical error saving your reservation. If this continues, contact your system administrator.';
		$strings['InvalidStartReminderTime'] = 'The start reminder time is not valid.';
		$strings['InvalidEndReminderTime'] = 'The end reminder time is not valid.';
		$strings['QuotaExceeded'] = 'Quota limit exceeded.';
		$strings['MultiDayRule'] = '%s does not allow reservations across days.';
		$strings['InvalidReservationData'] = 'There were problems with your reservation request.';
		$strings['PasswordError'] = 'Password must contain at least %s letters and at least %s numbers.';
		$strings['PasswordErrorRequirements'] = 'Password must contain a combination of at least %s upper and lower case letters and %s numbers.';
		$strings['NoReservationAccess'] = 'You are not allowed to change this reservation.';
		$strings['PasswordControlledExternallyError'] = 'Your password is controlled by an external system and cannot be updated here.';
		$strings['NoResources'] = 'You have not added any resources.';
		$strings['ParticipationNotAllowed'] = 'You are not allowed to join this reservation.';
		$strings['InsecureRequestError'] = 'Insecure request. If you continue to see this error please log in again and retry your request.';
		$strings['RemoveExistingPermissions'] = 'Remove existing permissions?';
		// End Errors

		// Page Titles
		$strings['CreateReservation'] = 'Создать бронирование';
		$strings['EditReservation'] = 'Редактировать бронирование';
		$strings['LogIn'] = 'Войти';
		$strings['ManageReservations'] = 'Заказы';
		$strings['AwaitingActivation'] = 'Ожидающие активации';
		$strings['PendingApproval'] = 'Ожидающие утверждения';
		$strings['ManageSchedules'] = 'Расписания';
		$strings['ManageResources'] = 'Автомобили';
		$strings['ManageAccessories'] = 'Допы';
		$strings['ManageUsers'] = 'Пользователи';
		$strings['ManageGroups'] = 'Группы';
		$strings['ManageQuotas'] = 'Квоты';
		$strings['ManageBlackouts'] = 'Blackout Times';
		$strings['MyDashboard'] = 'Моя панель';
		$strings['ServerSettings'] = 'Настройки сервера';
		$strings['Dashboard'] = 'Панель';
		$strings['Help'] = 'Помощь';
		$strings['Administration'] = 'Администрирование';
		$strings['About'] = 'О программе';
		$strings['Bookings'] = 'Бронирования';
		$strings['Schedule'] = 'Расписание';
		$strings['Reservations'] = 'Заказы';
		$strings['Account'] = 'Учетная запись';
		$strings['EditProfile'] = 'Редактировать мой профиль';
		$strings['FindAnOpening'] = 'Найти и открыть';
		$strings['OpenInvitations'] = 'Открыть приглашения';
		$strings['MyCalendar'] = 'Мой календарь';
		$strings['ResourceCalendar'] = 'Календарь автомобилей';
		$strings['Reservation'] = 'Заказ';
		$strings['Install'] = 'Установка';
		$strings['ChangePassword'] = 'Изменить пароль';
		$strings['MyAccount'] = 'Моя учетная запись';
		$strings['Profile'] = 'Профиль';
		$strings['ApplicationManagement'] = 'Управление приложением';
		$strings['ForgotPassword'] = 'Забыли пароль';
		$strings['NotificationPreferences'] = 'Настройки уведомлений';
		$strings['ManageAnnouncements'] = 'Управление объявлениями';
		$strings['Responsibilities'] = 'Обязательства';
		$strings['GroupReservations'] = 'Групповые заказы';
		$strings['ResourceReservations'] = 'Заказы автомобилей';
		$strings['Customization'] = 'Настройка';
		$strings['Attributes'] = 'Атрибуты';
		$strings['AccountActivation'] = 'Активация учетной записи';
		$strings['ScheduleReservations'] = 'Расписание заказов';
		$strings['Reports'] = 'Отчеты';
		$strings['GenerateReport'] = 'Создать новый отчет';
		$strings['MySavedReports'] = 'Мои сохраненные отчеты';
		$strings['CommonReports'] = 'Общие отчеты';
		$strings['ViewDay'] = 'Посмотреть день';
		$strings['Group'] = 'Группа';
		$strings['ManageConfiguration'] = 'Настройка приложения';
		$strings['LookAndFeel'] = 'Внешний вид';
		$strings['ManageResourceGroups'] = 'Группы автомобилей';
		$strings['ManageResourceTypes'] = 'Типы автомобилей';
		$strings['ManageResourceStatus'] = 'Статусы автомобилей';
		// End Page Titles

		// Day representations
		$strings['DaySundaySingle'] = 'В';
		$strings['DayMondaySingle'] = 'П';
		$strings['DayTuesdaySingle'] = 'В';
		$strings['DayWednesdaySingle'] = 'С';
		$strings['DayThursdaySingle'] = 'Ч';
		$strings['DayFridaySingle'] = 'П';
		$strings['DaySaturdaySingle'] = 'С';

		$strings['DaySundayAbbr'] = 'Вс';
		$strings['DayMondayAbbr'] = 'Пон';
		$strings['DayTuesdayAbbr'] = 'Вт';
		$strings['DayWednesdayAbbr'] = 'Ср';
		$strings['DayThursdayAbbr'] = 'Чт';
		$strings['DayFridayAbbr'] = 'Пт';
		$strings['DaySaturdayAbbr'] = 'Сб';
		// End Day representations

		// Email Subjects
		$strings['ReservationApprovedSubject'] = 'Ваш заказ одобрен';
		$strings['ReservationCreatedSubject'] = 'Ваш заказ создан';
		$strings['ReservationUpdatedSubject'] = 'Ваш заказ обновлен';
		$strings['ReservationDeletedSubject'] = 'Ваш заказ удален';
		$strings['ReservationCreatedAdminSubject'] = 'Уведомление: заказ создан';
		$strings['ReservationUpdatedAdminSubject'] = 'Уведомление: заказ обновлен';
		$strings['ReservationDeleteAdminSubject'] = 'Уведомление: заказ удален';
		$strings['ReservationApprovalAdminSubject'] = 'Notification: Reservation Requires Your Approval';
		$strings['ParticipantAddedSubject'] = 'Reservation Participation Notification';
		$strings['ParticipantDeletedSubject'] = 'Бронирование удалено';
		$strings['InviteeAddedSubject'] = 'Reservation Invitation';
		$strings['ResetPassword'] = 'Password Reset Request';
		$strings['ActivateYourAccount'] = 'Активируйте вашу учетную запись';
		$strings['ReportSubject'] = 'Your Requested Report (%s)';
		$strings['ReservationStartingSoonSubject'] = 'Reservation for %s is starting soon';
		$strings['ReservationEndingSoonSubject'] = 'Reservation for %s is ending soon';
		$strings['UserAdded'] = 'Новый пользователь добавлен';
		$strings['UserDeleted'] = 'Учетная запись %s была удалена %s';
		// End Email Subjects

		$this->Strings = $strings;

		return $this->Strings;
	}

	/**
	 * @return array
	 */
	protected function _LoadDays()
	{
		$days = array();

		/***
		DAY NAMES
		All of these arrays MUST start with Sunday as the first element
		and go through the seven day week, ending on Saturday
		 ***/
		// The full day name
		$days['full'] = array('Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота');
		// The three letter abbreviation
		$days['abbr'] = array('Вск', 'Пнд', 'Втр', 'Срд', 'Чтв', 'Птн', 'Суб');
		// The two letter abbreviation
		$days['two'] = array('Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб');
		// The one letter abbreviation
		$days['letter'] = array('В', 'П', 'В', 'С', 'Ч', 'П', 'С');

		$this->Days = $days;

		return $this->Days;
	}

	/**
	 * @return array
	 */
	protected function _LoadMonths()
	{
		$months = array();

		/***
		MONTH NAMES
		All of these arrays MUST start with January as the first element
		and go through the twelve months of the year, ending on December
		 ***/
		// The full month name
		$months['full'] = array('Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь');
		// The three letter month name
		$months['abbr'] = array('Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июн', 'Июл', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек');

		$this->Months = $months;

		return $this->Months;
	}

	/**
	 * @return array
	 */
	protected function _LoadLetters()
	{
		$this->Letters = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');

		return $this->Letters;
	}

	protected function _GetHtmlLangCode()
	{
		return 'ru';
	}
}

?>