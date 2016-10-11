<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event, ArrayObject;

/**
 * Funcionarios Controller
 *
 * @property \App\Model\Table\FuncionariosTable $Funcionarios
 */
class FuncionariosController extends AppController
{
    /*public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['add', 'logout']);
    }
    public function login()
     {
        if ($this->request->is('post')) {
            $funcionarios = $this->Auth->identify();
            if ($funcionarios) {
                $this->Auth->setUser($funcionarios);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Usuário ou senha inválidos, tente novamente'));
        }
    }

    public function logout()
     {
        return $this->redirect($this->Auth->logout());
     }*/
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $funcionarios = $this->paginate($this->Funcionarios);

        $this->set(compact('funcionarios'));
        $this->set('_serialize', ['funcionarios']);
    }

    /**
     * View method
     *
     * @param string|null $id Funcionario id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $funcionario = $this->Funcionarios->get($id, [
            'contain' => []
        ]);

        $this->set('funcionario', $funcionario);
        $this->set('_serialize', ['funcionario']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $funcionario = $this->Funcionarios->newEntity();
        if ($this->request->is('post')) {
            $funcionario = $this->Funcionarios->patchEntity($funcionario, $this->request->data);
            if ($this->Funcionarios->save($funcionario)) {
                $this->Flash->success(__('O funcionário foi salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O funcionário não pôde ser salvo. Por favor, tente de novo.'));
            }
        }
        $this->set(compact('funcionario'));
        $this->set('_serialize', ['funcionario']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Funcionario id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $funcionario = $this->Funcionarios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $funcionario = $this->Funcionarios->patchEntity($funcionario, $this->request->data);
            if ($this->Funcionarios->save($funcionario)) {
                $this->Flash->success(__('O funcionário foi salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O funcionário não pôde ser salvo. Por favor, tente de novo.'));
            }
        }
        $this->set(compact('funcionario'));
        $this->set('_serialize', ['funcionario']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Funcionario id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $funcionario = $this->Funcionarios->get($id);
        if ($this->Funcionarios->delete($funcionario)) {
            $this->Flash->success(__('O funcionário foi deletado com sucesso.'));
        } else {
            $this->Flash->error(__('O funcionário não pôde ser deletado. Por favor, tente de novo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
