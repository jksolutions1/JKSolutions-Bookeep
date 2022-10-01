<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Conversationtypes Model
 *
 * @property \App\Model\Table\ConversationsTable&\Cake\ORM\Association\BelongsTo $Conversations
 *
 * @method \App\Model\Entity\Conversationtype newEmptyEntity()
 * @method \App\Model\Entity\Conversationtype newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Conversationtype[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Conversationtype get($primaryKey, $options = [])
 * @method \App\Model\Entity\Conversationtype findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Conversationtype patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Conversationtype[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Conversationtype|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Conversationtype saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Conversationtype[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Conversationtype[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Conversationtype[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Conversationtype[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ConversationtypesTable extends Table
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

        $this->setTable('conversationtypes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Conversations', [
            'foreignKey' => 'con_id',
            'joinType' => 'INNER',
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
            ->integer('con_id')
            ->notEmptyString('con_id');

        $validator
            ->integer('contype_type')
            ->requirePresence('contype_type', 'create')
            ->notEmptyString('contype_type');

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
        $rules->add($rules->existsIn('con_id', 'Conversations'), ['errorField' => 'con_id']);

        return $rules;
    }
}
