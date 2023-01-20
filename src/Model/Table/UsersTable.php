<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @method \App\Model\Entity\User newEmptyEntity()
 * @method \App\Model\Entity\User newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class UsersTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Post', [
            'foreignKey' => 'users_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('name')
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->add('name', [
                'notBlank' => [
                    'rule'    => ['notBlank'],
                    'message' => 'Please enter your name',
                    'last' => true
                ],
                'characters' => [
                    'rule'    => ['custom', '/^[A-Z_ ]+$/i'],
                    'allowEmpty' => false,
                    'last' => true,
                    'message' => 'Please Enter characters only.'
                ],
                'length' => [
                    'rule' => ['minLength', 2],
                    'last' => true,
                    'message' => 'First Name need to be at least 2 characters long',
                ],
            ]);

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email', 'Please enter your email')
            ->add('email', 'unique', [
                'rule' => 'validateUnique', 'provider' => 'table',
                'message' => 'Email already exist please enter another email',
            ]);

        $validator
            ->scalar('password')
            ->maxLength('password', 100)
            ->requirePresence('password', 'create')
            ->add('password', [
                'notBlank' => [
                    'rule'    => ['notBlank'],
                    'message' => 'Please enter your password',
                    'last' => true,
                ],
                'upperCase' => [
                    'rule' => function ($value) {
                        $count = mb_strlen(preg_replace('![^A-Z]+!', '', $value));
                        if ($count > 0) {
                            return true;
                        } else {
                            return false;
                        }
                    },
                    'message' => 'Please enter at least one uppercase',
                ],
                'lowerCase' => [
                    'rule' => function ($value) {
                        $count = mb_strlen(preg_replace('![^a-z]+!', '', $value));
                        if ($count > 0) {
                            return true;
                        } else {
                            return false;
                        }
                    },
                    'message' => 'Please enter at least one lowercase',
                ],
                'numeric' => [
                    'rule' => function ($value) {
                        $count = mb_strlen(preg_replace('![^0-9]+!', '', $value));
                        if ($count > 0) {
                            return true;
                        } else {
                            return false;
                        }
                    },
                    'message' => 'Please enter at least one numeric',
                ],
                'special' => [
                    'rule' => function ($value) {
                        $count = mb_strlen(preg_replace('![^@#*]+!', '', $value));
                        if ($count > 0) {
                            return true;
                        } else {
                            return false;
                        }
                    },
                    'message' => 'Please enter at least one special character',
                ],
                'minLength' => [
                    'rule' => ['minLength', 8],
                    'message' => 'Password need to be 8 characters long',
                ],
            ]);

        $validator
            ->scalar('confirm_password')
            ->maxLength('confirm_password', 255)
            ->requirePresence('confirm_password', 'create')
            ->add('confirm_password', [
                'notBlank' => [
                    'rule'    => ['notBlank'],
                    'message' => 'Please enter your password',
                    'last' => true,
                ],
                'upperCase' => [
                    'rule' => function ($value) {
                        $count = mb_strlen(preg_replace('![^A-Z]+!', '', $value));
                        if ($count > 0) {
                            return true;
                        } else {
                            return false;
                        }
                    },
                    'message' => 'Please enter at least one uppercase',
                ],
                'lowerCase' => [
                    'rule' => function ($value) {
                        $count = mb_strlen(preg_replace('![^a-z]+!', '', $value));
                        if ($count > 0) {
                            return true;
                        } else {
                            return false;
                        }
                    },
                    'message' => 'Please enter at least one lowercase',
                ],
                'numeric' => [
                    'rule' => function ($value) {
                        $count = mb_strlen(preg_replace('![^0-9]+!', '', $value));
                        if ($count > 0) {
                            return true;
                        } else {
                            return false;
                        }
                    },
                    'message' => 'Please enter at least one numeric',
                ],
                'special' => [
                    'rule' => function ($value) {
                        $count = mb_strlen(preg_replace('![^@#*]+!', '', $value));
                        if ($count > 0) {
                            return true;
                        } else {
                            return false;
                        }
                    },
                    'message' => 'Please enter at least one special character',
                ],
                'minLength' => [
                    'rule' => ['minLength', 8],
                    'message' => 'Password need to be 8 characters long',
                ],
                'compare' => [
                    'rule' => ['compareWith', 'password'],
                    'message' => 'Confirm Password does not match with password',
                ],
            ]);

        $validator
            ->scalar('image')
            ->requirePresence('image', 'create')
            ->notEmptyString('image', 'Please select your image');

        $validator
            ->dateTime('created_at')
            ->notEmptyDateTime('created_at');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['email']), ['errorField' => 'email']);

        return $rules;
    }
}
