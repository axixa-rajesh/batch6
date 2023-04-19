<?php
class CategoryController extends Controller
{
    public $cat;
    public function __construct()
    {
        parent::__construct();
        $this->cat = $this->loadModel('category');
    }
    public function index()
    {
        $data = $this->cat->all();

        $this->view->load("category.index", compact('data'));
    }
    public function create()
    {
        $this->view->load("category.create");
    }
    public function store()
    {
        $storeinfo = [
            'category_name' => request('category_name'),
            'description' => request('description'),
        ];
        if ($this->cat->save($storeinfo)) {
            Session::set('gmsg', "Data saved successfully");
            redirect('category.index');
        } else {
            redirect('category.create');
        }
    }
    public function edit($id)
    {
        $info = $this->cat->find($id);
        //rint_r($info);
        $this->view->load('category.edit', compact('info'));
    }
    public function update($id)
    {
        $storeinfo = [
            'category_name' => request('category_name'),
            'description' => request('description'),
        ];
        $this->cat->update($storeinfo, $id);
        Session::set('gmsg', "Data updated successfully");

        redirect('category.index');
    }
    public function destroy($id)
    {
        $this->cat->delete($id);
        Session::set('emsg', "Data delete successfully");
        redirect('category.index');
    }
}
