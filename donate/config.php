<?php

class Config
{
    // Ваш секретный ключ (из настроек проекта в личном кабинете unitpay.ru )
    const SECRET_KEY = 'd611f31df5654308e9bb3ce4b2b1ed9a';
    // Стоимость товара в руб.
    const ITEM_PRICE = 1;

    // Таблица начисления товара, например `users`
    const TABLE_ACCOUNT = 'accounts';
    // Название поля из таблицы начисления товара по которому производится поиск аккаунта/счета, например `email`
    const TABLE_ACCOUNT_NAME = 'Name';
    // Название поля из таблицы начисления товара которое будет увеличено на колличево оплаченого товара, например `sum`, `donate`
    const TABLE_ACCOUNT_DONATE= 'newDonation';

    // Параметры соединения с бд
    // Хост
    const DB_HOST = 'db3.myarena.ru';
    // Имя пользовател
    const DB_USER = 'u7767_node';
    // Пароль
    const DB_PASS = 'N6n9A6v4';
    // Назывние базы
    const DB_NAME = 'u7767_node';
    // номер порта(необязательно)
    const DB_PORT = '';

}