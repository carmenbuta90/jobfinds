<?php

class JobsController extends AppController{
	public $name = 'Jobs';
	
	/*
	* Default index method
	*/
	
	public function index(){
		//set categories query options
		$options = array(
			'order' => array('Category.name'=>'asc')
		);
		
		//get categories
		$categories = $this->Job->Category->find('all', $options);
		
		//set categories
		$this->set('categories', $categories);
		
		//create options array
		$options = array(
			'order' => array('Job.created' => 'desc'),
			'limit' => 10
		);
			
		//get job info
		$jobs = $this->Job->find('all', $options);
		
		$this->set('title_for_layout', 'JobFinds | Welcome');
		
		$this->set('jobs', $jobs);
		}
	
	/*
	* Browse method
	*/
	public function browse($category = null){
		//Init condition array
		$conditions = array();
		//Check keyword filter
		if($this->request->is('post')){
			if(!empty($this->request->data('keywords'))){
				$conditions[] = array('OR' => array(
					'Job.title LIKE' => "%".$this->request->data('keywords')."%",
					'Job.description LIKE' => "%".$this->request->data('keywords')."%"

				));
			}

		}
		
		if(!empty($this->request->data('states')) && $this->request->data('states') != 'Select State' ){
			$conditions[] = array(
				'Job.state like' => "%".$this->request->data('states')."%",
			);
		}
		
		if(!empty($this->request->data('category')) && $this->request->data('category') != 'Select Category' ){
			$conditions[] = array(
				'Job.category_id like' => "%".$this->request->data('category')."%",
			);
		}
		//set categories query options
		$options = array(
			'order' => array('Category.name'=>'asc')
		);
		
		//get categories
		$categories = $this->Job->Category->find('all', $options);
		
		$this->set('title_for_layout', 'JobFinds | Browse for a job');
		
		//set categories
		$this->set('categories', $categories);
		

		
		if($category != null){
			//match category
			$conditions[] = array(
			'Job.category_id LIKE' => "%".$category."%"
			);
		}
		
		//set query options
		$options = array(
			'order' => array('Job.created'=>'desc'),
			'conditions' =>$conditions,
			'limit' => 8
		);
		
		//get job info
		$jobs = $this->Job->find('all', $options);
		$this->set('jobs', $jobs);
		
	}
	
	/*
	* View single job
	*/
	
	public function view($id){
		if(!$id){
			throw new NotFoundExeption(__('Invalid job listing'));
			
		}
		$job = $this->Job->findById($id);
		
		if(!$job){
			throw new NotFoundExeption(__('Invalid job listing'));
		}
		
		//set title
		$this->set('title_for_layout', $job['Job']['title']);
		$this->set('job', $job);
	}
	
	/*
	* Add job
	*/
	public function add(){
		//set categories query options
		$options = array(
			'order' => array('Category.name'=>'asc')
		);
		
		//get categories
		$categories = $this->Job->Category->find('list', $options);
		
		//set categories
		$this->set('categories', $categories);
		
		
		//get types for select lists
		$types = $this->Job->Type->find('list');
		
		//set types
		$this->set('types', $types);
		
		if($this->request->is('post')){
			$this->Job->create();
			
			//save logged user id
			$this->request->data['Job']['user_id']= $this->Auth->user('id');
			
			if($this->Job->save($this->request->data)){
				$this->Session->setFlash(__('Your job has been listed'));
				return $this->redirect(array('action'=>'index'));
			}
			$this->Session->setFlash(__('Unable to add your job'));
			
		}
	}
	//edit job
	public function edit($id){
		//set categories query options
		$options = array(
			'order' => array('Category.name'=>'asc')
		);
		
		//get categories
		$categories = $this->Job->Category->find('list', $options);
		
		//set categories
		$this->set('categories', $categories);
		
		
		//get types for select lists
		$types = $this->Job->Type->find('list');
		
		//set types
		$this->set('types', $types);
		
		if(!$id){
			throw new NotFoundExeption(__('Invalid job listing'));
		}
		$job = $this->Job->findById($id);
		if(!$job){
			throw new NotFoundExeption(__('Invalid job listing'));

		}
		
		if($this->request->is(array('job','put'))){
			$this->Job->id = $id;
			

			
			if($this->Job->save($this->request->data)){
				$this->Session->setFlash(__('Your job has been updated'));
				return $this->redirect(array('action'=>'index'));
			}
			$this->Session->setFlash(__('Unable to update your job'));
			
		}
		if(!$this->request->data){
			$this->request->data = $job;
		}
	}
	
	// delete job
	
	public function delete($id){
		if($this->request->is('get')){
			throw new MethodNotAllowedException();
		}
		if($this->Job->delete($id)){
			$this->Session->setFlash(
				__('The job  with id : %s has been  deleted.',h($id))
			);
			return $this->redirect(array('action'=>'index'));
		}
	}
}