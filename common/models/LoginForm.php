<?php
namespace common\models;

use Yii;
use yii\base\Model;

/**
 * Login form
 */
class LoginForm extends Model
{
    public $phone;
    public $password;
    public $rememberMe = true;
    public $mode;

    private $_user;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['phone', 'password'], 'required'],
            [['phone'], 'match', 'pattern' => '/^((\+?7|8)(?!95[4-79]|99[08]|907|94[^0]|336)([348]\d|9[0-6789]|7[0247])\d{8}|\+?(99[^4568]\d{7,11}|994\d{9}|9955\d{8}|996[57]\d{8}|9989\d{8}|380[34569]\d{8}|375[234]\d{8}|372\d{7,8}|37[0-4]\d{8}))$/', 'message' => 'Неправильный формат телефона'],
            [['rememberMe'], 'boolean'],
            [['password'], 'validatePassword'],
        ];
    }

    /**
     * @return array
     */
    public function attributeLabels()
    {
        return [
            'phone_number' => 'Номер телефона',
            'password'     => 'Пароль',
            'rememberMe'   => 'Запомнить',
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
            if (
                !$user ||
//              ($this->mode === 'backend' && $user->role !== User::ROLE_ADMIN) ||
                !$user->validatePassword($this->password)
            ) {
                $this->addError($attribute, 'Неправильный номер телефона или пароль.');
            }
        }
    }

    /**
     * Logs in a user using the provided username and password.
     *
     * @return @return bool|User
     */
    public function login()
    {
        if ($this->validate()) {
            $user = $this->getUser();
//            echo Yii::$app->user->login($user, 3600 * 24 * 30);
//            die;
            return Yii::$app->user->login($user,  3600 * 24 * 30);
        }
        
        return false;
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    protected function getUser()
    {
        if ($this->_user === null) {
            $this->_user = User::findByPhone($this->phone);
        }

        return $this->_user;
    }
}
