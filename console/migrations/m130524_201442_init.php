<?php

use yii\db\Migration;

class m130524_201442_init extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user}}', [
            'id'                   => $this->primaryKey()->comment('Пользователь'),
            'city_id'              => $this->integer()->comment('Город'),
            'phone'                => $this->string(16)->notNull()->comment('Телефон')->unique(),
            'phone_os'             => $this->smallInteger()->comment('ОС телефона'),
            'phone_extra'          => $this->string(256)->comment('Дополнительные номера'),
            'phone_token'          => $this->string()->comment('PUSH токен'),
            'email'                => $this->string()->unique()->comment('Email'),
            'first_name'           => $this->string()->comment('Имя'),
            'last_name'            => $this->string()->comment('Фамилия'),
            'birth_date'           => $this->date()->comment('Дата рождения'),
            'sex'                  => $this->smallInteger()->comment('Пол'),
            'role'                 => $this->integer()->comment('Роль'),
            'password_hash'        => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique()->comment('Токен сброса пароля'),
            'auth_key'             => $this->string(32)->notNull(),
            'access_token'         => $this->string()->comment('API токен'),
            'active'               => $this->smallInteger()->defaultValue(1)->comment('Состояние'),
            'status'               => $this->smallInteger()->defaultValue(0)->comment('Статус'),
            'created_at'           => $this->dateTime()->comment('Создан'),
            'updated_at'           => $this->dateTime()->comment('Изменен'),
        ], $tableOptions);

        /**
         * insert into
         * up.user(city_id, phone, phone_os, phone_extra, phone_token, email, first_name, last_name, birth_date, sex, role, password_hash, password_reset_token, access_token, auth_key, active, `status`)
         * select city_id, phone_number, phone_type, phone_number_additional, phone_token, email, firstname, lastname, birth_date, gender, role, password_hash, password_reset_token, access_token, auth_key, status, `public` from unipark.user
         */
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}
