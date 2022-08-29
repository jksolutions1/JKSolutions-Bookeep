<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ClientDocuments Model
 *
 * @property \App\Model\Table\ClientsTable&\Cake\ORM\Association\BelongsTo $Clients
 *
 * @method \App\Model\Entity\ClientDocument newEmptyEntity()
 * @method \App\Model\Entity\ClientDocument newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ClientDocument[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ClientDocument get($primaryKey, $options = [])
 * @method \App\Model\Entity\ClientDocument findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ClientDocument patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ClientDocument[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ClientDocument|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ClientDocument saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ClientDocument[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ClientDocument[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ClientDocument[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ClientDocument[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ClientDocumentsTable extends Table
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

        $this->setTable('client_documents');

        $this->belongsTo('Clients', [
            'foreignKey' => 'client_id',
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
            ->integer('client_id')
            ->requirePresence('client_id', 'create')
            ->notEmptyString('client_id');

        $validator
            ->integer('document_no')
            ->requirePresence('document_no', 'create')
            ->notEmptyString('document_no');

        $validator
            ->integer('document_type')
            ->requirePresence('document_type', 'create')
            ->notEmptyString('document_type');

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
        $rules->add($rules->existsIn('client_id', 'Clients'), ['errorField' => 'client_id']);

        return $rules;
    }
}
